<!doctype html>
<html lang="en">


<!--
WHAT'S THIS?
This page captures the information a user enters in the chat window.
Because it uses PHP to do this, it will only work properly on a server (i.e., Barney).
-->


<head>
<title>Chat Response</title>

<!-- META DATA -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ICONS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- FONTS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Merriweather">

<!-- STYLES -->
<style>
body {
	margin: 0px;
	background-color: mintcream;
}
*  {
	box-sizing: border-box;
	font-family: "Open Sans", sans-serif;
	font-size: 16px;
}
div {
	margin: auto;
	padding: 1em;
	max-width: 480px;
}
header {
	display: table; 
	margin: 1.5em 0px;
}
img, h3 {display: table-cell;}
h3 {
	vertical-align: middle; 
	color: limegreen;
}
img {
	vertical-align: middle; 
	margin: 0px 0.5em 0px 0px; 
	width: 3em; height: 3em; 
	border: 1px solid limegreen; 
	border-radius: 50%;
	box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}
.transcript {
	display: table;
	width: 100%;
	padding: 1em 0px;
	border: 3px solid #f1f1f1; 
	border-radius: 1em;
	background-color: limegreen;
	color: #fff;
}
p {display: table-cell;}
p:first-child, p:last-child  {padding: 0px 1em;}
@media screen and (min-width: 480px) {
	p:nth-child(2) {text-align: justify;}
}
p:first-child {vertical-align: top;}
p:last-child {
	vertical-align: bottom; 
	text-align: right;
}
</style>
</head>

<!-- HTML WITH A PINCH OF PHP -->
<body>
<div>
<header>
	<img src="../../lib/img/theme/brandmark.png">
	<h3>We received the following message (via chat):</h3>
</header>
<div class="transcript">
	<p><i class="fa fa-quote-left"></i></p>
	<p><?php echo $_POST["message"]; ?></p>
	<p><i class="fa fa-quote-right"></i></p>
</div>
</div>
</body>
</html>