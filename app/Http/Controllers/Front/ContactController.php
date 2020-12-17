<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            route('index'),
            asset('img/banner/banner-1.jpg'),
            'sim');
        return view('frontend.contact.contact',[
            'head' =>  $head
        ]);
    }

    public function submit()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];


    }

    public function sendEmail(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

       DB::insert("INSERT INTO emails (name, email, phone, message)  VALUES (:name, :email, :phone, :message)", $data);
       Mail::send(new Contact($data));
       return redirect()->route('enviado-sucesso');
        //return new Contact($data);
        //var_dump($request->all());
    }

    public function sucessEmail()
    {
        $head =$this->seo->render(env('APP_NAME') . ' - Loja de Jeans',
            'O melhor jean masculino',
            url('www.jacobjeans.com.br'),
            asset('img/banner/banner-1.jpg'),
            'sim');

        return view('email.contato-sucesso', [
            'head' =>  $head
        ]);
    }
}
