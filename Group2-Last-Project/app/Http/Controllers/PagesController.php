<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
       }
    
       public function home(){
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
    
       public function login(){
        return view('pages.login');
       }
    
       public function signup(){
        return view('pages.signup');
       }

       public function navbar(){
        return view('navbar');
       }
    
}
