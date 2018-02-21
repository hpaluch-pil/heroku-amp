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
		"datePublished": "<?php echo date('c'); ?>",
		"dateModified": "<?php echo date('c'); ?>",
		"image": [ {
			"@type": "ImageObject",
			"url":   "<?php echo $images['news-image.png']['url']; ?>",
			"width":  <?php echo $images['news-image.png']['width']; ?>,
			"height": <?php echo $images['news-image.png']['height']; ?>
		} ]
	}
    </script>
    <style amp-custom>
	h1 { border-bottom: 1px solid black; }
    </style>
    <!-- 
     According to https://github.com/ampproject/amphtml/blob/master/spec/amp-boilerplate.md:
AMP HTML documents must contain the following boilerplate in their head tag. Validation is currently done with regular expressions, so it's important to keep mutations as minimal as possible. Currently, allowed mutations are: (1) inserting arbitrary whitespace immediately after the style tag opens, and immediately before it closes; (2) replacing any space in the snippet below with arbitrary whitespace.
 -->

<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  </head>
  <body>
  <h1><?php echo $amp_title; ?></h1>
	<p>V2: This is modified source from <a href="https://www.ampproject.org/docs/tutorials/create/basic_markup">AMP project</a> page.
        <p> Inline picture here:
	  <amp-img src="<?php echo $images['news-image.png']['url']; ?>" alt="News Image"
		width="<?php echo $images['news-image.png']['width']; ?>"  
		height="<?php echo $images['news-image.png']['height']; ?>"
		layout="responsive">
	</amp-img>

	</p>
  </body>
</html> 
