<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
       }
    
       public function about(){
        return view('pages.about');
       }
    
       public function modalwindow(){
        return view('pages.modalwindow');
       }
    
       public function properties(){
        return view('pages.properties');
       }
    
       public function contact(){
        return view('pages.contact');
       }
    
       public function signup(){
        return view('pages.signup');
       }
       public function signin(){
        return view('pages.signin');
       }
       public function agentaccount(){
        return view('Agent.agentaccount');
       }
       public function ownersaccount(){
        return view('Owners.ownersaccount');
       }

    //    Admin
    public function adminsidebar(){
     return view('Admin.adminsidebar');
    }
    
    public function dashboard(){
        return view('Admin.dashbord');
    }
    public function adduser(){
        return view('Admin.adduser');
    }

    public function usermanagement(){
        return view('Admin.usermanagement');
    }
    public function propertylist(){
        return view('Admin.propertylist');
    }
    public function profile(){
        return view('Admin.profile');
    }

    // Agent

    public function agentdashboard(){
        return view('Agent.agentdashboard');
    }

    public function listings(){
        return view('Agent.listings');
    }
    public function agentprofile(){
        return view('Agent.agentprofile');
    }
}
