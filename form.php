<?php
        if (isset($_POST['email']) && isset($_POST['message'])) {
            $to = ''; 
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = 'Nouveau message de ' . $email;
            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
            if (mail($to, $subject, $message, $headers)) {
                echo 'Votre message a été envoyé avec succès.';
            } else {
                echo 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.';
            }
        }
        ?>