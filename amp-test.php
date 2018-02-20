<!doctype html>
<html amp lang="en">
<?php
  $url_base = "https://".$_SERVER['SERVER_NAME'];
  $assets_base = $url_base."/assets";
?>
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Hello, AMPs</title>
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
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
			"url": "<?php echo $assets_base."/logo.png" ?>",
			"width": 600,
			"height": 60
		}
	 },
        "headline": "My AMP test page",
	"datePublished": "2015-10-07T12:02:41Z",
	"image": [
		"<?php echo $assets_base."/news-image.png" ?>"
	]

      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  </head>
  <body>
	<h1>Welcome to the AMP-mobile web</h1>
	<p>This is modified source from <a href="https://www.ampproject.org/docs/tutorials/create/basic_markup">AMP project</a> page.
  </body>
</html> 
