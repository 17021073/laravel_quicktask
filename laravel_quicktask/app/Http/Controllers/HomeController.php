<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use App\User;
use App\Card;
use App\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cards = User::findOrFail(Auth::id())->cards;
        
        return view('home', compact('cards'));
    }

    /**
     * Show profile of user
     */
    public function profile($id)
    {
        $user = User::findOrFail($id);

        return view('pages.profile', ['user' => $user]);
    }

    /**
     * update user profile
     */
    public function updateProfile(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        return redirect(route('home'));
    }

    /**
     * Save language to session
     */
    public function changeLanguage($language) 
    {
        Session::put('language', $language);

        return redirect()->back();
    }
}
