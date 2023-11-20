<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Adhocmember;
use App\User;
use App\Expertise;
use App\Project;
use App\Publication;
use App\Discategory;
use App\Districtscord;
use App\Disdata;
use App\Slider;
use App\Strategy;
use App\Formmessage;

use Carbon\Carbon;
use DB, Hash, Auth, Image, File, Session;
use Purifier;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->activation_status == 0) {
            Session::flash('info', 'Your account is not activated yet, after successfull activation, you can do things.');
            return redirect()->route('index.index');
        } else {
            return redirect()->route('dashboard.onesignal');
            // $member = User::find(Auth::user()->id);
            // return view('dashboard.index')->withMember($member);
        }
    }
}
