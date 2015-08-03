<?php
$title = 'Photogrid Element';
$css = '<link rel="stylesheet" type="text/css" href="/_inc/photogrid.css"/>';

include '_inc/head.php';

?>

<body> <!-- TODO W/ IMPLEMENTAION: NAMING -->
<div class="page-wrapper">
<?php include '_inc/header.php'; ?>
	<div id="menu">
		<?php include '_inc/menu.php';?> <!-- TODO W/ IMPLEMENTATION -->
	</div>
	<div class="content-wrapper">
	<h2>Photogrid Example</h2>
		<div class="photogrid">
		      <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Hippie-flower_-_Virginia_-_ForestWander.jpg"/>
		      <div class="overlay"> </div> 
		      <p class="overlay">Text goes here.</p>
		</div>

		<div class="photogrid">
		      <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Hippie-flower_-_Virginia_-_ForestWander.jpg" />
		      <div class="overlay"></div>
		      <p class="overlay"> This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability. 
		      	This is an example of the scrolling capability.  </p>
		</div>
	

	</div>
		<div id="mm">
		<?php include '_inc/menu.php';?>
		</div>
</div>
</div>

</body>
</html>