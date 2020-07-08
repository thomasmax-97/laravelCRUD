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
        $theTable = $table->all();
        return view('welcome', ['data' => $colNames, 'theTable' => $theTable]);
    }

    public function store(Request $request)
    {
        $postData = array_slice($request->all(), 2);
        DB::table('firstDB')->insert($postData);
        return redirect('/');
    }
}
