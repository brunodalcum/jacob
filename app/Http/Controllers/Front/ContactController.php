<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.contact');
    }

    public function submit()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        echo $name, $email, $phone, $message;
    }

    public function sendEmail(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];


       Mail::send(new Contact($data));
        return redirect()->route('contato');
        //return new Contact($data);
        //var_dump($request->all());
    }

    public function sucessEmail()
    {
        //return view('frontend.contact.contact-sucess');
    }
}
