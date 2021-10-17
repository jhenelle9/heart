<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

function login(){
    return view('Admin.login');
}

function signin(Request $req){
    $admin = new Admin;
    $mail = $req->email;
    $pass = $req->password;
    $info = DB::table('admins')
    ->where('email', '=', $mail)
    ->where('password',$req->password)
    ->count();
if ($info == 1){
$user = Admin::where('email', $mail)->first();
$req->session()->put('admin', $user->email);
$req->session()->put('id', $user->id);
session()->put('login', 1);
    return redirect('admin/dashboard')->with('admin',$info);
}
else
{
    return redirect('admin/login');
}
}

function logout(){
if (session()->has('admin')){
    session()->flush();
    session()->regenerateToken();
} 
return view('Admin.login')->with('goodbye','goodbye');
}

function dashboard(){
    return view('Admin.dashboard');
}

function courses(){
    return view('Admin.courses');
}

function add_course(){
    return view('Admin.add-course');
}

function added_course(){
    return redirect('admin/courses')->with('added','added');
}

function delete_course(){
    return redirect('admin/courses')->with('deleted','deleted');
}

function added_subject(Request $req){
    $subject = new Subject;
    $subject = $req->subject;
    $subject->save();
    return redirect('admin/courses')->with('subject','subject');
}
function delete_subject($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('admin/courses')->with('deleted', 'deleted');
    }

    function edit_subject($id)
    {
        $info = Subject::find($id);
        return  view('admin-edit-subject', ['in' => $info]);
    }


    function update_subject(Request $req, $id)
    {
        $admin = Subject::find($id);
        $admin->name = $req->subject;
        $admin->save();
        return redirect('admin/courses')->with('edited','edited');
    }
function activity(){
    return view('Admin.activity');
}

function activity_update(){
    return redirect('admin/applicant')->with('updated','updated');
}

function download_xml(){
    return redirect('admin/applicant')->with('downloading','downloading');
}

function pay(){
    return view('Admin.payments');
}

function media(){
    return view('Admin.gallery');
}

function added_media(){
    return redirect('admin/gallery')->with('added','added');
}

function delete_media(){
    return redirect('admin/gallery')->with('deleted','deleted');
}

function out(){
    return view('Admin.login');
}


}
