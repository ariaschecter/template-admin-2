<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function log() {
        $logs = Activity::latest()->get();
        return view('admin.log', compact('logs'));
    }

    public function component() {
        return view('admin.component');
    }

    public function store(Request $request) {
        dd($request);
        $request->validate([
            'acielana_arlana' => 'required',
            'basic' => 'required',
            'humanfd' => 'required|email',
            'datetime' => 'required',
            'multiple' => 'required',
            'range' => 'required',
            'timepicker' => 'required',
            'color' => 'required',
        ]);
    }

    public function lang($lang) {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
