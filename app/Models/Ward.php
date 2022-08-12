<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    private static $ward;
    private static $wards;
    private static $message;


    public static function newWard($request){
        self::$ward = new Ward();
        self::$ward->ward_name = $request->ward_name;
        self::$ward->ward_no = $request->ward_no;
        return self::$ward->save();
    }

    public static function updateWard($request, $id){
        self::$ward = Ward::find($id);
        self::$ward->ward_name = $request->ward_name;
        self::$ward->ward_no = $request->ward_no;
        self::$ward->save();
    }


    public static function updateWardStatus($id){
        self::$ward = Ward::find($id);
        if(self::$ward->status == 0){
            self::$ward->status = 1;
            self::$message = "ওয়ার্ড সক্রিয় হয়েছে";
        }
        else {
            self::$ward->status = 0;
            self::$message = "ওয়ার্ড নিষ্ক্রিয় হয়েছে";
        }
        self::$ward->save();
        return self::$message;
    }

}
