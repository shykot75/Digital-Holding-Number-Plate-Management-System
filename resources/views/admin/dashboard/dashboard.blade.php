@extends('master.new-master')

@section('title')
    Administration Dashboard | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')
    <!-- start page title -->
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="page-title-box d-flex align-items-center justify-content-between">--}}
{{--                <h4 class="mb-0 font-size-18">Dashboard</h4>--}}

{{--                <div class="page-title-right">--}}
{{--                    <ol class="breadcrumb m-0">--}}
{{--                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>--}}
{{--                        <li class="breadcrumb-item active">Dashboard</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end page title -->
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #237AD5; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body" >
                                    <p class=" font-weight-medium font-size-24"> <a href="{{route('ward.manage')}}" class="text-white">মোট ওয়ার্ড</a> </p>
                                    @foreach($wards as $ward)
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{$numto->bnNum($loop->count) }}</h4>
                                        @break
                                    @endforeach
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #27ae60; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-24"> <a href="" class="text-white">চলমান ওয়ার্ড</a> </p>
                                        <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($runningWards)  }}</h4>
                                </div>
                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #C65714; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-24"><a href="" class="text-white">নিষ্ক্রিয় ওয়ার্ড</a></p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($disableWards) }}</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #8e44ad; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-24"> <a href="{{route('taxpayer.manage')}}" class="text-white">ট্যাক্সদাতা</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($taxpayerNumber) }}</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3" >
                    <div class="card mini-stats-wid " style="min-height: 160px; background: #c0392bf0; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-24">হোল্ডিং সংখ্যা</p>
                                        <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($holdingNumber) }}</h4>

                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="min-height: 130px; background: #c0392bf0; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="font-weight-medium font-size-24 text-white">মোট জনসংখ্যাঃ {{ $numto->bnNum($totalPopulation) }}</h4>
                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">পুরুষঃ {{$numto->bnNum($menNumber)}}</p>
                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">মহিলাঃ {{$numto->bnNum($womenNumber)}}</p>
                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">অন্যান্যঃ {{$numto->bnNum($otherNumber)}}</p>

                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mini-stats-wid" style="min-height: 130px; background: #c0392bf0; color: #FFF;">
                        <div class="card-body">
                            <h4 class="font-weight-medium font-size-24 text-white text-center">জনসংখ্যার বিবরণঃ </h4>
                            <div class="media">
                                <div class="media-body col-md-6">
                                        <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">শিশুঃ {{ $numto->bnNum($childNumber) }}</p>
                                        <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">প্রতিবন্ধীঃ {{$numto->bnNum($disabledNumber)}}</p>
                                        <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">কর্মজীবীঃ {{$numto->bnNum($employeeNumber)}}</p>
                                </div>
                                <div class="media-body col-md-6">

                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">কর্মহীনঃ {{$numto->bnNum($unemployeeNumber)}}</p>
                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">সরকারি সুবিধাভোগীঃ {{$numto->bnNum($govtBenefiNumber)}}</p>
                                    <p class="mb-0 mt-0 text-white font-weight-medium font-size-18">গৃহিণী/অন্যান্যঃ {{$numto->bnNum($hwNumber)}}</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #237AD5; color: #FFF; min-height: 145px;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body" >
                                    <p class=" font-weight-medium font-size-20">পানির সংযোগ সংখ্যা</p>
                                        <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{$numto->bnNum($waterConnection) }}</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #27ae60; color: #FFF; min-height: 145px;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20">সাইজ সংখ্যা</p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($connectionSize)  }}</h4>
                                </div>
                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #C65714; color: #FFF; min-height: 145px;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20">গ্রাহক সংখ্যা/পরিবার সংখ্যা</p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($subscribersNumber) }}</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #192a56; color: #FFF; min-height: 145px;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"> <a href="{{route('taxpayer.holdingPlate')}}" class="text-white">হোল্ডিং প্লেট বিতরণ</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($holdingPlateStatus) }}</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>



@endsection
