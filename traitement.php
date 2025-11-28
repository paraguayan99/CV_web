<?php

// Envoi du mail, avec contenu HTML + pièce jointe CV en PDF, via PHPMAiler

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);

$sendmail = (isset($_POST['sendmail']))?$_POST['sendmail']:null;

// SI CHGT D'HERBEGEUR : changer l'adresse setFrom avec le bon nom de domaine sinon le mail ne partira pas ou ira dans les spams
// Tester l'efficacité de l'envoi sur https://www.mail-tester.com/ (3 essais par jour) -> si note faible, il déterminera les améliorations à apporter

try {
    $mail->setFrom('cvachardcedric@paraguayan99.go.yj.fr');
    $mail->addAddress($sendmail);
    $mail->addBCC('achardcedric88@gmail.com');

    $mail->addAttachment('cv_achard_cedric.pdf'); 

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->Subject = 'CV ACHARD Cédric';
    $mail->Body    = '
                    <!DOCTYPE html>
                    <html lang="fr">
                    <head>
                        <meta charset="UTF-8" />
                        <title>CV ACHARD Cédric</title>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    </head>
                    <body
                        style="
                        margin: 0;
                        padding: 40px 20px;
                        color: black;
                        font-family: Georgia, serif;
                        text-align: center;
                        font-size: 18px;
                        line-height: 1.6;
                        "
                    >
                        <div
                        style="
                            background-color: #ECECEC;
                            border-radius: 15px 50px;
                            padding: 30px 20px;
                            display: inline-block;
                            max-width: 600px;
                            width: 100%;
                            box-sizing: border-box;
                        "
                        >
                        <p style="margin-bottom: 20px;">
                            <span style="font-size: 24px; font-weight: bold;">M</span><span style="font-weight: normal;">erci d\'avoir pris le temps de lire mon CV <br>
                            et d\'avoir demandé à le recevoir par mail.</span>
                        </p>
                        <p style="margin-bottom: 20px;">
                            Chose promise, chose due... Le voici en pièce jointe.
                        </p>
                        <p style="margin-bottom: 40px;">
                            Au plaisir d\'échanger avec vous très prochainement.
                        </p>
                        <p style="margin: 0; font-weight: bold;">ACHARD Cédric</p>
                        <p style="margin: 0; font-weight: bold;">06&nbsp;71&nbsp;74&nbsp;48&nbsp;02</p>
                        <p style="margin-bottom: 40px; margin-top: 0; font-weight: bold; font-size: 14px;">
                            achardcedric<span style="display: none;">_</span>88<span style="display: none;">_</span>@gmail.<span style="display: none;">_</span>com
                        </p>
                        <p style="margin-bottom: 40px; margin-top: 0; font-size: 16px;">
                            <a href="https://bit.ly/cv-achard-cedric" style="color:#000000;" target="_blank">>Revenir sur le CV en ligne<</a>
                        </p>
                        </div>
                    </body>
                    </html>
                    ';

    $mail->send();
    header('Location: https://paraguayan99.go.yj.fr/?send=true');
    exit;
} catch (Exception $e) {
    header('Location: https://paraguayan99.go.yj.fr/?send=false');
    exit;
}

// SI CHGT D'HERBEGEUR : changer les 2 'Location'

?>