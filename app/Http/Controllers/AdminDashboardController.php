<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use App\Models\Ward;
use Rakibhstu\Banglanumber\NumberToBangla;
use Illuminate\Http\Request;
use App\Http\Controllers\TaxpayController;
use App\Http\Controllers\WardController;

class AdminDashboardController extends Controller
{
    private $taxpayer;
    private $wards;
    private $numto;
    private $runningWards;
    private $disableWards;
    private $taxpayerNumber;
    private $holdingNumber;
    private $menNumber;
    private $womenNumber;
    private $otherNumber;
    private $totalPopulation;
    private $childNumber;
    private $disabledNumber;
    private $employeeNumber;
    private $unemployeeNumber;
    private $govtBenefiNumber;
    private $hwNumber;
    private $waterConnection;
    private $connectionSize;
    private $subscribersNumber;
    private $holdingPlateStatus;

    public function index(){
        $this->wards                = Ward::all();
        $this->numto                = new NumberToBangla();
        $this->runningWards         = Ward::where('status',1)->count();
        $this->disableWards         = Ward::where('status',0)->count();
//        $this->sum                = Ward::where('status',1)->sum('ward_no');
        $this->taxpayerNumber       = Taxpayer::all()->count();
        $this->holdingNumber        = Taxpayer::count('holding_no');
        $this->menNumber            = Taxpayer::sum('men_number');
        $this->womenNumber          = Taxpayer::sum('women_number');
        $this->otherNumber          = Taxpayer::sum('other_number');
        $this->childNumber          = Taxpayer::sum('child_number');
        $this->disabledNumber       = Taxpayer::sum('disabled_number');
        $this->employeeNumber       = Taxpayer::sum('employee_number');
        $this->unemployeeNumber     = Taxpayer::sum('unemployee_number');
        $this->govtBenefiNumber     = Taxpayer::sum('govt_benefi_number');
        $this->hwNumber             = Taxpayer::sum('hw_number');
        $this->waterConnection      = Taxpayer::sum('water_connection_number');
        $this->connectionSize       = Taxpayer::sum('connection_size');
        $this->subscribersNumber    = Taxpayer::sum('subscribers_number');
        $this->holdingPlateStatus   = Taxpayer::where('holding_plate_status',1)->count();
        $this->totalPopulation      = ($this->menNumber + $this->womenNumber + $this->otherNumber);

        return view('admin.dashboard.dashboard', [
            'wards'                 => $this->wards,
            'runningWards'          => $this->runningWards,
            'disableWards'          => $this->disableWards,
            'taxpayerNumber'        => $this->taxpayerNumber,
            'holdingNumber'         => $this->holdingNumber,
            'menNumber'             => $this->menNumber,
            'womenNumber'           => $this->womenNumber,
            'otherNumber'           => $this->otherNumber,
            'totalPopulation'       => $this->totalPopulation,
            'childNumber'           => $this->childNumber,
            'disabledNumber'        => $this->disabledNumber,
            'employeeNumber'        => $this->employeeNumber,
            'unemployeeNumber'      => $this->unemployeeNumber,
            'govtBenefiNumber'      => $this->govtBenefiNumber,
            'hwNumber'              => $this->hwNumber,
            'waterConnection'       => $this->waterConnection,
            'connectionSize'        => $this->connectionSize,
            'subscribersNumber'     => $this->subscribersNumber,
            'numto'                 => $this->numto,
            'holdingPlateStatus'    => $this->holdingPlateStatus,
            ]);
    }


}
