<?php

namespace Modules\Backend\Users\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Backend\Users\Models\User as UserModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(Request $request, UserModel $userModel)
    {
        $users = $userModel->all();
        return view('backend\users\index', ['users' => $users]);

    }
    public function show($id, UserModel $userModel)
    {
        $currentUser = $userModel->findUser($id);
        return view('backend\users\show', ['user' => $currentUser]);
    }

    public function profile()
    {
        $currentUser = Auth::user();
        return view('backend\users\profile', ['user' => $currentUser]);
    }
}