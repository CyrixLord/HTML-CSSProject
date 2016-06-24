<!DOCTYPE html>
<html lang="en">
<head>
<title><?php include('includes/page-titles.php'); ?>| Tamanaka Collective </title>
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
