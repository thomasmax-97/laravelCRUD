<?php

namespace App\Http\Controllers;

use App\firstTable;
use FirstDB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class getData extends Controller
{



    public function show()
    {
        $table = new firstTable;
        $colNames = $table->getTableColumns();
        return view('welcome', ['data' => $colNames]);
    }

    public function store(Request $request)
    {
        $table = new firstTable;
        $colNames = $table->getTableColumns();
        $data = $request->all();

        $cols = $table->getTableColumns();
        //print_r($cols);
        foreach ($cols as $key => $val) {
        }
        //dd($data);

        //$table    
        $table->save();
    }
}
