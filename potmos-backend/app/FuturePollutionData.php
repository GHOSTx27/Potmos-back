<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class FuturePollutionData extends Model
{
    //
    function getFuturePollutionData() {
        $data = DB::table('future_pollution_data')->get();
        return $data;
    }
}
