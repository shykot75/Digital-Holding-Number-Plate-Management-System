<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use App\Models\Ward;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;


class TaxpayController extends Controller
{
    private $taxpayer;
    private $taxpayers;
    private $numto;
    private $wards;
    private $message;

    public function index(){
        $this->wards = Ward::where('status',1)->get();
        return view('admin.taxpayer.add', ['wards' => $this->wards]);
    }

    public function create(Request $request){
        $this->taxpayer = Taxpayer::newTaxpayer($request);
        return redirect('/add-taxpayer')->with('message', 'নতুন ট্যাক্সদাতার তালিকা সঠিকভাবে সংযোজিত হয়েছে!!');
    }

    public function manage(){
//        $this->taxpayers = Taxpayer::all();
        $this->taxpayers = Taxpayer::select('id', 'house_name', 'house_owner', 'holding_no', 'road_name', 'holding_plate_status', 'ward_no')->get();
        $this->numto = new NumberToBangla();
        return view('admin.taxpayer.another-manage', ['taxpayers' => $this->taxpayers, 'numto' => $this->numto]);
    }

    public function updateStatus($id){
        $this->message = Taxpayer::updateHoldingStatus($id);
        return redirect('/manage-taxpayer')->with('message', $this->message);
    }

    public function show($id){
        $this->taxpayer = Taxpayer::find($id);
        $this->numto = new NumberToBangla();
        return view('admin.taxpayer.show', ['taxpayer' => $this->taxpayer, 'numto' => $this->numto]);
    }

    public function edit($id){
        $this->taxpayer = Taxpayer::find($id);
        $this->wards = Ward::where('status',1)->get();
        $this->numto = new NumberToBangla();
        return view('admin.taxpayer.edit', ['taxpayer' => $this->taxpayer, 'wards' => $this->wards, 'numto' => $this->numto]);
    }

    public function update(Request $request, $id){
        $this->taxpayer = Taxpayer::updateTaxpayer($request, $id);
        return redirect('/manage-taxpayer')->with('message', 'ট্যাক্সদাতার তথ্য সঠিকভাবে সম্পাদন হয়েছে!!');

    }

    public function delete($id){
        $this->taxpayer = Taxpayer::find($id);
        if (file_exists($this->taxpayer->image))
        {
            unlink($this->taxpayer->image);
        }
        $this->taxpayer->delete();
        return redirect('/manage-taxpayer')->with('message', 'ট্যাক্সদাতার তথ্য সঠিকভাবে মুছেফেলা হয়েছে!!');
    }


    public function holding(){
        $this->taxpayers = Taxpayer::select('id', 'house_name', 'house_owner', 'holding_no', 'road_name', 'mobile_number', 'nid', 'ward_no', 'plate_no')
            ->where('holding_plate_status',1)->get();
        $this->numto = new NumberToBangla();
        return view('admin.taxpayer.holding-plate-taxpayers', ['taxpayers' => $this->taxpayers, 'numto' => $this->numto]);
    }













}
