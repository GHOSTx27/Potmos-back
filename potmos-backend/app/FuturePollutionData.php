<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class FuturePollutionData extends Model
{
    //
    function getFuturePollutionData(int $locationId) {
        $data = DB::table('future_pollution_data')->where('location_id', $locationId)->latest('created_at')->first();
        return $data;
    }
}
