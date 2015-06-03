</div>
        <div id="page_bottom"></div>
    </div>
    <div id="footer">
    	 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Address Line') ) : else : ?> 	 
       &copy; <?php _e(date(Y)); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved | Lee Summit, KS | Site by: <a href="http://www.2020creative.com" target="_blank">20/20</a> | <a href="http://www.facebook.com/pages/Lees-Summit-MO/Innovators-Warehouse/139996091127" target="_blank"<img src="/wp-content/uploads/Facebook.png"></a>
        <?php endif; ?> 
    	
    	 <p>&nbsp;</p>
    </div>
</div>
 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Analytics') ) : else : ?> 
 <!--insert analytics code here-->
 <?php endif; ?> 
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11270999-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>