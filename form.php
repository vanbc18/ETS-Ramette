<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $business = $_POST["business"];
        $emailFrom = $_POST["email"];
        $tel = $_POST["tel"];
        $address = $_POST["adresse-postale"];
        $subject = $_POST["demande"];
        $msg = $_POST["msg"];

        $mailTo = "van_cmoi@hotmail.com";
        $headers = "From :".$emailFrom;
        $txt = "You've received an e-mail from ".$name.".\n\n".$msg;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }