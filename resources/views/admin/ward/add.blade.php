@extends('master.new-master')

@section('title')
    ওয়ার্ড সংরক্ষন | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')

    <section class="tax-add px-3" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="bg-primary text-white py-2 px-3 mb-4">ওয়ার্ড সংরক্ষন করুন</h5>
                    <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>
                    <form action="{{route('ward.new')}}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-10 " >

                                <div class="form-group row mb-4">
                                    <label for="ward_name" class="col-md-3 col-form-label">ওয়ার্ড নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-11">বাংলায় লিখুন, <span class="text-danger">উদাঃ লক্ষ্মীপুর পৌরসভা-০১</span></span>
                                        <input type="text" name="ward_name" class="form-control" id="ward_name" placeholder="ওয়ার্ড নাম" required>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="ward_no" class="col-md-3 col-form-label">ওয়ার্ড নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" name="ward_no" min="1" class="form-control" id="ward_no" placeholder="ওয়ার্ড নং" required>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md font-weight-bold" style="letter-spacing: 2px;">সংরক্ষন করুন</button>
                                        </div>
                                    </div>
                                </div>


                            </div>





                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection





