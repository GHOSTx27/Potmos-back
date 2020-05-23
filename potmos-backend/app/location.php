<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //
    function getLocations() {
        $data = DB::table('locations')->get();
        return $data;
    }
}
