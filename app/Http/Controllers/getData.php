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

    public function show(Request $request)
    {
        // dd($request->input('id'));
        $table = new firstTable;
        $colNames = $table->getTableColumns();
        $theTable = $table->all();

        $lastrow = DB::table('firstDB')->orderBy('id', 'DESC')->first();
        $lastId = $lastrow->id;
        if ($request->input('id') == null) {
            $lastRecord = DB::table('firstDB')->select('row1', 'row2', 'row3')->where('id', $lastId)->get()->first();
        } else {
            $lastRecord = DB::table('firstDB')->select('row1', 'row2', 'row3')->where('id', $request->input('id'))->first();
            // dd($lastRecord);
        }

        //  dd($lastRecord->first());

        return view('welcome', [
            'data' => $colNames, 'theTable' => $theTable,
            'lastRecord' => $lastRecord
        ]);
    }

    public function store(Request $request)
    {
        $table = new firstTable;
        $postData = array_slice($request->all(), 1);

        $table->insert($postData);
        return redirect('/');
    }
}
