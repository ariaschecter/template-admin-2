<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class AdminController extends Controller
{
    public function log() {
        $logs = Activity::latest()->get();
        return view('admin.log', compact('logs'));
    }
}
