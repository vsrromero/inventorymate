<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('web.login', [
            'title' => 'Inventory Mate - Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validate the user
        $authentication = [
            'user' => 'email',
            'password' => 'required'
        ];

        // Message to be displayed if validation fails
        $feedback = [
            'user.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter your password'
        ];

        $request->validate($authentication, $feedback);

        // check on db if user exists
        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User();

        $user = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($user->name)) {

            session_start();
            global $_SESSION;
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('app.suppliers');
        } else {
            // User does not exist
            return redirect()->route('web.login')->with('error', 'Invalid email or password');
        }

    }
}
