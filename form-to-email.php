<?php 
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['Email'];

    $mailTo = "summersbyink@gmail.com";
    $header = "from: ". $name . '/n';

    // $fullMsg = $mailTo . ' : ' . $mailFrom . ' : ' .  $msg . ' : ' .  $header;
    // print_r($fullMsg);
    mail($mailTo, $mailFrom, $header);
    //header('Location: http://site32.wdd.francistuttle.edu/PHPRevamp-Discography/index.php');
?>


<?php

} else {
  echo "I didn't work";
}

?>
