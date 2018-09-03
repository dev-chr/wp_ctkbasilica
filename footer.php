<div class="clear"></div>
	<? if(is_page(32)) {  

  	  $ctkTheme = get_template_directory_uri();
  	
	?>
	</center>
	<hr />
	
		<div class="flex-container">
			
			
			<div class="flex-item"><a href="http://hamiltondiocese.com" target="_blank"><img src="<?php echo $ctkTheme; ?>/images/diocese-logo.png" width="90" /></a></div>
			
			<div class="flex-item"><a href="https://twitter.com/davidwynen" target="_blank"><img src="<?php echo $ctkTheme; ?>/images/twitter.png" width="90" /></a></div>
			
			<div class="flex-item"><a href="http://w2.vatican.va/content/vatican/en.html" target="_blank"><img class="" src="<?php echo $ctkTheme; ?>/images/vatican-website.png" width="90" /></a></div>
			
			<div class="flex-item"><a href="http://saltandlighttv.org" target="_blank"><img src="<?php echo $ctkTheme; ?>/images/salt-light.png" width="90" /></a>
			
			
		</div>
		<? } ?>

</div>

</div>



<footer id="footer" role="contentinfo">
	
	<div id="copyright">
	<?php echo sprintf( __( '%1$s %2$s %3$s.', '' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
	<p style="font-size: 0.8em">
	<a href="/wp-admin">Website Login</a></p>
	</div>

</footer>

</div>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99154919-1', 'auto');
  ga('send', 'pageview');

document.getElementById('hamburgler').addEventListener('click', checkNav);
  window.addEventListener("keyup", function(e) {
    if (e.keyCode == 27) closeNav();
  }, false);

  function checkNav() {
    if (document.body.classList.contains('hamburgler-active')) {
      closeNav();
    } else {
      openNav();
    }
  }

  function closeNav() {
    document.body.classList.remove('hamburgler-active');
  }

  function openNav() {
    document.body.classList.add('hamburgler-active');
  }
</script>

</body>
</html>