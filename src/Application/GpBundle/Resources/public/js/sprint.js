(function ($) {
    $(function () {
        var sprint = $('#sprint');
        var current = $('#sprint_current');
        var reloadDelay = 8000;

        function reload(callback, force) {
            $.ajax({
                url: sprint.attr('data-ping-url').replace(/_HASH_/, force ? 'force' : current.attr('data-sprint-hash')),
                success: function (html) {
                    if (html && 'noop' != html) refresh(html);
                    if($.isFunction(callback)) callback();
                }
            });
        }

        function resize() {
            current.width($('body').width() - current.offset().left - 15);
        }

        function editionDialog(dialog)
        {
            dialog.dialog('option', 'title', dialog.find('.dialog_title').text());
            dialog.find('.dialog_title').remove();
            dialog.find('form.ajax_form').ajaxForm({
                success: function(data) {
                    if(data == 'ok') {
                        dialog.dialog('close');
                        $('body').trigger('miam.change');
                    }
                    else {
                        dialog.html(data);
                        editionDialog(dialog);
                    }
                }
            });
            dialog.find('.focus_me').focus();
        }

        function updateProgression() {
            var statuses = { 20: 0, 30: 0, 40: 0, 50: 0 };
            current.find('div.story:visible').each(function() {
                points = parseInt($(this).story('getPoints'));
                status = $(this).closest('div.status').attr('data-status');
                statuses[status] += points;
            });
            $.each(statuses, function(code, total) {
                sprint.find('div.total_status_'+code+' span').text(total);
            });
            sprint.find('div.progression .finished').text(statuses[50]);
            sprint.find('div.progression .total').text(statuses[20] + statuses[30] + statuses[40] + statuses[50]);
        }

        setTimeout(ping = function () { 
            reload(function() {setTimeout(ping, reloadDelay);});
        }, reloadDelay);

        $('body').bind('miam.change', reload);

        function refresh(html) {
            html && sprint.html(html);
            var table = sprint.find('div#sprintBacklog div.projects');
            current = $('#sprint_current');
            sprint.find('.colSide').tabs({
                select: function(e, ui) { $.cookie('miam.tab', ui.index); },
                selected: $.cookie('miam.tab') || 0
            });
            sprint.find('div.titleWithActions').height(sprint.find('div.colSide ul.tabs').height());
            sprint.find('div.story_object').story();
            sprint.find('div.stories').each(function() {
                var projectId = $(this).closest('.project').attr('data-project-id');
                var status = $(this).closest('.status').attr('data-status');
                $(this).sortable({
                    distance: 5,
                    connectWith: 'div.project_'+projectId+' div.stories',
                    helper: 'clone',
                    placeholder: 'story_placeholder',
                    receive: function(e, ui) {
                        if(ui.item.story('getPoints') == '?') {
                            if(!ui.item.story('askPoints')) {
                                reload(null, true);
                                return;
                            }
                        }
                        $.ajax({
                            type: 'POST',
                            url:        sprint.attr('data-schedule-url')+'?'+$(this).sortable('serialize', { attribute: 'rel' }),
                            data:       { story_id: ui.item.story('getId'), status: status, points: ui.item.story('getPoints') },
                            success: refresh
                        });
                    },
                    update: function(e, ui) {
                        if(!ui.sender && status == ui.item.closest('.status').attr('data-status')) {
                            $.ajax({
                                type: 'POST',
                                url:        sprint.attr('data-sort-story-url'),
                                data:       $(this).sortable('serialize', { attribute: 'rel' }),
                                success:    refresh
                            });
                        }
                    }
                })
                .disableSelection();
            });
            sprint.find('div.projects').sortable({
                axis: 'y',
                handle: '.project_name',
                distance: 5,
                update: function(e, ui) {
                    $.ajax({
                        type: 'POST',
                        url:        sprint.attr('data-sort-project-url'),
                        data:       $(this).sortable('serialize', { attribute: 'rel' }),
                        success:    refresh
                    });
                }
            }).disableSelection();

            $('#sprint .story_new, #sprint .sprint_new').click(function() {
                $.ajax({ url: $(this).attr('href'), success: function(html) {
                    var dialog = $('<div>').html(html).dialog({
                        zIndex: 100,
                        dragStart: function(e) { $(e.target).parent().css('opacity', 0.5); },
                        dragStop: function(e) { $(e.target).parent().css('opacity', 1); },
                        resizable: false,
                        width: '500px'
                    });
                    editionDialog(dialog);
                }});
                return false;
            });
            var activeFilters = ($.cookie('miam.filters') || '').split(',');
            $('#filters input').each(function() {
               $(this).attr('checked', inArray($(this).val(), activeFilters)); 
            }).button().bind('change', function() {
                var values = [];
                $('#filters input:checked').each(function() {
                    values.push($(this).val());
                });
                $.cookie('miam.filters', values.join(','));
                var selector = values.length ? 'div.story_domain_'+values.join(', div.story_domain_') : 'div.story';
                $('.nb_filters').text(values.length || '*');
                $('#backlog div.project, #sprintBacklog div.project').each(function() {
                    var $this = $(this);
                    var visibleStories = $this.find(selector);
                    $this.find('div.story').hide();
                    visibleStories.show();
                    $this[(!values.length || visibleStories.length) ? 'show' : 'hide']();
                });
                resize();
                updateProgression();
            }).first().trigger('change');
            sprint.find('div.statuses').each(function() {
                $(this).find('div.stories').css('min-height', ($(this).height()-5)+'px');
            });
        };
        refresh();
    });

    function inArray(needle, haystack)
    {
      for (var i in haystack)
      {
        if (haystack[i] == needle) {
          return true;
        }
      }
      return false;
    }
})(jQuery);
