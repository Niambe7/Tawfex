<?php
session_start();
    require '../phpmailer/PHPMailerAutoload.php';
    require_once('../autoload.php');
    $result;
    $id =$_GET['id'];
    $email =$_SESSION['email'];
    $mail = new PHPMailer();

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth =true ;
    $mail->IsSMTP();
    $mail->SMTPSecure='tls';
    $mail->Username = "ndiambe.gueye1@uvs.edu.sn";
    $mail->Password = "Xutip@8160";

    $mail->setFrom($email);
    $mail->addAddress($email);
    $mail->addReplyTo('niambegui785@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation Rendez-Vous Tawfex';
    $mail->Body = "<p align=center>Bonjour Votre Rendez-Vous Chez Tawfex Viens d'etre confirmer <br> Veuillez Vous Presenter Le jour de rendez-vous
    Eviter au Maximum d'etre en retard SVP <br>
    <p style='color:red;' align=center>NB: Veuillez Consulter votre compte Tawfex pour les détails de votre rendez-vous</p></p>";

    if(!$mail->send()){
        $result = "Something went Wrong . Please Try again";
    }

    else{
        $result ="Envoie du mail Reussi!";
        $_SESSION['result'] = $result;
        header("location:../successEmail.php");
        echo "<script>confi()</script>";
    }