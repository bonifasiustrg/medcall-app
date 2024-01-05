<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index() {
        $all = DB::table('users')->get();
        return view('admin.DashboardAdmin', compact('all'));
    }

}
