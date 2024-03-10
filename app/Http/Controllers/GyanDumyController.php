<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GyanDumyController extends Controller
{
    public function getData()
    {
        $data = [
            'message' => 'Data fetched successfully',
            
        ];

      
        return response()->json($data);
    }
}
