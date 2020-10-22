<?php
    session_start();

    require("../../Model/utils/MessageUtils.php");
    require("../../Model/database/MySQL.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!empty($_POST["mail"]) && !empty($_POST["password"]))
        {
            $admin;
            $data;

            $mail = $_POST["mail"];
            $password = $_POST["password"];

            $sql = new MySQL("SELECT * FROM administration WHERE mail = '$mail'");
            $data = $sql->fetchObject();

            if ($data)
            {
                if (password_verify($password, $data->password))
                {
                    if ($data->admin != null)
                    {
                        $admin = $data->admin;

                        if ($admin == 1)
                        {
                            $_SESSION["admin"] = $admin;
                            $_SESSION["error_password"] = "";
                            $_SESSION["error_mail"] = "";
                            $_SESSION["error_access"] = "";

                            header("Location: ../../Vue/Html/administration/admin.php");
                        }
                        else
                        {
                            $_SESSION["admin"] = 999999;
                            $_SESSION["error_password"] = "";
                            $_SESSION["error_mail"] = "";
                            $_SESSION["error_access"] = "Vous n'êtes pas Autorisé(e) à accéder à ce contenue, il vous faut les permissions d'Administrateur";

                            header("Location: ../../Vue/Html/administration/form_admin.php");
                            die();
                        }
                    }
                    else
                    {
                        $message = new MessageUtils("Un problème est survenu");
                        $message->echo();
                    }
                }
                else
                {
                    $_SESSION["admin"] = 999999;
                    $_SESSION["error_password"] = "Mot de passe incorrect";
                    $_SESSION["error_mail"] = "";
                    $_SESSION["error_access"] = "";

                    header("Location: ../../Vue/Html/administration/form_admin.php");
                    die();
                }
            }
            else
            {
                $_SESSION["admin"] = 999999;
                $_SESSION["error_mail"] = "E-mail incorrect";
                $_SESSION["error_password"] = "";
                $_SESSION["error_access"] = "";

                header("Location: ../../Vue/Html/administration/form_admin.php");
                die();
            }
        }
        else
        {
            $message = new MessageUtils("Un problème est survenu");
            $message->echo();
        }
    }
?>