<?php

namespace Modules\Frontend\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function profile()
    {
        $currentUser = Auth::user();
        return view('frontend\users\profile', ['user' => $currentUser]);
    }
}