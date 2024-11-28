<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PagePertamaController extends Controller{
    public function index(){
        $active_page = 'active';
        $not_active = 'inactive';
        $status = 'profile';

        $name = 'Nanditya Vianti Putri';
        $birthday = 'July 23, 2003';
        $call = '087836810455';
        $email = 'naviantiii@student.uns.ac.id';
        $address = 'Pajang, Laweyan, Surakarta';

        return view('page_pertama',[
            'active1' => $active_page,
            'active2' => $not_active,
            'active3' => $not_active,
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