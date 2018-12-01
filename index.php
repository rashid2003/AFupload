<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AF upload</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">




<script>
document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>

</head>
<body>
<?php include 'header.php';?>


<form enctype="multipart/form-data" action="uploaded.php" method="POST">
  <div class="input-file-container">  
    <input class="input-file" id="my-file" name="uploaded_file" type="file" multiple="">
    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
    <centre>
    <input type="submit" value="Upload" class="button button1" class="submit-button"></input>
    </centre>
  </div>
</form>

<?php include 'footer.php';?>

</body>
</html>

