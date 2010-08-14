<script type="text/javascript">
var gp_config = <?php echo json_encode(array(
    'home_url' => $view->router->generate('homepage')
)); ?>;
$('document').ready(function(){
    $(".button, input:submit").button();
});

</script>
