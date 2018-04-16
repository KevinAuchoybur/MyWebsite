<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="3; ../index.html">
<link rel="stylesheet" type="text/css" href="../css/form-validation.css">
<link rel="stylesheet"  href="../css/font-awesome/css/font-awesome.min.css">

</head>



<body>

</body>

</html>

<?php


	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to ="kevscuderia@gmail.com";
    $subject ="Message Auto Ecole";

    mail($to, $subject, $message, "From: " . $email);
    echo '<i class="fa fa-thumbs-up" aria-hidden="true"></i>','&nbsp;', "Message envoyé avec succès !";
?>