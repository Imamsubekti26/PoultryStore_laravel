<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $data['title'] = 'Mitra';
        $data['selected_menu'] = 'partner';
        return view('partner.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Mitra';
        $data['selected_menu'] = 'partner';
        return view('partner.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Mitra';
        $data['selected_menu'] = 'partner';
        return view('partner.form', $data);
    }
}
