<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $data['title'] = 'Gaji';
        $data['selected_menu'] = 'salary';
        return view('salary.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Gaji';
        $data['selected_menu'] = 'salary';
        return view('salary.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Gaji';
        $data['selected_menu'] = 'salary';
        return view('salary.form', $data);
    }
}
