<script src="<?php echo get_template_directory_uri(); ?>/js/common/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common/viewport.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common/js-image-switch.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/function.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
piAId = '980133';
piCId = '31242';
piHostname = 'pi.pardot.com';
(function() {
    function async_load(){
        var s = document.createElement('script'); s.type = 'text/javascript';
        s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
        var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
    }
    if(window.attachEvent) { window.attachEvent('onload', async_load); }
    else { window.addEventListener('load', async_load, false); }
})();
</script>
</body>
</html>
