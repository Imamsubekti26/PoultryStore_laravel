<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['title'] = 'Karyawan';
        $data['selected_menu'] = 'employee';
        return view('employee.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Karyawan';
        $data['selected_menu'] = 'employee';
        return view('employee.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Karyawan';
        $data['selected_menu'] = 'employee';
        return view('employee.form', $data);
    }
}
