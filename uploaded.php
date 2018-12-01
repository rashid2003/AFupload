<?PHP

  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

     
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>






<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Success Uploaded - AFupload</title>
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
<h1>Flat UI - Custom Input:file</h1>
<h2>With JS return</h2>

  <div class="input-file-container">  
	<img src="<?php echo "uploads/".  basename( $_FILES['uploaded_file']['name'])."" ?>" alt="Trulli"  class="file">
  </div>

<h2 id="link">
<input type="text" value="<?php echo "http://libyandamai.com/uploads/".  basename( $_FILES['uploaded_file']['name'])."" ?>" id="myInput" style=" border: 2px solid #39D2B4; ">

 <button onclick="myFunction()" class="button2">Copy link</button>

</h2>
<p class="txtcenter">It's just a test, not really usable.<br />Works on IE &gt; 8 and modern browsers</p>
<p class="txtcenter copy">by <a href="https://twitter.com/geoffrey_crofte">@geoffrey_crofte</a><br />see also <a href="https://codepen.io/CreativeJuiz/pen/uEHeD">Custom input:file with CSS only</a></p>





<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>



</body>
</html>

