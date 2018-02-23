<!DOCTYPE html>
<html lang="en">
<?php
	require '../lib/include.php';
	$title = "Example AMP test pages";

	$my_ld_data = bread_crumbs_for_json($breadcrumbs);

	$my_ld_json = json_encode($my_ld_data,
		JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
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
  <script type="application/ld+json">
	<?php echo $my_ld_json ?>
  </script>
 </head>
 <body>
  <?php bread_crumbs_as_html($breadcrumbs); ?>
  <h1><?php echo $title; ?></h1>
  <ul>
   <li><a href="amp-test.php">AMP version of "<?php echo $amp_title; ?>"</a> - google search compatible only</li>
   <li><a href="amp-test.php#development=1">Chrome development  "<?php echo $amp_title; ?>"</a> (press F12 and select "Console" tab to see validation errors in Chrome)</li>
   <li><a href="amp-test-desktop.php">Desktop (canonical) version of "<?php echo $amp_title; ?>"</a> - classic html - can be rendered in common browser.</li>
  </ul>
  <h2>Debug</h2>
  <pre>
  SERVER_NAME: <?php echo htmlspecialchars($_SERVER['SERVER_NAME']); ?>
  </pre>
  <p>Look at <a href="info.php">phpinfo() on Heroku</a></p>
  <?php
//	phpinfo();
  ?>

  <hr>
  <p>See <a href="https://github.com/hpaluch-pil/heroku-amp"
           class="button button-primary" target="github">Source on GitHub!</a>
  </p>
  <p><?php echo structured_data_link($url_base) ?></p>
 </body>
</html>

