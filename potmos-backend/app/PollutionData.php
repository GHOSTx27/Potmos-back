<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class PollutionData extends Model
{
    //
    function getPollutionData() {
        $data = DB::table('pollution_data')->get();
        return $data;
    }
}
