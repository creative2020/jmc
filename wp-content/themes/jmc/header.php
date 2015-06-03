<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="mve_vQGWpldDFY4aQ8rGBlAZQGsrNMYlHTv9RaBYCAk" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<script language="javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9064605-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
  <!--Top-->
  <div id="top">
    <div class="logo"><a href="/" title="John McClelland & Associates, Inc"></a></div>
    <h1>LEAD APRONS  +  LEAD GLASSES + RADIATION PROTECTION ACCESSORIES</h1>
  </div> 
  <!--Navigation-->
  <div id="navigation">
    <?php wp_page_menu('title_li=&sort_column=menu_order&sort_order=desc&show_home=1&exclude=323') ?>
  </div>
  <div class="clear"></div>