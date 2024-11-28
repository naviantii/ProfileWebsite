<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PageKetigaController extends Controller{
    public function index(){
        $active_page = 'active';
        $not_active = 'inactive';
        $status = 'gallery';

        $name = 'Nanditya Vianti Putri';
        $birthday = 'July 23, 2003';
        $call = '087836810455';
        $email = 'naviantiii@student.uns.ac.id';
        $address = 'Pajang, Laweyan, Surakarta';

        return view('page_ketiga',[
            'active1' => $not_active,
            'active2' => $not_active,
            'active3' => $active_page,
            'name' => $name,
            'birthday' => $birthday,
            'call' => $call,
            'email' => $email,
            'address' => $address,
            'status' => $status
        ]);
    }
}
?>