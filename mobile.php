<?php
include 'headerm.php';


?>

<html>
<head>
<title>Mobile</title>
<link rel="stylesheet" type="text/css" href="mobile.css"/>    
<style>
 {

background-color: rgba(5, 21, 71,0.4);

}
    </style>
 </head>
<body>

<style type="text/css">
::-webkit-scrollbar {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: transparent;
  border: 0px none;
  border-radius: 0px;
}
::-webkit-scrollbar-thumb:hover {
  background: transparent;
}
::-webkit-scrollbar-thumb:active {
  background: transparent;
}
::-webkit-scrollbar-track {
  background: transparent;
  border: 0px none;
  border-radius: 0px;
}
::-webkit-scrollbar-track:hover {
  background: transparent;
}
::-webkit-scrollbar-track:active {
  background: transparent;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>

<style>
    body {
      margin: 0; /* Remove default body margin */
      padding: 0; /* Remove default body padding */
      background-image: url('BG.jpg'); /* Path to your background image */
      background-repeat: no-repeat; /* Prevent the image from repeating */
      background-size: cover; /* Scale the image to cover the entire background */
      background-position: center; /* Center the image */
      background-attachment: fixed; /* Optional: Fix the background while scrolling */
      min-height: 100vh; /* Ensure the body covers the full viewport height */
    }
  </style>

    <div class="fundtransfer_conainer">
   
        <br>
        <span>Our <strong>mobile web view</strong> is currently undergoing maintenance and will be available again soon, alongside the continued availability of our services. In the meantime, please access our website using a <strong>desktop or laptop</strong> for uninterrupted service. We sincerely appreciate your patience and understanding as we work to enhance your experience</span><br><br>

    </div>
   

    </body>

</html>
<?php

if(isset($_POST['fnd_trns_btn'])){

	header("location:add_beneficiary.php");
}
?>
