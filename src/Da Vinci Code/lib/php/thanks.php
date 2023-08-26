<!doctype html>
<html lang="en">


<!--
WHAT'S THIS?
This is the 'thank-you' page.  It captures the information a user enters in the content offer form on the landing page.
Because it uses PHP to do this, it will only work properly on a server (i.e., Barney).
-->


<head>
<title>Thank You!</title>

<!-- META DATA -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- FONTS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

<!-- STYLES -->
<style>
body {
	margin: 0px; 
	background-color: mintcream;
	color: darkslategray;
	font-size: 16px;
}
*  {
	box-sizing: border-box;
	font-family: "Open Sans", sans-serif;
}
div {
	margin: auto;
	padding: 1em;
	max-width: 600px;
	text-align:center;
}
h1, h3, p {margin: 36px auto;}
h1 {font-size: 1.5em;}
span {
	color: limegreen; 
	font-size: larger;
}
a {
	color: white;
	background-color: limegreen;
	cursor: pointer;
	border-radius: 1em;
	padding: 0.25em 1.25em;
	text-decoration: none;
	text-transform: uppercase;
	text-shadow: 2px 4px 4px rgba(0,0,0,0.25);
	box-shadow: 2px 4px 6px rgba(0,0,0,0.25);
}
a:hover {opacity: 0.5;}
.logo {
	color: limegreen;
	font-size: 3em;
	text-shadow: 2px 4px 4px rgba(0,0,0,0.25);
}
</style>
</head>

<!-- HTML WITH A PINCH OF PHP -->
<body>
<div>
	<h1><?php echo $_POST["firstname"]; ?>, thanks for requesting <br><span>The eBook eBook!</span></h1>
	<h3><a href="../../lib/download/ebook.pdf" download>Download your copy</a></h3>
	<p>(We've also sent the link to <?php echo $_POST["email"]; ?>. )</p>
	<p><i class="fa fa-envira logo"></i></p>
</div>
</body>
</html>