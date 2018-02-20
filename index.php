<!DOCTYPE html>
<html lang="en">
<?php
	require 'include.php';
	$title = "Example AMP test pages";
?>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <style>
	/* grabbed from bootstrap ?*/
	.button.button-primary { color: #FFF; background-color: #33C3F0; border-color: #33C3F0; }
	.button {
	    margin-bottom: 1rem;
	    display: inline-block;
	    height: 38px;
	    padding: 0 30px;
	    color: #555;
	    text-align: center;
	    font-size: 11px;
	    font-weight: 600;
	    line-height: 38px;
	    text-decoration: none;
	    white-space: nowrap;
	    background-color: transparent;
	    border-radius: 4px;
	    border: 1px solid #bbb;
	    cursor: pointer;
	    box-sizing: border-box;
	}
  </style>
 </head>
 <body>
  <h1><?php echo $title; ?></h1>
  <ul>
	<li><a href="amp-test.php">AMP Testpage</a></li>
	<li><a href="amp-test-desktop.php">Desktop (canonical) version of page</a></li>
  </ul>
  <h2>Debug</h2>
  <pre>
  SERVER_NAME: <?php echo htmlspecialchars($_SERVER['SERVER_NAME']); ?>
  </pre>
  <?php
//	phpinfo();
  ?>

  <hr>
  <p>See <a href="https://github.com/hpaluch-pil/heroku-amp"
           class="button button-primary" target="github">Source on GitHub!</a>
  </p>
 </body>
</html>

