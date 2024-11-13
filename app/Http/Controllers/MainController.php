<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class MainController extends Controller 
{
    public function login(Request $request) {
        $request->session()->flash("message", "Your are already login");
        $request->session()->put("user", true);
        return back();
    }


    public function logout(Request $request) {
        $request->session()->flash("message", "Your are already logout");
        $request->session()->forget("user");
        return back();
    }

    public function main() {
        return view("main.main");
    }
}