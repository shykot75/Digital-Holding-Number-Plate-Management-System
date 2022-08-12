<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>করদাতার তথ্য | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম</title>

    <!-- Font Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css-->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <section class="py-2">
        <div class="qr-details col-md-6 mx-auto">
            <div class="img mx-auto">
                <img src="{{asset('/')}}img/logo.jpeg" alt="logo" class="d-block img-responsive text-center mx-auto" height="120" width="120">
            </div>

            <div class="card-title"><h3 class="text-center text-dark py-3">করদাতার তথ্য</h3></div>
            <div class="card-body col-md-11 mx-auto ">
                <table class="table thead-border-top-1 table table-hover">
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
                        <td>পুরুষঃ {{ $numto->bnNum($taxpayer->men_number) }} , মহিলাঃ {{ $numto->bnNum($taxpayer->women_number) }} , অন্যান্যঃ  {{ $taxpayer->other_number == null ? '0' : $numto->bnNum($taxpayer->other_number) }} [মোট = {{ $numto->bnNum($taxpayer->men_number + $taxpayer->women_number + $taxpayer->other_number)  }}]
                        </td>
                    </tr>

                    <tr>
                        <th>মোবাইলঃ</th>
                        <td>{{ $numto->bnNUm($taxpayer->mobile_number) }}</td>
                    </tr>

                    <tr>
                        <th>জাতীয় পরিচয় পত্রের নাম্বারঃ</th>
                        <td>{{$taxpayer->nid}}</td>
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
{{--                        <td>{{$taxpayer->category == 1 ? 'সরকারি প্রতিষ্ঠান' ? $taxpayer->category == 2 ? 'বেসরকারি প্রতিষ্ঠান' ? $taxpayer->category == 3 ? 'দাতব্য প্রতিষ্ঠান' ? $taxpayer->category == 4 ? 'আবাসিক' ? $taxpayer->category == 5 ? 'বাণিজ্যিক' ? $taxpayer->category == 6 ? 'মিশ্র প্রতিষ্ঠান' : '' }}</td>--}}
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


























<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>
</body>
</html>
