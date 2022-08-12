@extends('master.new-master')

@section('title')
    করদাতার তথ্য | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')

    <section class="show-details py-2">
        <div class="container-fluid">
            <div class="row col-md-8 mx-auto ">

                <div class="col-md-10 text-left mb-3 bg-info pt-3"><h4 class="text-white font-weight-bold">  ট্যাক্সদাতার তথ্য</h4></div>
                <div class="col-md-2 text-right mb-3 py-2 bg-primary"> <button class="btn btn-primary btn-lg font-size-20" onclick="window.print()">Print</button>  </div>

                <div class="col-md-6 text-left mx-left py-2">
                    <img src="{{asset('/')}}img/logo.jpeg" alt="logo" class="img-responsive mx-left text-left " height="150" width="150">
                </div>
                <div class="col-md-6 text-right mx-right py-2">
                    <img class="mx-right text-right " src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(150)->generate(url('').'/lpps/qr-code/'.$taxpayer->id) ) }}" alt="qr-code">
                </div>
            </div>

            <div class="row col-md-8 mx-auto">

               <h3 class="text-center text-success py-3 mx-auto">করদাতার তথ্য</h3>

                    <table class="table thead-border-top-1 table table-hover mx-auto ">
                        <tr>
                            <th>বাড়ির নামঃ</th>
                            <td>{{$taxpayer->house_name}}</td>
                        </tr>

                        <tr>
                            <th>মালিক/ভোগ দখলকারীর নামঃ</th>
                            <td>{{$taxpayer->house_owner}}</td>
                        </tr>

                        <tr>
                            <th>পিতা/স্বামীর নামঃ</th>
                            <td>{{$taxpayer->father_name}}</td>
                        </tr>

                        <tr>
                            <th>মাতার নামঃ</th>
                            <td>{{$taxpayer->mother_name}}</td>
                        </tr>

                        <tr>
                            <th>পরিবারের সদস্য সংখ্যাঃ</th>
                            <td >পুরুষঃ {{ $numto->bnNum($taxpayer->men_number) }} , মহিলাঃ {{ $numto->bnNum($taxpayer->women_number) }} , অন্যান্যঃ  {{ $taxpayer->other_number == null ? '0' : $numto->bnNum($taxpayer->other_number) }} [মোট = {{ $numto->bnNum($taxpayer->men_number + $taxpayer->women_number + $taxpayer->other_number)  }}]
                            </td>
                        </tr>

                        <tr>
                            <th>মোবাইলঃ</th>
                            <td>{{ $numto->bnNUm($taxpayer->mobile_number) }}</td>
                        </tr>

                        <tr>
                            <th>জাতীয় পরিচয় পত্রের নাম্বারঃ</th>
                            <td>{{ $taxpayer->nid}}</td>
                        </tr>

                        <tr>
                            <th>ওয়ার্ড নংঃ</th>
                            <td>{{ $numto->bnNUm($taxpayer->ward_no) }}</td>
                        </tr>

                        <tr>
                            <th>রাস্তা/মহল্লাঃ</th>
                            <td>{{$taxpayer->road_name}}</td>
                        </tr>

                        <tr>
                            <th>কাযকারিতার বছরঃ</th>
                            <td>{{$taxpayer->fiscal_period }}</td>
                        </tr>

                        <tr>
                            <th>কাযকরের তারিখঃ</th>
                            <td>{{ $taxpayer->effective_date }}</td>
                        </tr>

                        <tr>
                            <th>ট্যাক্সদাতার ধরণঃ</th>

                            <td>
                                @if($taxpayer->category == 1)
                                    সরকারি প্রতিষ্ঠান
                                @elseif($taxpayer->category == 2)
                                    বেসরকারি প্রতিষ্ঠান
                                @elseif($taxpayer->category == 3)
                                    দাতব্য প্রতিষ্ঠান
                                @elseif($taxpayer->category == 4)
                                    আবাসিক
                                @elseif($taxpayer->category == 5)
                                    বাণিজ্যিক
                                @elseif($taxpayer->category == 6)
                                    িশ্র প্রতিষ্ঠান
                                @else
                                    উল্লেখ্য নেই
                                @endif

                            </td>
                        </tr>

                        <tr>
                            <th>হোল্ডিং নাম্বারঃ</th>
                            <td>{{ $taxpayer->holding_no}}</td>
                        </tr>

                        <tr>
                            <th>পানির সংযোগঃ</th>
                            <td>সংখাঃ {{ $taxpayer->water_connection_number == null ? '0' : $numto->bnNum($taxpayer->water_connection_number) }} , সাইজঃ {{ $taxpayer->connection_size == null ? '0' : $numto->bnNum($taxpayer->connection_size) }} , পরিবার সংখাঃ {{ $taxpayer->subscribers_number == null ? '0' : $numto->bnNum($taxpayer->subscribers_number) }}</td>
                        </tr>

                        <tr>
                            <th>প্লেট নংঃ</th>
                            <td>{{ $taxpayer->plate_no }}</td>
                        </tr>

                        <tr>
                            <th>ইমারত/ভবনের ধরন/জমির পরিমানঃ</th>
                            <td>{{ $taxpayer->land_quantity == null ? ' ' : $taxpayer->land_quantity}}</td>
                        </tr>
                    </table>
            </div>
        </div>
    </section>

@endsection
