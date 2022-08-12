<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxpayer extends Model
{
    use HasFactory;

    private static $image;
    private static $imageName;
    private static $directory;
    private static $taxpayer;
    private static $taxpayers;
    private static $imageUrl;
    private static $message;

    public static function getImageUrl($request){
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getclientOriginalName();
        self::$directory    = 'taxpayer-house-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newTaxpayer($request){
        self::$taxpayer                             = new Taxpayer();
        self::$taxpayer->house_name                 = $request->house_name;
        self::$taxpayer->house_owner                = $request->house_owner;
        self::$taxpayer->father_name                = $request->father_name;
        self::$taxpayer->mother_name                = $request->mother_name;
        self::$taxpayer->profession                 = $request->profession;
        self::$taxpayer->road_name                  = $request->road_name;
        self::$taxpayer->present_address            = $request->present_address;
        self::$taxpayer->land_quantity              = $request->land_quantity;
        self::$taxpayer->non_taxable_part           = $request->non_taxable_part;
        self::$taxpayer->men_number                 = $request->men_number;
        self::$taxpayer->women_number               = $request->women_number;
        self::$taxpayer->other_number               = $request->other_number;
        self::$taxpayer->child_number               = $request->child_number;
        self::$taxpayer->disabled_number            = $request->disabled_number;
        self::$taxpayer->employee_number            = $request->employee_number;
        self::$taxpayer->unemployee_number          = $request->unemployee_number;
        self::$taxpayer->govt_benefi_number         = $request->govt_benefi_number;
        self::$taxpayer->hw_number                  = $request->hw_number;
        self::$taxpayer->water_connection_number    = $request->water_connection_number;
        self::$taxpayer->connection_size            = $request->connection_size;
        self::$taxpayer->subscribers_number         = $request->subscribers_number;
        self::$taxpayer->sanitation_faicilities     = $request->sanitation_faicilities;
        self::$taxpayer->tubewell_facilities        = $request->tubewell_facilities;
        self::$taxpayer->fiscal_period              = $request->fiscal_period;
        self::$taxpayer->effective_date             = $request->effective_date;

        if(isset($request->image)){
            self::$taxpayer->image = self::getImageUrl($request);
        }

        self::$taxpayer->mobile_number              = $request->mobile_number;
        self::$taxpayer->nid                        = $request->nid;
        self::$taxpayer->ward_no                    = $request->ward_no;
        self::$taxpayer->holding_no                 = $request->holding_no;
        self::$taxpayer->category                   = $request->category;
        self::$taxpayer->estimated_price            = $request->estimated_price;
        self::$taxpayer->plate_no                   = $request->plate_no;
        return self::$taxpayer->save();

    }

    public static function updateTaxpayer($request, $id){
        self::$taxpayer = Taxpayer::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$taxpayer->image))
            {
                unlink(self::$taxpayer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$taxpayer->image;
        }
        self::$taxpayer->house_name = $request->house_name;
        self::$taxpayer->house_owner = $request->house_owner;
        self::$taxpayer->father_name = $request->father_name;
        self::$taxpayer->mother_name = $request->mother_name;
        self::$taxpayer->profession = $request->profession;
        self::$taxpayer->road_name = $request->road_name;
        self::$taxpayer->present_address = $request->present_address;
        self::$taxpayer->land_quantity = $request->land_quantity;
        self::$taxpayer->non_taxable_part = $request->non_taxable_part;
        self::$taxpayer->men_number = $request->men_number;
        self::$taxpayer->women_number = $request->women_number;
        self::$taxpayer->other_number = $request->other_number;
        self::$taxpayer->child_number = $request->child_number;
        self::$taxpayer->disabled_number = $request->disabled_number;
        self::$taxpayer->employee_number = $request->employee_number;
        self::$taxpayer->unemployee_number = $request->unemployee_number;
        self::$taxpayer->govt_benefi_number = $request->govt_benefi_number;
        self::$taxpayer->hw_number = $request->hw_number;
        self::$taxpayer->water_connection_number = $request->water_connection_number;
        self::$taxpayer->connection_size = $request->connection_size;
        self::$taxpayer->subscribers_number = $request->subscribers_number;
        self::$taxpayer->sanitation_faicilities = $request->sanitation_faicilities;
        self::$taxpayer->tubewell_facilities = $request->tubewell_facilities;
        self::$taxpayer->fiscal_period = $request->fiscal_period;
        self::$taxpayer->effective_date = $request->effective_date;

        self::$taxpayer->image =  self::$imageUrl;

        self::$taxpayer->mobile_number = $request->mobile_number;
        self::$taxpayer->nid = $request->nid;
        self::$taxpayer->ward_no = $request->ward_no;
        self::$taxpayer->holding_no = $request->holding_no;
        self::$taxpayer->category = $request->category;
        self::$taxpayer->estimated_price = $request->estimated_price;
        self::$taxpayer->plate_no = $request->plate_no;
        return self::$taxpayer->save();

    }


    public static function updateHoldingStatus($id){
        self::$taxpayer = Taxpayer::find($id);
        if(self::$taxpayer->holding_plate_status == 0){
            self::$taxpayer->holding_plate_status = 1;
            self::$message = "হোল্ডিং প্লেট বিতরণ সফল হয়েছে";
        }
        else {
            self::$taxpayer->holding_plate_status = 0;
            self::$message = "হোল্ডিং প্লেট বিতরণ বাতিল হয়েছে";
        }
        self::$taxpayer->save();
        return self::$message;
    }









}
