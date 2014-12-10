<?php
		error_reporting(E_ALL^ E_WARNING); 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
   if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
       echo "<script type=\"text/javascript\">window.alert('Lütfen boş alan bırakmayınız!')</script>"; 
   exit;
   } else {
      $ad = strip_tags($_POST['name']);
      $eposta = strip_tags($_POST['email']);
      $mesaj = strip_tags($_POST['message']);
      $icerik = 'Ad: ' . $ad . '<br/>E-Posta: '. $eposta . '<br/>' . $mesaj;
      /*mail('fatih@2film.com.tr', $konu, $message);*/
	  $HTML         = '<b>İsim: <b/>' . $ad . '<br/>'.'Konu:'.$mesaj;
      $from         = $eposta;
      $to           = "info@loopdijital.com";
      $subject     = $mesaj;

      sendHTMLemail($HTML,$from,$to,$subject);
      echo "<br><h2>E-Postanız başarıyla gönderildi.<br></h2>";
   }
} 
function sendHTMLemail($HTML,$from,$to,$subject)
{
// First we have to build our email headers
// Set out "from" address

    $headers = "From: $from\r\n"; 

// Now we specify our MIME version

    $headers .= "MIME-Version: 1.0\r\n"; 

// Create a boundary so we know where to look for
// the start of the data

    $boundary = uniqid("HTMLEMAIL"); 
    
// First we be nice and send a non-html version of our email
    
    $headers .= "Content-Type: multipart/alternative;".
                "boundary = $boundary\r\n\r\n"; 

    $headers .= "This is a MIME encoded message.\r\n\r\n"; 

    $headers .= "--$boundary\r\n".
                "Content-Type: text/plain; charset=utf-8\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n"; 
                
    $headers .= chunk_split(base64_encode(strip_tags($HTML))); 

// Now we attach the HTML version

    $headers .= "--$boundary\r\n".
                "Content-Type: text/html; charset=utf-8\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n"; 
                
    $headers .= chunk_split(base64_encode($HTML)); 

// And then send the email ....

    mail($to,$subject,"",$headers);
    
}
 ?>	