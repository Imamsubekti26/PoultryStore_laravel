<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{
    public function index()
    {
        $data['title'] = 'Mobil';
        $data['selected_menu'] = 'car';
        return view('car.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Mobil';
        $data['selected_menu'] = 'car';
        return view('car.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Mobil';
        $data['selected_menu'] = 'car';
        return view('car.form', $data);
    }
}
