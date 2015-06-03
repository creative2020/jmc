<?php

require_once("library.php");

// 1. PHP Version (4.3 or later)
$valid_php_version = false;
if (version_compare(phpversion(), "4.3.0", ">="))
  $valid_php_version = true;

// 2. MySQL version (4 or later)
$overridden_invalid_db_version = false;
if (isset($_POST["override_invalid_db_version"]))
{
  $valid_mysql_version = true;
  $overridden_invalid_db_version = true;
}
else
{
  $valid_mysql_version = false;
  if (substr(mysql_get_client_info(), 0, 1) >= 4)
    $valid_mysql_version = true;
}

$upload_folder_writable = is_writable("$g_ft_installation_folder/../upload");
$default_theme_cache_dir_writable = is_writable("$g_ft_installation_folder/../themes/default/cache");

// ------------------------------------------------------------------------------------------------

$page_vars = array();
$page_vars["step"] = 2;
$page_vars["valid_php_version"] = $valid_php_version;
$page_vars["valid_mysql_version"] = $valid_mysql_version;
$page_vars["overridden_invalid_db_version"] = $overridden_invalid_db_version;
$page_vars["phpversion"] = phpversion();
$page_vars["mysql_get_client_info"] = mysql_get_client_info();
$page_vars["upload_folder_writable"]  = $upload_folder_writable;
$page_vars["default_theme_cache_dir_writable"]  = $default_theme_cache_dir_writable;

ft_install_display_page("templates/step2.tpl", $page_vars);