<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Mustafa Gün</title>
    <?php include 'assets/includes/head.php'; ?>
    <style>
        .contact {
            padding: 4%;
            height: 400px;
        }

        .control-label {
            color: #000;
        }

        .col-md-3 {
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .contact-info {
            margin-top: 10%;
        }

        .contact-info img {
            margin-bottom: 15%;
        }

        .contact-info h2 {
            margin-bottom: 10%;
        }

        .col-md-9 {
            background: #ebecf5;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .contact-form label {
            font-weight: 600;
        }

        .contact-form button {
            background: #25274d;
            color: #fff;
            font-weight: 600;
            width: 25%;
        }

        .contact-form button:focus {
            box-shadow: none;
        }

        .row {
            height: auto !important;
            margin-bottom: 60px;
        }

        .alert {
            position: relative;
            z-index: 10;
            padding-left: 250px;
            font-size: 14px;
        }

        .alert h3,
        .alert .h3 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <?php include_once 'assets/includes/navbar.php'; ?>
    <div class="alert-message"> </div>
    <div class="container-fluid">
        <div class="container" style="height: 90vh;">
            <div class="row justify-content-center" style="padding-top: 5rem !important;">
                <div class="container contact">
                    <div class="row">
                        <div class="col-md-3 b-dark-pink text-white">
                            <div class="contact-info">
                                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                                <h2>İletişime Geçelim</h2>
                                <h4>Mesajınızı en kısa sürede cevaplayacağım!</h4>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="contact-form">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="fname">Adınız Soyadınız:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fName" name="contactName" placeholder="Adınızı giriniz..." required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="email">E-posta Adresiniz:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="example@example.com" name="contactMail" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="comment">Mesajınız:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="ftext" name="contactComment" placeholder="Lütfen mesajınızı yazınız..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default" id="gonder">Gönder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php



    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if ($_POST) {
        $contactName = $_POST['contactName'];
        $contactMail = $_POST['contactMail'];
        $contactComment = $_POST['contactComment'];

        // PHPMailer classes into the global namespace

        // Base files 


        // create object of PHPMailer class with boolean parameter which sets/unsets exception.
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP(); // using SMTP protocol                                     
            $mail->Host = 'mustafagun.com'; // SMTP host as gmail 
            $mail->SMTPAuth = true;  // enable smtp authentication                             
            $mail->Username = 'iletisim@mustafagun.com';  // sender gmail host              
            $mail->Password = '13Ar1997'; // sender gmail host password                          
            //$mail->SMTPSecure = 'tls';  // for encrypted connection                           
            $mail->Port = 587;   // port for SMTP  


            $mail->setFrom('iletisim@mustafagun.com', "Yeni Mesaj"); // sender's email and name
            $mail->addAddress('iletisim@mustafagun.com', "Mustafa Gün");  // receiver's email and name
            $mail->addCC('mustafa.gun.1997@gmail.com');

            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = mb_convert_case($contactName, MB_CASE_TITLE, "UTF-8")  . ' Bir Mesaj Gönderdi';
            $mail->Body    =  '<html><body>' . $contactComment . ' <br><br> Gönderen: ' . $contactMail . '</body></html>';
            $mail->AltBody = $contactComment . '\r\n' . $contactMail;

            $mail->send();
        } catch (Exception $e) { // handle error.
            echo 'Mesaj gönderilemedi. Hata mesajı: ', $mail->ErrorInfo;
        }

        // Load Composer's autoloader
        require 'vendor/autoload.php';
    }
    ?>