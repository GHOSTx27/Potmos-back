<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class PollutionData extends Model
{
    //
    function getPollutionData(int $locationId) {
        $data = DB::table('pollution_data')->where('location_id', $locationId)->latest('created_at')->first();
        return $data;
    }
}
