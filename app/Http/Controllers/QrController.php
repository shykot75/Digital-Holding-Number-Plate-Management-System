<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class QrController extends Controller
{
    //

    private $taxpayer;
    private $numto;

    public function qrGenerate($id){
        $this->taxpayer = Taxpayer::find($id);
        $this->numto = new NumberToBangla();
        return view('qr.qr-details', ['taxpayer' => $this->taxpayer, 'numto' => $this->numto]);
    }





}
