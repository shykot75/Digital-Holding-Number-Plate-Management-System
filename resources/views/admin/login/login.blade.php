<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম" name="description" />
    <meta content="লক্ষ্মীপুর পৌরসভা" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}img/vs_logo.png">

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


<section class="first">
        <div class="writing-side col-md-8 col-sm-6 m-0 p-0">
            <div class="logo-headline">
                <div class="container">
                     <img src="{{asset('/')}}img/vs_logo.png" alt="logo" style="float: left; padding: 10px; width: 130px;" class="img-responsive">
                     <span class="mt-3 font-size-20">ডিজিটাল হোল্ডিং নাম্বার প্লেট সফটওয়্যার সিস্টেম <br>লক্ষ্মীপুর পৌরসভা</span>
                </div>
            </div>
            <div class="meyor-lekha">
                <div class="container">
                    <img src="{{asset('/')}}img/meyor.jpg" alt="logo" style="float: left; padding: 10px; width: 120px;" class="img-responsive">
                    <span><b style="line-height: 2;"> লক্ষ্মীপুর পৌরসভার মেয়রের কথা </b> <br>
                        <br>
                       লক্ষ্মীপুর পৌরসভার তথ্য-প্রযুক্তির সুবিধাকে জনগণের দোরগোড়ায় পৌঁছে দেবার মানসে দেশের প্রথম ” ডিজিটাল হোল্ডিং নাম্বার প্লেট প্রকল্প “ চালু করেছে জেনে আমি আনন্দিত । সরকারের ‘ভিশন-২০২১’ বাস্তবায়নের অন্যতম অঙ্গীকার ছিল সেবা খাতে ডিজিটাইজেশন । এই প্রকল্পটি গ্রহণ ও যথাযথ ব্যবহারের ফলে পৌরসভার হোল্ডিং ট্যাক্সদাতাগণ ঘরে বসেই তার মোবাইলে ফোনে এসএমএস এর মাধ্যমে হোল্ডিং তথ্য ও ডিজিটাল নাম্বারর প্লেট সম্পর্কে জানতে পারবেন পারবেন । শুধু তাই নয় পৌরসভা কর্তৃপক্ষ এ অনলাইন প্লাটফরম থেকে নাগরিকদের বিভিন্ন সেবা কার্যক্রম এসএমএস এর মাধ্যমে অবগত করতে পারবেন । সেবা প্রত্যাশী নাগরিকগণ সরাসরি এর সুফল পাবেন । কাজেই পৌরসভার নাগরিক ও পৌরসভার মধ্যে সেতুবন্ধনের ভিত আরো মজবুত হবে বলে প্রত্যাশা করি।তাই এই অনলাইন বেইজ এপ্লিকেশনটি সারাদেশে ছড়িয়ে দেয়ার জন্য যারা কাজ করছেন এবং যে সকল সিটি কর্পোরেশন ও পৌরসভা “ ডিজিটাল হোল্ডিং নাম্বার প্লেট প্রকল্প” টি গ্রহণ করে মাননীয় প্রধানমন্ত্রীর ডিজিটাল বাংলাদেশ গড়ার কাজে সহায়তা করছেন তাদের সকলকে শুভেচ্ছা জ্ঞাপন করছি। পরিশেষে এই প্রয়াসের সাথে সম্পৃক্ত সকলকে আমার আন্তরিক অভিনন্দন ও ধন্যবাদ জ্ঞাপন করছি।
                    <br>
                    <br>
                    মোজাম্মেল হায়দার মাসুম ভূঁইয়া
                    <br>
                    মেয়র
                    <br>
                    লক্ষ্মীপুর পৌরসভা
                    </span>
                </div>
            </div>
        </div>



    <div class="login-side col-md-4 col-sm-6" style="font-family: Arial, sans-serif;">
        <div class="welcome">
            <div class="container">
                <h3>Welcome To</h3>
                <p>Digital Holding Number Plate software System</p>
            </div>
        </div>

        <div class="login-form">
            <div class="container">
                <h3 class="py-2">Sign In</h3>

                <x-jet-validation-errors class="mb-4" />


{{--                @if (session('status'))--}}

{{--                    <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                        {{ session('status') }}--}}
{{--                    </div>--}}
{{--                @endif--}}

                <form class="form-horizontal" action="{{route('login')}}" method="POST">
                    @csrf


                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" :value="old('email')" class="form-control" id="email" placeholder="Enter Email" required />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                        <label class="custom-control-label" for="remember_me">Remember me</label>

                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                    </div>
                </form>

                <p class="copyright font-size-14">Digital Holding Number Plate project © All Right Reserved.</p>


            </div>
        </div>
    </div>













</section>

























<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>
</body>


</html>

