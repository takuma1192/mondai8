<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mondai8controller extends Controller
{
    public function index()
    {
        $data = [
            'content' => '建物です',
        ];
        return view('mondai8.index' , $data);
    }
    
}
