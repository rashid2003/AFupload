<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AF upload</title>
  <link rel="stylesheet" type="text/css" href="style.css">

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
<h1>AF Upload - The easy way to upload your files</h1>
<h2>Secure and Open Source</h2>

<form enctype="multipart/form-data" action="uploaded.php" method="POST">
  <div class="input-file-container">  
    <input class="input-file" id="my-file" name="uploaded_file" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
    <centre>
    <input type="submit" value="Upload" class="button button1" class="submit-button"></input>
    </centre>

  </div>
  <p class="file-return"></p>
</form>

<p class="txtcenter">It's just a test, not really usable.<br />Works on IE &gt; 8 and modern browsers</p>
<p class="txtcenter copy">by <a href="https://twitter.com/geoffrey_crofte">Rashid Obaidi</a> and [<a href="https://codepen.io/CreativeJuiz/pen/uEHeD"> write youe name here </a>]</p>
</body>
</html>

