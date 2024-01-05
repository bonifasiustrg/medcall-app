<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        $antrians = DB::table('antrians')->get();
        $doneAntriansCount = DB::table('antrians')->where('status', 'done')->count();
        $pendingAntriansCount = DB::table('antrians')->where('status', 'nonaktif')->count();
        return view('admin.DashboardAdmin', compact('users', 'antrians', 'doneAntriansCount', 'pendingAntriansCount'));
    }

    public function log() {
        $antrians = DB::table('antrians')->get();
        return view('admin.LogAdmin', compact('antrians'));
    }
}
