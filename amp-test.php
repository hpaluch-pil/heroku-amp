<!doctype html>
<html amp lang="en">
<?php
	require 'include.php';
?>
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo $amp_title; ?></title>
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
	"author": {
		"@type": "Person",
		"name": "Humble person"
	 },
	 "publisher": {
		"@type": "Organization",
		"name": "wish to remain anonymous",
		"logo": {
			"@type": "ImageObject",
			"url":   "<?php echo $images['logo.png']['url']; ?>",
			"width":  <?php echo $images['logo.png']['width']; ?>,
			"height": <?php echo $images['logo.png']['height']; ?>
		}
	 },
	 "headline": "<?php echo $amp_headline; ?>",
	"datePublished": "2015-10-07T12:02:41Z",
	"image": [
			{
			"@type": "ImageObject",
			"url":   "<?php echo $images['news-image.png']['url']; ?>",
			"width":  <?php echo $images['news-image.png']['width']; ?>,
			"height": <?php echo $images['news-image.png']['height']; ?>
			}
	]

      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  </head>
  <body>
	<h1>Welcome to the AMP-mobile web</h1>
	<p>This is modified source from <a href="https://www.ampproject.org/docs/tutorials/create/basic_markup">AMP project</a> page.
        <p> Inline picture here:
	  <amp-img src="<?php echo $images['news-image.png']['url']; ?>" alt="News Image"
		width="<?php echo $images['news-image.png']['width']; ?>"  
		height="<?php echo $images['news-image.png']['height']; ?>"  >
	</amp-img>

	</p>
  </body>
</html> 
