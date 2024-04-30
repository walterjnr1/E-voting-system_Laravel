<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class CountController extends Controller
{
    public function countUsers()
    {
        $countUser = DB::table('users')->count();
        return view('admin.home.index', compact('countUser'), ['page_name' => 'Home','greeting' => 'Hi there, Welcome']);
    }

}
