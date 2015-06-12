<?php
 require_once("_inc/global.php");
$_SESSION["bgImage"] = "";
require_once("_inc/head2.php");
?>

<script type="text/javascript">initMenu("videos");</script>

<div id="contentwrap">

	<?
	require('_inc/simpleCache.php'); 
	$cache = new SimpleCache();
	$latest = $cache->get_data('vimeo', 'http://vimeo.com/api/v2/channel/shawebsite/videos.xml');
	$xml = json_decode(json_encode((array) simplexml_load_string($latest)), 1);
	$array = $xml['video'];
	foreach($array as $item) { ?>
			
		<a class="subsection" href="?id=<? echo $item["id"];?>"><?
			echo date("d F Y: ", strtotime($item["upload_date"]));
			echo convert_text($item["title"]);	
			?>
		</a>
		

		<div style="margin:-2px 0 2px 0; padding:0">
  		
  		<iframe src="//player.vimeo.com/video/<?=$item["id"]?>" width="100%" height="<?=$height ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="margin:3px 0;"></iframe>	
		</div>	
		<?php endif; ?>
	<? } ?>
</div>

  <script src="_inc/js/foundation.min.js"></script>
  <script>
  $j = jQuery.noConflict();
    $j(document).foundation();
  </script>

  </body>

</html>
