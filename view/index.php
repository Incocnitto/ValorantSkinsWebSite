<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<?php include("php/header.php"); ?>

<section>

<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam vel excepturi voluptatem quo error, explicabo eum assumenda maxime debitis similique. Ut perferendis, nam inventore odit consequuntur tenetur obcaecati molestias incidunt?</h1>

</section> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 450) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});
</script>
</body>
</html>