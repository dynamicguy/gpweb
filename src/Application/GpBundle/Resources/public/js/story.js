(function($) {

$.widget("ui.story", {
	_create: function() {
        var self = this;
		this.element.find('.story_points').click(function() { self.askPoints(); return false; });
        this.element.click(function() { self.openDialog(); });
    },
    askPoints: function() {
        var points = prompt("Nombre de points pour cette story :", this.getPoints());
        if('?' == points) points = 0;
        if(null == points || isNaN(points) || points == this.getPoints()) return false;
        this.setPoints(points);
        return true;
    },
    getId: function() {
        return this.element.attr('data-story-id');
    },
    getPoints: function() {
        return this.element.find('span.story_points').text();
    },
    setPoints: function(points) {
        this.element.find('span.story_points').text(0 != points ? points : '?');
        $.post(miam_config.story_reestimate_url, { story_id: this.getId(), points: points });
        $('body').trigger('miam.change');
    },
    openDialog: function()
    {
        var self = this;
        $.ajax({ url: miam_config.story_url.replace(/_ID_/, self.getId()), success: function(html) {
            var dialog = $('<div>').html(html).dialog({
                zIndex: 100,
                dragStart: function(e) { $(e.target).parent().css('opacity', 0.5); },
                dragStop: function(e) { $(e.target).parent().css('opacity', 1); },
                resizable: false,
                width: '500px'
            });
            self.initDialog(dialog);
        }});
    },
    initDialog: function(dialog)
    {
        var self = this;
        dialog.dialog('option', 'title', dialog.find('.dialog_title').text());
        dialog.find('.dialog_title').remove();
        dialog.find('a.edit, a.cancel').click(function() {
            dialog.load($(this).attr('href'), function() { self.initDialog(dialog); });
            return false;
        });
        dialog.find('form').ajaxForm({
            target: dialog,
            success: function() { self.initDialog(dialog); $('body').trigger('miam.change'); }
        });
        dialog.find('.focus_me').focus();
        dialog.find('a.delete').click(function() {
            if (confirm(($(this).attr('title')) + ' ?')) {
                $.post($(this).attr('href'), function() { dialog.dialog('close'); $('body').trigger('miam.change'); });
            }
            return false;
        });
    }
});

})(jQuery);
