<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $message_error;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!empty($_POST))
        {
            if (!empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["edittext"]))
            {
                $lastname = $_POST["lastname"];
                $firstname = $_POST["firstname"];
                $email = $_POST["email"];
                $number = $_POST["number"];
                $edittext = $_POST["edittext"];

                $messageEditText = utf8_decode("{$edittext}");
                $messageLastName = utf8_decode("Nom : {$lastname}");
                $messageFirstName = utf8_decode("Prénom : {$firstname}");
                $messageEmail = utf8_decode("E-mail : {$email}");
                $messageNumber = utf8_decode("Numéro de téléphone : {$number}");

                $message = "<p align='center'>{$messageEditText}</p><br><br>";
                $message .= "<p align='left'>{$messageLastName}</p>";
                $message .= "<p align='left'>{$messageFirstName}</p>";
                $message .= "<p align='left'>{$messageEmail}</p>";
                $message .= "<p align='left'>{$messageNumber}</p>";

                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp-msay2.alwaysdata.net';
                $mail->Port = 25;
                $mail->setFrom($email, "{$firstname} {$lastname}");
                $mail->addAddress('yoannmeclot@hotmail.com', 'Yoann Meclot');
                $mail->Subject = "ID9 - Prise de contacte";
                $mail->addReplyTo($email, "{$lastname} {$firstname}");
                $mail->isHTML(true); 
                $mail->Body = $message;

                if ($mail->Send())
                {
                    $message_error = "<font color='green'>Votre mail a été envoyé avec succès !</font>";
                }
                else
                {
                    $message_error = "<font color='red'>Un problème est survenue !</font>";
                }
            }
        }
    }
?>