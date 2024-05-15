<?php


namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
//        $credentials = $request->only('name', 'password');

        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password,
        ])) {
            return redirect('/')->withSuccess('You have signed-in');;
//                ->route('property.index');
        } else {
            return redirect()->route('loginPage')->with('message', 'Wrong login or password');
        }
    }

    public function registration(RegistrationRequest $request)
    {
        $data = $request->all();

        $user = User::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);
        return redirect("/");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
