<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class SearchTaxpayerController extends Controller
{
    //

    private $taxpayers;
    private $search;
    private $numto;


    public function search(Request $request){
        $this->search = $request->search;
        $this->taxpayers = Taxpayer::where('mobile_number',$this->search)->orwhere('nid',$this->search)->orwhere('holding_no',$this->search)->first();
        $this->numto = new NumberToBangla();
        return  view('admin.taxpayer.search', ['taxpayers' => $this->taxpayers, 'search' => $this->search, 'numto' => $this->numto]);
    }


}
