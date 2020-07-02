<!--Subscription-popup.php-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Subscribe to our Newsletter</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.formget.com/tutorial/createpopupform_livedemo/css/elements.css">

<style>
@import url(http://fonts.googleapis.com/css?family=Raleway);
h1{
text-align:center;
//color: black;
font-size: 2em;
//margin-left: 15%;
}
#main{
margin: 25px 100px;
font-family: 'Raleway', sans-serif;
}
h2{
background-color: #FEFFED;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 30px 40px;
color: black;
font-weight: bolder;
font-size: 1.5em;
margin-top: -1px !important;
//margin-bottom: -19px !important;
}
hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}
#login{
width:550px;
float: left;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 0px 40px 0px;
margin-top: 70px;
margin: 50px;
margin-left: 27%;
}
input[type=text],input[type=email]{
width:99.5%;
padding: 10px;
margin-top: 8px;
margin-bottom: 18px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
input[type=submit]{
width: 100%;
background-color:#FFBC00;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: 12px;
}
#formget{
float:right;
}
h1 {
//margin-left: -85px;
}
li{
display: inline;
}
#inputurl{
//display: none;
margin-top: 40px;
}
#submitread,#submitinsert,#submitupdate,#submitdelete{
width: 99.5%;
}
#book_form_insert,#book_form_update{
display: none;
}
#database #tab td{
border: 1px solid #ccc;
padding: 7px 3px;
}
#rinsert,#rupdate,#rdelete{
display: none;
}
#id1,#id2,#id3,#id4,#id5{
display: none;
}
#enterid,#enteridd{
display: none;
}
#dummy{
text-transform: uppercase;
text-align: center;
font-weight: bolder;
}
#tab{
width: 450px;
}
#pop h2{
margin: -10px -50px;
margin-top: 0;
padding-top:40px;
}
#pop hr{
margin: 10px -50px;
}
#pop{
padding-top: 0px;
}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup1{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
width:600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 10px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
color: #555555;
text-align: justify;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
#submit{
margin-top:30px;
}
#email{
float:left;
}
#submitb{
width:100px;
}
#div1{
border:1px solid red;
background-color:yellow;
}
form {
max-width: 1000px;
min-width: 250px;s
padding: 10px 50px;
border: 2px solid gray;
border-radius: 10px;
font-family: raleway;
background-color: white;
}
hr{
margin:none;}
    </style>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<div class='popup1'>
<div class='cnt223'>
<div style="height:30px;">
<a href=''><img class="close" src="close.png" style="width:24px; height:24px; float:right;"></a>
</div>
<!-- contact us form -->
<form action="processing-script.php" method="POST"style="border: 2px solid #ccc;" id="pop">
<h2>Subscribe Us!</h2><hr>
<p>Get Awesome updates delivered directly in your inbox .
<br/>Just Type Your Email Address Below And Click Subscribe!</p>
<input type="text" name="email" id="email" placeholder="Email" style="background-image:none;">
<div id="submitb">
<input id="submit" type="submit" name="submit" value="Subscribe">
</div>
</form>
</div>
</div>
<div id="main">
<h1>PHP Newsletter Script</h1>
<div id="login">
<h2>Get the Blogposts</h2>
<hr/>
<div>
<form action="index1.php" style="border:none;">

<input type="submit" name="submit" value="Click to Send Blogposts"/>
</form>
</div>
</div>
</div>
</body>
<script>
    $(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup1').show();
$('.close').click(function(){
$('.popup1').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup1').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
</html>