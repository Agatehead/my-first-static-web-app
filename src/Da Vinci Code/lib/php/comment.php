<!doctype html>
<html lang="en">


<!--
WHAT'S THIS?
This page captures the information a user enters in the comment form.
Because it uses PHP to do this, it will only work properly on a server (i.e., Barney).
-->


<head>
<title>Comment Response</title>

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
	background-color: honeydew;
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
h1, p {margin: 36px auto;}
h1 {font-size: 1.5em;}
.transcript {
	display: table;
	width: 100%;
	padding: 1em 0px;
	border: 3px solid #f1f1f1; 
	border-radius: 1em;
	background-color: limegreen;
	color: #fff;
}
.transcript p {display: table-cell;}
.transcript p:first-child, .transcript p:last-child  {padding: 0px 1em;}
@media screen and (min-width: 480px) {
	.transcript p:nth-child(2) {text-align: justify;}
}
.transcript p:first-child {vertical-align: top;}
.transcript p:last-child {
	vertical-align: bottom; 
	text-align: right;
}
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
<h1>Thanks for your comment, <?php echo $_POST["visitor"]; ?>!</h1>
<p>But this is just a project for school.  So, no one's going to read:</p>
<div class="transcript">
	<p><i class="fa fa-quote-left"></i></p>
	<p><?php echo $_POST["message"]; ?></p>
	<p><i class="fa fa-quote-right"></i></p>
</div>
<p>Consequently,  <i><?php echo $_POST["email"]; ?></i> won't receive a reply.<br>(But it's really cool of you to test the comment form.)</p>
<p><i class="fa fa-envira logo"></i></p>
</div>
</body>
</html>