<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function loginPage(): View|Factory|Application
    {
        return view('auth.login');
    }

    public function registerPage(): View|Factory|Application
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function register(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'fullName' => 'required',
            'email' => 'required|confirmed',
            'password' => 'required|confirmed'
        ]);
        $data = array(
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' => 'user',
            'remember_token' => $request->_token
        );

        (new User)->create($data);
        return redirect()->route('posts');

    }


    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */

    public function login(Request $request): RedirectResponse
    {


        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))){
            return back()->with('status', 'invalid email or password');
        }
        $request->session()->regenerate();

        return redirect()->route('posts');

    }

    public function logout(Request $request): Redirector|Application|RedirectResponse
{
    session_destroy();

    auth()->guest();
    session_abort();
    session_destroy();


    return redirect()->route('home');
}

}
