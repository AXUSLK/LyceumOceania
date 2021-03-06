<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Snowfire\Beautymail\Beautymail;

class ContactUsController extends Controller
{

    public function ContactUs(Request $request)
    {


        if (request()->ajax()) {
            $to = "thilina.lyceum@gmail.com"; // Your email here
            $subject = 'New Contact Us Message from Lyceum Oceania'; // Subject message here
        }

        //Sanitize input data, remove all illegal characters
        $name    = filter_var($request->name, FILTER_SANITIZE_STRING);
        $email   = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);
        $co_message = filter_var($request->co_message, FILTER_SANITIZE_STRING);
        $checkbox = filter_var($request->terms_agree, FILTER_SANITIZE_STRING);

        //Validation
        if ($name == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
            exit();
        }
        if ($co_message == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your message."));
            exit();
        }

        if ($checkbox == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please agree to the Privacy Policy and try again."));
            exit();
        }

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.contact_us', [], function ($message) use($name, $email, $co_message) {
            $message
                ->from($email, $name)
                ->to('thilina.lyceum@gmail.com')
                ->subject('New Contact Us Message from Lyceum Oceania');
        });

        echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));

    }
}
