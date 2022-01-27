<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function ContactUs(Request $request)
    {


        if (request()->ajax()){
            $to = "testemail@gmail.com"; // Your email here
            $subject = 'Message from my website'; // Subject message here
        }

        //Send mail function
        function send_mail($to, $subject, $message, $headers)
        {
            if (@mail($to, $subject, $message, $headers)) {
                echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));
            } else {
                echo json_encode(array('info' => 'error', 'msg' => "Error, your message hasn't been sent"));
            }
        }

        //Sanitize input data, remove all illegal characters
        $name    = filter_var($request->name, FILTER_SANITIZE_STRING);
        $email   = filter_var($request->name, FILTER_SANITIZE_EMAIL);
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['MESSAGE'], FILTER_SANITIZE_STRING);
        $checkbox = filter_var($_POST['AGREE_TO_TERMS'], FILTER_SANITIZE_STRING);

        //Validation
        if ($name == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
            exit();
        }
        if ($message == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your message."));
            exit();
        }

        if ($checkbox == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please agree to the Privacy Policy and try again."));
            exit();
        }

        //Send Mail
        $headers = 'From: ' . $email . '' . "\r\n" .
            'Reply-To: ' . $email . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        send_mail($to, $subject, $message . "\r\n\n"  . 'Name: ' . $name . "\r\n" . 'Email: ' . $email, $headers);
    }
}
