<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="2; ../">
<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
body{

background-color: #0598EC;
color: white;
font-size: 20px;
text-align: center;
margin-top: 200px;
}

</style>


<body>

</body>

</html>

<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email= $_POST['email'];
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}

    $to ="kevin.auchoybur@gmail.com";
    $subject ="Message WS";

    mail($to, $subject, $message, "From: " . $email);
    echo '<i class="fa fa-check" aria-hidden="true"></i>','&nbsp;', "Message sent succesfully !";
?>