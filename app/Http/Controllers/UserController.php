<?php
namespace App\Http\Controllers;

use App\Entity\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        try {
            $user = new User($data);
        } catch (\Exception $e) {
            return redirect('register')->with('message', 'Error while creating user');
        }

        if (!(new UserRepository())->create($user)) {
            return redirect('register')->with('message', 'Error while saving user');
        }

        return redirect('login')->with('message', 'Registration successfully completed');
    }

    public function profile()
    {
        if (Auth::user() == null) {
            return redirect('home');
        }

        return view('profile', ['user' => Auth::user()]);
    }
}
