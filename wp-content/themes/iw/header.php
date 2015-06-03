<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="LeB4cmwHrqHHlJLjoYNvG4Mcm12zvGeFGqG5vXPtXx4" />

<title><?php wp_title(''); if (function_exists('is_tag') and is_tag()) { ?>Tag Archive for <?php echo $tag; } if (is_archive()) { ?> archive<?php } elseif (is_search()) { ?> Search for <?php echo $s; } if ( !(is_404()) && (is_search()) or (is_single()) or (is_page()) or (function_exists('is_tag') and is_tag()) or (is_archive())  ) { ?> --> Intellectual (IP) and Patent Marketing | We move Ideas | <?php } ?> <?php bloginfo('name'); ?> <--</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <META NAME="Description" CONTENT="A common sense approach to marketing  and advertising for intellectual property owners.   We offer no obligation tools to help patent owners reach their goals.">
    <META name="keywords" content="Invent, patent, invention promotion firm, advertising for a patent, patent attorney, advertising agency, marketing, contingency, intellectual property, patent promotion, millennium, intellectual ventures, invent help, trade show, patent movers, patent auction, innovation, warehouse, direct marketing, lees summit, Kansas city, overland park, web design, corporate indent, advertising campaign,  amy schleicher, kenny durham, warehouse crew, grand opening, entrepreneur, licensing, prototyping, copyrighting, creating, commercials, ideas, technology, iw, prospectus, database, microsite, test marketing, research and development, industry analysis, royalties, distribution, product development, consulting, marketing material, manufacturing,  contract negotiations, business development, public relations, identity packages, branding, product evaluation,process approach, incubation, venture capitol.">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/ico" />

<!--2020 Flash-->
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="/scripts/AC_RunActiveContent.js" language="javascript"></script>



<?php wp_head(); ?>

</head>

<body>

<div id="main-container">
	<div id="page">
    	<div id="page_top"></div>
        <div id="page_main">
	    	<div id="header">
            	<div id="logo"><a href="<?php bloginfo('url') ?>" title="Home" ><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" border="0" height="121" width="177"/></a></div>
                <div id="main_nav">
                	<div class="menu">
          				<ul>
							
							<?php wp_list_pages('title_li='); ?>
            			</ul>
                    </div>
                </div>
            </div>