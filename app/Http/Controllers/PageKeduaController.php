<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class PageKeduaController extends Controller{
    public function index(){
        $profile = Profile::find(1);
        if($profile) {
            $project = $profile->projects;
        }

        $active_page = 'active';
        $not_active = 'inactive';
        $status = 'portofolio';

        $name = 'Nanditya Vianti Putri';
        $birthday = 'July 23, 2003';
        $call = '087836810455';
        $email = 'naviantiii@student.uns.ac.id';

        return view('page_kedua',[
            'profile' => $profile,
            'projects' => $project,
            
            'active1' => $not_active,
            'active2' => $active_page,
            'active3' => $not_active,
            'name' => $name,
            'birthday' => $birthday,
            'call' => $call,
            'email' => $email,
            'status' => $status
        ]);
    }
}

?>