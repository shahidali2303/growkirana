<?php
function myscript() {
?>
<script type="text/javascript">
   $(document).ready(function() {
        /* $('html').getNiceScroll().remove();*/
        $(".page-template-default").getNiceScroll().remove();
    });
</script>
<?php
}
add_action( 'wp_footer', 'myscript' );
?>