<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/PHPMailer.php";
 

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();
    

    //Server settings
    
    $body = "ห้ะ";
    $mail->CharSet  = 'UTF-8';
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'triamdod.5@gmail.com';                     // SMTP username
    $mail->Password   = 'Triam_dod5';                               // SMTP password
    $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->isHTML(true);
    $mail->setFrom('triamdod.5@gmail.com', 'Triamdod 5');
    $mail->addAddress($email);              
    $mail->Subject = ("ยืนยันการจองบัตร Triamdod 5");
    $mail->Body = "<link rel='preconnect' href='https://fonts.gstatic.com'>
                   <link href='https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@300;400;500;600;700;800&family=Kanit:wght@300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
                   
                    <h1 style='color:#212130; font-family: 'Kanit', sans-serif;;'>คุณได้สั่งจองบัตร Triamdod <span style='color:#388BFF; font-family: 'Kanit', sans-serif;'>5</style></h1>

                    <p style='color:#212130; font-family: 'Kanit', sans-serif;'>
                    คุณได้สั่งจองบัตรเตรียมโดด 5 เป็นที่เรียบร้อยแล้ว<b>โปรดเก็บหลักฐานนี้ไว้</b>
                    <br>ในกรณีมีข้อสงสัยขอให้ทำการติดต่อทีมงานดูแล ผ่านเว็บไซต์
                    </p><br><br>

                    <p style='color:#354d74; font-family: 'Kanit', sans-serif;'>รายละเอียดการสั่งจอง</p>
                    <p style='color:#354d74; font-family: 'Kanit', sans-serif;'> ชื่อ: <b>" . $namefull . "</b><br> ชั้นเรียน: <b>" . $classroom ." </b><br> เลขที่: <b>". $number ."</b><br> Token ยืนยัน: <b>". $token . "</b><br> อีเมลที่ลงทะเบียน: <b>" . $email . "</b></p>";

    $mail->addAttachment(' ', ' '); 
    $mail->AddReplyTo( 'triamdod.5@gmail.com', 'Triam dod staff' );

    if($mail->send()){
        //echo 'Message has been sent' . " " . "Updated";
        $data["status"] = "1";
        $data["texts"] = "ลงทะเบียน Triamdod 5 เรียบร้อย";
        echo json_encode($data);

    }else{
        //echo 'ส่งอีเมลไม่ได้';
        $data["status"] = "3";
        $data["texts"] = "ส่งอีเมลไม่ได้อะ เมลผิดป่าว";
        echo json_encode($data);
    }

    