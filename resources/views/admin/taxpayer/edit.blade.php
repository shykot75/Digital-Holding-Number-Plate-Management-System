@extends('master.new-master')

@section('title')
    টাক্সদাতা সম্পাদনা | ডিজিটাল হোল্ডিং নাম্বার প্লেট সফটওয়্যার সিস্টেম
@endsection

@section('body')

    <section class="tax-add px-3" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="bg-primary text-white py-2 px-3 mb-4">টাক্সদাতা সম্পাদন করুন</h5>
                    <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>
                    <h6>বিশেষ দ্রষ্টব্যঃ <span class="text-danger mb-2">ডিজিটগুলো সর্বদাই ইংরেজীতে লিখতে হবে।</span></h6>
                    <form action="{{route('taxpayer.update', ['id' => $taxpayer->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <!---- first-half starts---->
                            <div class="col-md-6 first-half" >

                                <div class="form-group row mb-4">
                                    <label for="house_name" class="col-md-3 col-form-label">বাড়ির নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="house_name" class="form-control" id="house_name" placeholder="বাড়ির নাম" required value="{{$taxpayer->house_name}}">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="house_owner" class="col-md-3 col-form-label">মালিক/ভোগ দখলকারীর নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="house_owner" class="form-control" id="house_owner" placeholder="হোল্ডিং মালিকের নাম" required value="{{$taxpayer->house_owner}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="father_name" class="col-md-3 col-form-label">পিতা/স্বামীর নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="পিতা/স্বামীর নাম" required value="{{$taxpayer->father_name}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="mother_name" class="col-md-3 col-form-label">মাতার নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="মাতার নাম" required value="{{$taxpayer->mother_name}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="profession" class="col-md-3 col-form-label">পেশা</label>
                                    <div class="col-md-9">
                                        <input type="text" name="profession" class="form-control" id="profession" placeholder="পেশা" value="{{$taxpayer->profession}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="road_name" class="col-md-3 col-form-label">রাস্তার/মহল্লার নাম</label>
                                    <div class="col-md-9">
                                        <input type="text" name="road_name" class="form-control" id="road_name" placeholder="রাস্তার/মহল্লার নাম" value="{{$taxpayer->road_name}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="present_address" class="col-md-3 col-form-label">বর্তমান ঠিকানা</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="present_address" class="form-control" id="present_address" placeholder="বর্তমান ঠিকানা">{{$taxpayer->present_address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="land_quantity" class="col-md-3 col-form-label">ইমারত/ভবনের ধরণ/জমির পরিমান</label>
                                    <div class="col-md-9">
                                        <span class="font-size-10">বাংলায় লিখুন, <span class="text-danger">উদাঃ ৫তলা/সেমিপাকা/১৪ শতাংশ</span></span>
                                        <textarea type="text" name="land_quantity" class="form-control" id="land_quantity" placeholder="ইমারত/ভবনের ধরণ/জমির পরিমান">{{$taxpayer->land_quantity}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="non_taxable_part" class="col-md-3 col-form-label">ট্যাক্স অযোগ্য অংশ (যদি থাকে) ও কারণ</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="non_taxable_part" class="form-control" id="non_taxable_part" placeholder="ট্যাক্স অযোগ্য অংশ (যদি থাকে) ও কারণ">{{$taxpayer->non_taxable_part}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="non_taxable_part" class="col-md-3 col-form-label">পরিবারের সদস্য সংখ্যা<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="men_number" class="col-md-2 col-form-label">পুরুষ:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="men_number" id="men_number" class="form-control f-number boy-number family-member" required value="{{$taxpayer->men_number}}">
                                            </div>
                                            <label for="" class="col-md-2 col-form-label">(+)</label>

                                            <label for="women_number" class="col-md-2 col-form-label">মহিলা:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="women_number" id="women_number" class="form-control f-number girl-number family-member" required value="{{$taxpayer->women_number}}">
                                            </div>
                                        </div>
                                    </div>

                                    <label for="non_taxable_part" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="other_number" class="col-md-2 col-form-label">অন্যান্য:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="other_number" id="other_number" class="form-control f-number other-number family-member" value="{{$taxpayer->other_number}}">
                                            </div>
                                            <label for="" class="col-md-2 col-form-label">(=)</label>

                                            <label for="" class="col-md-2 col-form-label">মোট সদস্য:</label>
                                            <div class="col-md-3">
                                                {{--                                                 <input type="text" min="0" id="f-total" class="form-control bg-soft-secondary"  readonly>--}}
                                                <output min="0" id="f-total" class="form-control bg-soft-secondary total-member" >{{$taxpayer->men_number + $taxpayer->women_number + $taxpayer->other_number}}</output>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group row mb-4">
                                    <label for="non_taxable_part" class="col-md-3 col-form-label">পরিবারের সদস্যের বিবরণ</label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="child_number" class="col-md-2 col-form-label">শিশু:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="child_number" id="child_number" class="form-control fd-number child-number member-desc" value="{{$taxpayer->child_number}}">
                                            </div>
                                            <label for="" class="col-md-2 col-form-label">(+)</label>

                                            <label for="disabled_number" class="col-md-2 col-form-label">প্রতিবন্ধী:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="disabled_number" id="disabled_number" class="form-control fd-number disabled-number member-desc" value="{{$taxpayer->disabled_number}}">
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="employee_number" class="col-md-2 col-form-label">কর্মজীবী:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="employee_number" id="employee_number" class="form-control fd-number employee-number member-desc" value="{{$taxpayer->employee_number}}">
                                            </div>
                                            <label for="" class="col-md-2 col-form-label">(+)</label>

                                            <label for="unemployee_number" class="col-md-2 col-form-label">কর্মহীন:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="unemployee_number" id="unemployee_number" class="form-control fd-number unemployed-number member-desc" value="{{$taxpayer->unemployee_number}}">
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="govt_benefi_number" class="col-md-2 col-form-label">সরকারি সুবিধাভোগী:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="govt_benefi_number" id="govt_benefi_number" class="form-control fd-number govt-benefi-number member-desc" value="{{$taxpayer->govt_benefi_number}}">
                                            </div>
                                            <label for="" class="col-md-2 col-form-label">(+)</label>

                                            <label for="hw_number" class="col-md-2 col-form-label">গৃহিণী/অন্যান্য:</label>
                                            <div class="col-md-3">
                                                <input type="number" min="0" name="hw_number" id="hw_number" class="form-control fd-number others member-desc" value="{{$taxpayer->hw_number}}">
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="" class="col-md-4 col-form-label">মোট সদস্য সংখ্যা:</label>
                                            <label for="" class="col-md-1 col-form-label">(=)</label>
                                            <div class="col-md-7">
                                                {{--                                                 <input type="number" min="0"  id="" class="form-control bg-soft-secondary  " readonly>--}}
                                                <output min="0" id="fd-total" class="form-control bg-soft-secondary total-member-desc" >{{ $taxpayer->child_number + $taxpayer->disabled_number + $taxpayer->employee_number + $taxpayer->unemployee_number + $taxpayer->govt_benefi_number + $taxpayer->hw_number}}</output>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---- first-half ends---->


                            <!---- second-half starts---->


                            <div class="col-md-6 second-half">
                                <div class="form-group row mb-4">
                                    <label class="col-md-3 col-form-label">পানির সংযোগ</label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="water_connection_number" class="col-md-2 col-form-label">সংযোগ সংখ্যা:</label>
                                            <div class="col-md-4">
                                                <input type="number" name="water_connection_number" id="water_connection_number" class="form-control" value="{{$taxpayer->water_connection_number}}">
                                            </div>

                                            <label for="connection_size" class="col-md-2 col-form-label">সাইজ:</label>
                                            <div class="col-md-4">
                                                <input type="number" min="0" step=".1" name="connection_size" id="connection_size" class="form-control" value="{{$taxpayer->connection_size}}">
                                            </div>
                                        </div>
                                    </div>
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <div class="form-group row">
                                            <label for="subscribers_number" class="col-md-3 col-form-label">গ্রাহক সংখ্যা/পরিবার</label>
                                            <div class="col-md-9">
                                                <input type="number" name="subscribers_number" id="subscribers_number" class="form-control" value="{{$taxpayer->subscribers_number}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-md-5 col-form-label">স্যানিটেশন ব্যবস্থা আছে কি?</label>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <label for="sanitation_faicilitiesy" class="col-md-3 col-form-label">হ্যাঁ</label>
                                            <div class="col-md-2">
                                                <input type="radio" name="sanitation_faicilities" id="sanitation_faicilitiesy" class="form-control" value="1" {{$taxpayer->sanitation_faicilities == 1 ? 'checked' : ''}}>
                                            </div>

                                            <label for="" class="col-md-2 col-form-label"></label>

                                            <label for="sanitation_faicilitiesn" class="col-md-3 col-form-label">না</label>
                                            <div class="col-md-2">
                                                <input type="radio" name="sanitation_faicilities" id="sanitation_faicilitiesn" class="form-control" value="0" {{$taxpayer->sanitation_faicilities == 0 ? 'checked' : ''}}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-md-5 col-form-label">টিউবওয়েলের ব্যবস্থা আছে কি?</label>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <label for="tubewell_facilitiesy" class="col-md-3 col-form-label">হ্যাঁ</label>
                                            <div class="col-md-2">
                                                <input type="radio" name="tubewell_facilities" id="tubewell_facilitiesy" class="form-control" value="1" {{$taxpayer->tubewell_facilities == 1 ? 'checked' : ''}}>
                                            </div>

                                            <label for="" class="col-md-2 col-form-label"></label>

                                            <label for="tubewell_facilitiesn" class="col-md-3 col-form-label">না</label>
                                            <div class="col-md-2">
                                                <input type="radio" name="tubewell_facilities" id="tubewell_facilitiesn" class="form-control" value="0" {{$taxpayer->tubewell_facilities == 0 ? 'checked' : ''}}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="fiscal_period" class="col-md-3 col-form-label">কার্যকারিতার বছর<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-10">yyyy - yyyy</span>
                                        <input type="text" name="fiscal_period" class="form-control" id="fiscal_period" value="{{$taxpayer->fiscal_period}}" required >
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="effective_date" class="col-md-3 col-form-label">কার্যকরের তারিখ<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-10">d-m-y</span>
                                        <input type="text" name="effective_date" class="form-control" id="effective_date" value="{{$taxpayer->effective_date}}" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="image" class="col-md-3 col-form-label">ছবি</label>

                                    <div class="col-md-9">
                                        <img src="{{asset($taxpayer->image)}}" alt="" height="100" width="100" class="mb-2">
                                        <input type="file" name="image" class="form-control-file" accept="images/*" id="image">

                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="mobile_number" class="col-md-3 col-form-label">মোবাইল<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" max="99999999999" name="mobile_number" class="form-control" id="mobile_number"  required value="{{$taxpayer->mobile_number}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="nid" class="col-md-3 col-form-label">জাতীয় পরিচয় পত্র নম্বর<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" max="99999999999999999" name="nid" class="form-control" id="nid"  required value="{{$taxpayer->nid}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-md-3">ওয়ার্ড নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="ward_no" class="form-control " data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value="" disabled selected>ওয়ার্ড নং নির্বাচন করুন</option>
                                            @foreach($wards as $ward)
                                                <option value="{{$ward->ward_no}}"  {{$taxpayer->ward_no == $ward->ward_no ? 'selected' : ''}}>{{ $numto->bnNum($ward->ward_no) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="holding_no" class="col-md-3 col-form-label">হোল্ডিং নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-10">বাংলায় লিখুন, <span class="text-danger">উদাঃ ১৩৩/১</span></span>
                                        <input type="text" name="holding_no" class="form-control" id="holding_no" placeholder="হোল্ডিং নং" required value="{{$taxpayer->holding_no}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-md-3">ট্যাক্স দাতার ধরন</label>
                                    <div class="col-md-9">
                                        <select name="category" class="form-control " data-size="10" data-live-search="true" data-style="btn-white">
                                            <option value="" disabled selected>-বাছাই করুন-</option>
                                            <option value="4" {{$taxpayer->category == 4 ? 'selected' : ''}}>আবাসিক</option>
                                            <option value="5" {{$taxpayer->category == 5 ? 'selected' : ''}}>বাণিজ্যিক</option>
                                            <option value="1" {{$taxpayer->category == 1 ? 'selected' : ''}}>সরকারি প্রতিষ্ঠান</option>
                                            <option value="6" {{$taxpayer->category == 6 ? 'selected' : ''}}>মিশ্র প্রতিষ্ঠান</option>
                                            <option value="2" {{$taxpayer->category == 2 ? 'selected' : ''}}>বেসরকারি প্রতিষ্ঠান</option>
                                            <option value="3" {{$taxpayer->category == 3 ? 'selected' : ''}}>দাতব্য প্রতিষ্ঠান</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="estimated_price" class="col-md-3 col-form-label">আনুমানিক গৃহের মূল্য</label>
                                    <div class="col-md-9">
                                        <input type="number" name="estimated_price" class="form-control" id="estimated_price" placeholder="আনুমানিক গৃহের মূল্য" value="{{$taxpayer->estimated_price}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="plate_no" class="col-md-3 col-form-label">প্লেট নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-10">বাংলায় লিখুন, <span class="text-danger">উদাঃ ৫৩৪</span></span>
                                        <input type="text" name="plate_no" class="form-control" id="plate_no" placeholder="প্লেট নং" required value="{{$taxpayer->plate_no}}">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md font-weight-bold" style="letter-spacing: 2px;">সম্পাদন করুন</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!---- second-end ends---->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





    <script src="{{asset('/')}}js/jquery.min.js"></script>
    <script>
        // $('.form-group').on('input','.f-number',function(){
        //     var totalFsum = 0;
        //     $('.form-group .f-number').each(function(){
        //         var inputVal = $(this).val();
        //         if($.isNumeric(inputVal)){
        //             totalFsum += parseFloat(inputVal);
        //         }
        //     });
        //     $('#f-total').text(totalFsum);
        // });

        //
        // $('.form-group').on('input','.fd-number',function(){
        //     var totalFdsum = 0;
        //     $('.form-group .fd-number').each(function(){
        //         var inputVal = $(this).val();
        //         if($.isNumeric(inputVal)){
        //             totalFdsum += parseFloat(inputVal);
        //         }
        //     });
        //     $('#fd-total').text(totalFdsum);
        // });

        $(".family-member").on("keyup change", function(){

            $('.member-desc').val('');
            $(".total-member-desc").val('')

            var boy_number = $(".boy-number").val() ? $(".boy-number").val() : 0;
            var girl_number = ($(".girl-number").val() ? $(".girl-number").val() : 0);
            var other_number = ($(".other-number").val() ? $(".other-number").val() : 0);
            $(".total-member").val(parseInt(boy_number)+parseInt(girl_number)+parseInt(other_number));
            if($(".total-member").val() > 0) {
                $("#memberDescMsg").attr("hidden","hidden");
            }
        })

        $(".member-desc").on("keyup change", function(){

            if($(".total-member").val() > 0) {
                var child_number = $(".child-number").val() ? $(".child-number").val() : 0;
                var disabled_number = ($(".disabled-number").val() ? $(".disabled-number").val() : 0);
                var employee_number = ($(".employee-number").val() ? $(".employee-number").val() : 0);
                var unemployed_number = ($(".unemployed-number").val() ? $(".unemployed-number").val() : 0);
                var govt_benefi_number = ($(".govt-benefi-number").val() ? $(".govt-benefi-number").val() : 0);
                var others = ($(".others").val() ? $(".others").val() : 0);

                $(".total-member-desc").val(parseInt(child_number)+parseInt(disabled_number)+parseInt(employee_number)+parseInt(unemployed_number)+parseInt(govt_benefi_number)+parseInt(others));

                if((parseInt(child_number)+parseInt(disabled_number)+parseInt(employee_number)+parseInt(unemployed_number)+parseInt(govt_benefi_number)+parseInt(others)) > $(".total-member").val()) {

                    $('.member-desc').val('');
                    $('.total-member-desc').val('');

                    swal({
                        title:'<h4 style="color:#cc7a00;">Warning Message</h4>',
                        text:" সদস্যের বিবরণ মোট থেকে সদস্য থেকে বেশি হয়েছে। </br> সঠিক করে লিখুন।</h5>",
                        html:true,
                        buttons:true,
                        showCancelButton: false,
                        cancelButtonText: "ok",
                        closeOnCancel: true
                    });
                }

            } else {
                $("#memberDescMsg").text("আগে পরিবারের সদস্য সংখ্যা পূরণ করুন।");
                $('.member-desc').val('');
            }

        });






    </script>


















@endsection
