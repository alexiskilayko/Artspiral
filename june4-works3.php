<?php
$title = 'June 4 Exhibition';
$css = '<link rel="stylesheet" type="text/css" href="/_inc/styles-june4.css"/>';
$scripts = '<script src="/_inc/isotope.js"></script><script src="/_inc/isotopesettings.js"></script>';
include '_inc/head.php';


?>

<body class="pastprograms june43">
<div class="page-wrapper">
	<a href="#mm"><div class="menu-anchor">MENU</div></a>	
	<div id="menu">
	<?php include '_inc/june4menu.php';?>
	</div>
	<div class="isotope-grid">
	<div class="button-group filter-button-group">
	  <button class="button is-checked" data-filter="*">show all</button>
	  <button class="button" data-filter=".small-work">Small Work</button>
	  <button class="button" data-filter=".doors">Small Work</button>
	</div>
		<div class="grid-item small-works"><a href="/past_exhibitions/june4/images_large/Tian_Work069_L.jpg" rel='lyteshow[artworks]' title="China 1989<BR>Manon Briere<BR>oil stick on cardboard<BR>36in x34in"><IMG SRC="/past_exhibitions/june4/images_small/Tian_Work069_S.jpg" ALT="small work"></a></div>
	<div class="grid-item door"><a href="/past_exhibitions/june4/images_large/Tian_Work055_L.jpg" rel='lyteshow[artworks]' title="Oh China! Liberated<BR>Grimanesa Amoros<BR>acyrlic on door<BR>80in x30in"><IMG SRC="/past_exhibitions/june4/images_small/Tian_Work055_S.jpg"  ALT="door"></a></div>
	</div>
					
	<a href="/june4-materials.php"><div class="next-arrow"><i class="fa fa-arrow-right"></i></div></a>
	</div>
<div id="mm">
<?php include '_inc/june4menu.php';?>
</div>



</body>
</html>

