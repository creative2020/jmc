<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php $is_home = true; ?>

<?php /*?><div id="flash"><script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '920',
			'height', '269',
			'src', 'header',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'main',
			'bgcolor', '#ffffff',
			'name', 'main',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'header',
			'salign', ''
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="920" height="269" id="main" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="header.swf"/><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="header.swf" quality="high" bgcolor="#ffffff" width="920" height="269" name="header" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript></div><?php */?>

<div id="flash">
<a href="/inventors-digest-contingency-caution/"><img src="/wp-content/uploads/main-article.jpg"/></a>
</div>

		<div id="content">
        	
            <div id="home_left">
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Home #1') ) : else : ?>
            	<h1>box Estimates</h1>
                <img src="<?php bloginfo('template_directory'); ?>/images/iw_box.jpg" border="0" /><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis fringilla eros. Integer tellus felis, bibendum in, rhoncus non, </p>
             <?php endif; ?>
            </div>
            <div id="home_ctr">
            	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Home #2') ) : else : ?>
                <h1>Build your own marketing</h1>
                <img src="<?php bloginfo('template_directory'); ?>/images/iw_marketing.jpg" border="0" />
                <p>Don't give away your future. Many companies ask for %20 or more in Royalties. We let you take control.</p>                            
                <?php endif; ?>
            </div>
            <div id="home_rt">
            	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Home #3') ) : else : ?>
                <h1>IW PASS</h1>
                <img src="<?php bloginfo('template_directory'); ?>/images/iw_pass.jpg" border="0" />
                <?php endif; ?>
            </div>
            <div id="home_bottom">
            	<div id="home_btm_left">
                	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Home #4') ) : else : ?>
                	<h2>HEADING H2</h2>
                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis fringilla eros. Integer tellus felis, bibendum in, rhoncus non, blandit non, libero. Integer ac enim vehicula lorem suscipit rutrum. Vestibulum varius. Duis odio eros, dignissim at, dapibus et, tincidunt iaculis, felis. Suspendisse neque. In in lorem vel velit aliquam congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
               		<?php endif; ?>                
            	</div>
            	<div id="home_btm_rt">
                	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Home #5') ) : else : ?>
                	<h2>Meet the Warehouse Crew</h2>
                    <img src="<?php bloginfo('template_directory'); ?>/images/iw_crew.jpg" border="0" />
                	I like puppies, long walks on the beach. Any music with a lot of pumpin base.

    <p> See my twitter feed: <a href="#">@mikelovesdogs</a></p>
               		<?php endif; ?>      
                	
            	</div>
            </div>
        
        
        </div>
        
        
<?php get_footer(); ?>        