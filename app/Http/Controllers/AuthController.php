<?php


namespace App\Http\Controllers;


use App\Models\User;
use App\Support\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function home()
    {
        return view('backend.dashboard');
    }

    public function login(Request $request)
    {

        return view('backend.login.login');
    }

    public function logindo(Request $request)
    {

        if(in_array('', $request->only('email', 'password'))){
            $json['message'] = $this->message->success('Ooops, informe todos os dados para efetuar o login')->render();
            return response()->json($json);
        }
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->error('Ooops, informe um e-mail válido')->render();
            return response()->json($json);
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(!Auth::attempt($credentials)) {
            $json['message'] = $this->message->error('Ooops, usuário e senha não conferem')->render();
            return response()->json($json);
        }
       $json['redirect'] = route('login');
        return response()->json($json);

    }

}
