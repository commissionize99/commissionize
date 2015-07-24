<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_GET['email']) && isset($_GET['name']) && isset($_GET['subject']) && isset($_GET['message']) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_GET as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }
  
  //
  mail( "narasimharone@gmail.com", $_POST['subject'], $_POST['message'], "From:" . $_POST['email'] );
 
  //			^
  //  Replace with your email 
}
?>