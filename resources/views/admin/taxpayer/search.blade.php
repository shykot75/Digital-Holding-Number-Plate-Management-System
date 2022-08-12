@extends('master.new-master')

@section('title')
    ট্যাক্সদাতা সন্ধান | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
@endsection


@section('body')


    <section class="tax-search px-3" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="bg-primary text-white py-2 px-3 mb-4">ট্যাক্সদাতার সন্ধান করুন</h5>
                    <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>
                    <form action="{{route('taxpayer.search')}}" method="GET">

                        <div class="row">

                            <div class="col-md-12 " >

                                <div class="form-group row mb-4">
                                    <label for="tax_search" class="col-md-3 col-form-label">ট্যাক্সদাতা সার্চ</label>
                                    <div class="col-md-9">
                                        <input type="text" name="search" class="form-control" id="tax_search" placeholder="Example: ট্যাক্সদাতার জাতীয় পরিচয় পত্রের নম্বর / হোল্ডিং নম্বর /মোবাইল নাম্বার" required value="{{$search}}">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md font-weight-bold" style="letter-spacing: 2px;">সন্ধান করুন</button>
                                        </div>
                                    </div>
                                </div>


                            </div>





                        </div>


                    </form>



                    @if($taxpayers)



                    <div class="row col-md-8 mx-auto search-border-1">

                        <div class="col-md-6 text-left mx-left py-2">
                            <img src="{{asset('/')}}img/logo.jpeg" alt="logo" class="img-responsive mx-left text-left " height="150" width="150">
                        </div>
                        <div class="col-md-6 text-right mx-right py-2">
                            <img class="mx-right text-right " src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(150)->generate(url('').'/lpps/qr-code/'.$taxpayers->id) ) }}" alt="qr-code">
                        </div>
                    </div>

                    <div class="row col-md-8 mx-auto search-border-2">

                        <h3 class="text-center text-success py-3 mx-auto">করদাতার তথ্য</h3>

                        <table class="table thead-border-top-1 table table-hover mx-auto ">
                            <tr>
                                <th>বাড়ির নামঃ</th>
                                <td>{{$taxpayers->house_name}}</td>
                            </tr>

                            <tr>
                                <th>মালিক/ভোগ দখলকারীর নামঃ</th>
                                <td>{{$taxpayers->house_owner}}</td>
                            </tr>

                            <tr>
                                <th>পিতা/স্বামীর নামঃ</th>
                                <td>{{$taxpayers->father_name}}</td>
                            </tr>

                            <tr>
                                <th>মাতার নামঃ</th>
                                <td>{{$taxpayers->mother_name}}</td>
                            </tr>

                            <tr>
                                <th>পরিবারের সদস্য সংখ্যাঃ</th>
                                <td >পুরুষঃ {{ $numto->bnNum($taxpayers->men_number) }} , মহিলাঃ {{ $numto->bnNum($taxpayers->women_number) }} , অন্যান্যঃ  {{ $taxpayers->other_number == null ? '0' : $numto->bnNum($taxpayers->other_number) }} [মোট = {{ $numto->bnNum($taxpayers->men_number + $taxpayers->women_number + $taxpayers->other_number)  }}]
                                </td>
                            </tr>

                            <tr>
                                <th>মোবাইলঃ</th>
                                <td>{{ $numto->bnNUm($taxpayers->mobile_number) }}</td>
                            </tr>

                            <tr>
                                <th>জাতীয় পরিচয় পত্রের নাম্বারঃ</th>
                                <td>{{ $taxpayers->nid}}</td>
                            </tr>

                            <tr>
                                <th>ওয়ার্ড নংঃ</th>
                                <td>{{ $numto->bnNUm($taxpayers->ward_no) }}</td>
                            </tr>

                            <tr>
                                <th>রাস্তা/মহল্লাঃ</th>
                                <td>{{$taxpayers->road_name}}</td>
                            </tr>

                            <tr>
                                <th>কাযকারিতার বছরঃ</th>
                                <td>{{$taxpayers->fiscal_period }}</td>
                            </tr>

                            <tr>
                                <th>কাযকরের তারিখঃ</th>
                                <td>{{ $taxpayers->effective_date }}</td>
                            </tr>

                            <tr>
                                <th>ট্যাক্সদাতার ধরণঃ</th>

                                <td>
                                    @if($taxpayers->category == 1)
                                        সরকারি প্রতিষ্ঠান
                                    @elseif($taxpayers->category == 2)
                                        বেসরকারি প্রতিষ্ঠান
                                    @elseif($taxpayers->category == 3)
                                        দাতব্য প্রতিষ্ঠান
                                    @elseif($taxpayers->category == 4)
                                        আবাসিক
                                    @elseif($taxpayers->category == 5)
                                        বাণিজ্যিক
                                    @elseif($taxpayers->category == 6)
                                        িশ্র প্রতিষ্ঠান
                                    @else
                                        উল্লেখ্য নেই
                                    @endif

                                </td>
                            </tr>

                            <tr>
                                <th>হোল্ডিং নাম্বারঃ</th>
                                <td>{{ $taxpayers->holding_no}}</td>
                            </tr>

                            <tr>
                                <th>পানির সংযোগঃ</th>
                                <td>সংখাঃ {{ $taxpayers->water_connection_number == null ? '0' : $numto->bnNum($taxpayers->water_connection_number) }} , সাইজঃ {{ $taxpayers->connection_size == null ? '0' : $numto->bnNum($taxpayers->connection_size) }} , পরিবার সংখাঃ {{ $taxpayers->subscribers_number == null ? '0' : $numto->bnNum($taxpayers->subscribers_number) }}</td>
                            </tr>

                            <tr>
                                <th>প্লেট নংঃ</th>
                                <td>{{ $taxpayers->plate_no }}</td>
                            </tr>

                            <tr>
                                <th>ইমারত/ভবনের ধরন/জমির পরিমানঃ</th>
                                <td>{{ $taxpayers->land_quantity == null ? ' ' : $taxpayers->land_quantity}}</td>
                            </tr>
                        </table>
                    </div>

                    @endif















                </div>
            </div>
        </div>
    </section>






@endsection
