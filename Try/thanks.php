<!DOCTYPE html>
<html lang="en">
<head>
<title>Sample Site for HTML/CSS Level 2 | Spring 2016</title>
<meta charset="UTF-8" />

<!-- Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- call jquery for image rollovers -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- Image Rollover Script -->
<script type="text/javascript">
$(document).ready(function() {
$("img.rollover").hover( 
function() { this.src = this.src.replace("_off", "_on"); 
}, 
function() { this.src = this.src.replace("_on", "_off"); 
});
}); 
</script>
<!-- Image Rollover Script -->



<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

<header id="header">
<p> this is the header.</p>

<div class="wrapper">
<p>this is a wrapper</p>


<nav id="nav-main">
	<ul>
		<li><a href="#">Home</a></li>		
		<li><a href="#">About</a>
			<ul>
				<li><a href="#">Our Board</a></li>
				<li><a href="#">Our Staff</a></li>
				<li><a href="#">Our Volunteers</a></li>			
			</ul>		
		</li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Volunteer</a></li>
		<li><a href="#">Donate</a></li>	
		<li><a href="#">Contact</a></li>		
	</ul>
</nav><!-- /#nav-main -->

<nav id="social">
<p>social nav here</p>
</nav><!-- /#social -->


<a href="index.html">
<img src="images/logo_off.png" alt="logo" id="logo" class="rollover">
</a>

<h1>
<a href="index.html">Company Name</a>
</h1>

</div><!-- /.wrapper -->
</header>

<div id="spotlight">
<p>this is the spotlight</p>
</div><!-- /#spotlight -->

<div id="middle" class="wrapper">
<p>this is the #middle</p>

<aside id="primary">
<h3>Primary Sidebar</h3>

<nav id="nav-sub" class="widget">
	<ul>
		<li><a href="#">Home</a></li>
		
		<li><a href="#">About</a>   
			<ul>
				<li><a href="#">Our Board</a></li>
				<li><a href="#">Our Staff</a></li>
				<li><a href="#">Our Volunteers</a></li>				
			</ul>
		</li>
		
		<li><a href="#">Services</a></li>
		<li><a href="#">Volunteer</a></li>
		<li><a href="#">Donate</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</nav>

<div class="widget">
    <ul>
      <li>Lorem ipsum dolor sit amet. </li>
      <li>Consectetur adipiscing elit.</li>
      <li>In eu turpis at lectus molestie pulvinar.</li>
      <li>Maecenas in libero nec ante imperdiet iaculis.</li>
      <li>Etiam mollis leo a eros ornare id aliquet justo luctus.</li>
      <li>Sed nec mi ac mauris pretium gravida vel gravida tortor.</li>
      <li>Sed vitae ante diam, a cursus massa.</li>
      <li>Nullam vel tortor justo, vitae vulputate sem.</li>
    </ul>	
</div><!-- /.widget -->
	
	
 </aside><!-- /#primary -->
 
 <div id="main">
 <p>this is #main</p>
 
 <div id="content">
  
          <h2>Thanks!</h2>
		  
		  <p>this is the thanks page</p>
          
		  <?php include('includes/vol-form.php'); ?>
		  
</div><!-- /#content -->

<aside id="secondary">
    <h3>Secondary Sidebar</h3>
	<ul>
        <li>Lorem ipsum dolor sit amet </li>
        <li>Consectetur adipiscing elit.</li>
        <li>In eu turpis at lectus molestie pulvinar.</li>
        <li>Maecenas in libero nec ante imperdiet iaculis.</li>
        <li>Etiam mollis leo a eros ornare id aliquet justo luctus.</li>
        <li>Sed nec mi ac mauris pretium gravida vel gravida tortor.</li>
        <li>Sed vitae ante diam, a cursus massa.</li>
        <li>Nullam vel tortor justo, vitae vulputate sem.</li>
	</ul>
	
</aside><!-- /#secondary -->	
</div><!-- /#main -->
</div><!-- /#middle -->

<footer id="footer">
<p>this is the footer</p>

<div class="wrapper">
<p>footer content goes here</p>
</div><!-- /.wrapper -->

</footer>


<!-- begin validation buttons -->
<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
 </a>
</p>
<!-- end validation buttons -->
</body>
</html>