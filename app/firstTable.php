<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;



class firstTable extends Model
{
    protected $table = 'firstDB';

    protected $fillable = [
        'row1',
        'row2',
        'row3'
    ];

    protected $hidden = array('id');

    public function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
