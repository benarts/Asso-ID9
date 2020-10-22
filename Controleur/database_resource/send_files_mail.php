<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     if (isset($_POST) && !empty($_POST))
    //     {
    //         if (!empty($_FILES["attachment"]["name"]))
    //         {
    //             $file_name = $_FILES["attachment"]["name"];
    //             $temp_name = $_FILES["attachment"]["tmp_name"];
    //             $file_type = $_FILES["attachment"]["type"];

    //             $base = basename($file_name);
    //             $extension = substr($base, strlen($base)-4, strlen($base));

    //             $allowed_extensions = array(".doc", "docx", ".pdf", ".zip", ".png");

    //             if (in_array($extension, $allowed_extensions))
    //             {
    //                 $from = $_POST["email"];
    //                 $to = "mviladu13015@gmail.com";
    //                 $subject = "Test";
    //                 $message = $_POST["edittext"];

    //                 $file = $temp_name;
    //                 $content = chunk_split(base64_encode(file_get_contents($file)));
    //                 $uniqid = md5(uniqid(time()));

    //                 $header = "From: {$from}\n";
    //                 $header .= "Reply-To: {$from}\n";
    //                 $header .= "MIME-Version: 1.0\n";

    //                 $header .= "Content-Type: multipart/mixed; boundary=\"{$uniqid}\"\n";
    //                 $header .= "This is a multi-part message in MIME format\n";

    //                 $header .= "--{$uniqid}\n";
    //                 $header .= "Content-Type: text/plain; charset=\"utf-8\"";
    //                 $header .= "Content-Transfer-Encoding: 7bit\n";
    //                 $header .= "{$message}\n";

    //                 $header .= "--{$uniqid}\n";
    //                 $header .= "Content-Type: {$file_type}; name=\"{$file_name}\"\n";
    //                 $header .= "Content-Transfer-Encoding: base64\n";
    //                 $header .= "Content-Disposition: attachment; filename=\"{$file_name}\"\n";
    //                 $header .= "{$content}\n";

    //                 if (mail($to, $subject, "", $header))
    //                 {
    //                     echo "success";
    //                 }
    //                 else
    //                 {
    //                     echo "Error 3";
    //                 }
    //             }
    //             else
    //             {
    //                 echo "Error 2";
    //             }
    //         }
    //         else
    //         {
    //             echo "Error 1";
    //         }
    //     }
    // }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!empty($_POST))
        {
            if (!empty($_FILES["attachment"]["name"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["edittext"]))
            {
                $path = "upload/{$_FILES["attachment"]["name"]}";

                move_uploaded_file($_FILES["attachment"]["tmp_name"], $path);

                $lastname = $_POST["lastname"];
                $firstname = $_POST["firstname"];
                $email = $_POST["email"];
                $number = $_POST["number"];
            
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
                $mail->addAttachment($path);
                $mail->Subject = "ID9 - Prise de contacte";
                $mail->addReplyTo($email, "{$lastname} {$firstname}");
                $mail->isHTML(true);
                $mail->Body = $message;

                if ($mail->Send())
                {
                    $message_error = "<font color='green'>Votre mail a été envoyé avec succès !</font>";
                    unlink($path);
                }
                else
                {
                    $message_error = "<font color='red'>Un problème est survenue !</font>";
                }
            }
        }
    }
?>