<?php

namespace App\Http\Controllers;

use App\Helpers\StringFormatter;
use App\Interface\ControllerInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

abstract class Controller implements ControllerInterface
{
    /**
     * Title for 'view' section in bahasa indonesia and english.
     */
    protected Collection $title;

    /**
     * setter for $title.
     * it should call in __constructor().
     */
    protected function setTitle(string $indonesia_title, string $english_title)
    {
        $this->title = new Collection([
            'id' => StringFormatter::toPascal($indonesia_title),
            'en' => $english_title
        ]);
    }

    /**
     * Show home page
     */
    public function index(): View
    {
        $data['title'] = $this->title['id'];
        $data['selected_menu'] = $this->title['en'];
        
        return view($this->title['en']."/main", $data);
    }

    /**
     * Show form to add data
     */
    public function create(): View
    {
        $data['title'] = $this->title['id'];
        $data['selected_menu'] = $this->title['en'];
        $data['do'] = 'Tambah';

        return view($this->title['en']."/form", $data);
    }

    /**
     * Show form to edit data
     */
    public function edit(string $id): View
    {
        $data['title'] = $this->title['id'];
        $data['selected_menu'] = $this->title['en'];
        $data['do'] = 'Edit';
        $data['data_id'] = $id;

        return view($this->title['en']."/form", $data);
    }
}
