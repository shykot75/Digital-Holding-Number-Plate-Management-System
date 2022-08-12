<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use App\Models\Ward;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class WardController extends Controller
{
    //

    private $ward;
    private $wards;
    private $numto;
    private $message;

    public function index(){
        return view('admin.ward.add');
    }

    public function create(Request $request){
        $this->ward = Ward::newWard($request);
        return redirect('/add-ward')->with('message', 'নতুন ওয়ার্ড তালিকা সঠিকভাবে সংযোজিত হয়েছে!!');
    }

    public function manage(){
        $this->wards = Ward::all();
        $this->numto = new NumberToBangla();
        return view('admin.ward.another-manage', ['wards' => $this->wards, 'numto' => $this->numto]);
    }

    public function edit($id){
        $this->ward = Ward::find($id);
        return view('admin.ward.edit', ['ward' => $this->ward]);
    }

    public function update(Request $request, $id){
        $this->ward = Ward::updateWard($request, $id);
        return redirect('/manage-ward')->with('message', 'ওয়ার্ডের তথ্য সঠিকভাবে সম্পাদন হয়েছে!!');
    }

    public function updateStatus($id){
        $this->message = Ward::updateWardStatus($id);
        return redirect()->back()->with('message', $this->message);
    }

    public function delete($id){
        $this->ward = Ward::find($id);
        $this->ward->delete();
        return redirect('/manage-ward')->with('message', 'ওয়ার্ডের তথ্য সঠিকভাবে মুছেফেলা হয়েছে!!');
    }

    public function wardTaxpayer($wardNo){
        $this->taxpayers = Taxpayer::select('id', 'house_name', 'house_owner', 'holding_no', 'road_name', 'mobile_number', 'nid', 'ward_no', 'plate_no')
            ->where('ward_no',$wardNo)->get();
        $this->numto = new NumberToBangla();
        return view('admin.ward.ward-taxpayer', ['taxpayers' => $this->taxpayers, 'numto' => $this->numto]);
    }





}
