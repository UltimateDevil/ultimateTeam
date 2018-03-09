<?php

namespace App\Http\Controllers\Ultimate;

use App\Ultimate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    protected $redirectPath = 'login';

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        //Validates data
        $this->validator($request->all())->validate();

        //Create seller
        $ultimate = $this->create($request->all());

        //Authenticates seller

        //Redirects sellers
        return redirect($this->redirectPath);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:sellers',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Ultimate::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    protected function guard()
    {
        return Auth::guard('web_ultimate');
    }
}
