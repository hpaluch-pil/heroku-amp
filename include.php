<?php
  $proto = "https";
  if ( $_SERVER['SERVER_PORT'] == 80 ){
	  $proto = "http";
  }

  $url_base = $proto."://".$_SERVER['SERVER_NAME'];
  $assets_base = $url_base."/assets";

  $canonical_url = $url_base."/amp-test-desktop.php";
  $amphtml_url   = $url_base."/amp-test.php";


  // page specific data
  $amp_title = 'Hello, AMPs';
  $amp_headline = 'My AMP test page';

  $image_dir = "assets";

