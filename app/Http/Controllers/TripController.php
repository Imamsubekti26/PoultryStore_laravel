<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $data['title'] = 'Trip';
        $data['selected_menu'] = 'trip';
        return view('trip.main', $data);
    }

    public function create()
    {
        $data['do'] = 'Tambah';
        $data['title'] = 'Trip';
        $data['selected_menu'] = 'trip';
        return view('trip.form', $data);
    }

    public function edit(string $id)
    {
        $data['do'] = 'Edit';
        $data['title'] = 'Trip';
        $data['selected_menu'] = 'trip';
        return view('trip.form', $data);
    }
}
