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
        if(Auth::check() === true){
            return redirect()->route('home');
        }


        //$user =  User::where('id', 2)->first();
        //$user->password = bcrypt('teste');
        //$user->save();

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
        $this->authenticated($request->getClientIp());

       $json['redirect'] = route('home');
        return response()->json($json);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip,
        ]);
    }

}
