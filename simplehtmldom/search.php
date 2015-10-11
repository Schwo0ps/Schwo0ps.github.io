<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.crowdfunder.com/user/131000');

foreach($html->find(a.social-meta))
   echo 'Facebook: '$e->href . '<br>';
?>