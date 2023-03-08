<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\System;

class MainController extends Controller
{
    private $component_name = 'component_1';
    public function home(){
        return view('home');
    }

    public function init(){
        $status = System::where(['title' => $this->component_name])->first();
        $status->is_active = 0;
        $status->save();
        return json_encode(['success' => true]);
    }

    public function activate(){
        $status = System::where(['title' => $this->component_name])->first();
        $status->is_active = 1;
        $status->save();
        return json_encode(['success' => true]);
    }

    public function deactivate(){
        $status = System::where(['title' => $this->component_name])->first();
        $status->is_active = 0;
        $status->save();
        return json_encode(['success' => true]);
    }

    public function get_status(){
        $status = System::where(['title' => $this->component_name])->first();
        return json_encode(['active' => $status->is_active]);
    }
}