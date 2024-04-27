<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $data['title'] = 'Aktifitas';
        $data['selected_menu'] = 'activity';
        return view('activity.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Aktifitas';
        $data['selected_menu'] = 'activity';
        return view('activity.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Aktifitas';
        $data['selected_menu'] = 'activity';
        return view('activity.form', $data);
    }

}
