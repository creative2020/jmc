<?php
/*
Plugin Name: Post Sorting Reloaded
Plugin URI: http://www.gab.ro/post-sorting-reloaded/
Description: Sort posts in all imaginable ways.
Version: 1.3
Author: Gab
Author URI: http://www.gab.ro/
License: GPL2
*/

/*  Copyright 2010  Gabriel Berzescu  (email : gabi83tm@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Each hook gets it's own file. */

require_once('includes/psr-init.php');
require_once('includes/psr-admin_menu.php');
require_once('includes/psr-posts_orderby.php');
require_once('includes/psr-widgets_init.php');
