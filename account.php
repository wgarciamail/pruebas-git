<?php
/*
  $Id: account_history.php,v 1.63 2003/06/09 23:03:52 hpdl Exp $
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2003 osCommerce
  Released under the GNU General Public License
 */
require('includes/application_top.php');
if ($TraeteloData->CustomerID == 0)
{
	echo 'Release';
}
require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ACCOUNT_HISTORY);
$breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
$breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'));
$content = CONTENT_ACCOUNT_HISTORY;
include (bts_select('main', $content)); // BTSv1.5
require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
