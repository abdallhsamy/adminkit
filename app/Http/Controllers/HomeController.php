<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users_count = DB::table('users')->count();
        $roles_count = DB::table('roles')->count();
        $permissions_count = DB::table('permissions')->count();
        $articles_count = DB::table('articles')->count();

        return view('home', compact(
            'users_count',
            'roles_count',
            'permissions_count',
            'articles_count'));
    }
}
