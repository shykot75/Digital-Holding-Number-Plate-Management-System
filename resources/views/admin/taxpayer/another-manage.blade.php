@extends('master.new-master')

@section('title')
    করদাতার তালিকা | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
@endsection


@section('body')



    <div class="taxpay-manage">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>

                        <div class="panel-body">
                            <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>

                                    <th class="text-nowrap">ক্রমিক</th>
                                    <th class="text-nowrap">বাড়ির নাম</th>
                                    <th class="text-nowrap">মালিক/প্রতিষ্ঠানের নাম</th>
                                    <th class="text-nowrap">হোল্ডিং নং</th>
                                    <th class="text-nowrap">রাস্তার/মহল্লার নাম</th>
                                    <th class="text-nowrap">কিউ-আর-কোড</th>
                                    <th class="text-nowrap">ওয়ার্ড</th>
                                    <th class="text-nowrap">অ্যাকশান</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($taxpayers as $taxpayer)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$taxpayer->house_name}}</td>
                                        <td>{{$taxpayer->house_owner}}</td>
                                        <td>{{$taxpayer->holding_no}}</td>
                                        <td>{{$taxpayer->road_name}}</td>
                                        <td> <img src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(60)->generate(url('').'/lpps/qr-code/'.$taxpayer->id) ) }}" alt="qr-code"> </td>
                                        <td>{{ $numto->bnNum($taxpayer->ward_no) }}</td>

                                        <td>

                                            <a href="{{route('holdingStatus.update', ['id' => $taxpayer->id])}}" class="btn btn-sm {{$taxpayer->holding_plate_status == 1 ? 'btn-primary' : 'btn-warning'}} " title="{{$taxpayer->holding_plate_status == 1 ? 'হোল্ডিং প্লেট বাতিল করুন' : 'হোল্ডিং প্লেট বিতরণ করুন'}}">
                                                <i class="{{$taxpayer->holding_plate_status == 1 ? 'fa fa-arrow-up' : 'fa fa-arrow-down'}} font-size-10 "></i>
                                            </a>

                                            <a href="{{route('taxpayer.show', ['id' => $taxpayer->id])}}" class="btn btn-info btn-sm" title="বিস্তারিত">
                                                <i class="fa fa-book-open font-size-10"></i>
                                            </a>

                                            <a href="{{route('taxpayer.edit', ['id' => $taxpayer->id])}}" class="btn btn-success btn-sm" title="সম্পাদনা">
                                                <i class="fa fa-edit font-size-10"></i>
                                            </a>
                                            <a href="" onclick="deleteTaxpayer({{$taxpayer->id}})" class="btn btn-danger btn-sm mt-2" title="মুছে ফেলুন">
                                                <i class="fa fa-trash font-size-10"></i>
                                            </a>
                                            <form action="{{route('taxpayer.delete', ['id' => $taxpayer->id])}}" method="POST" id="deleteTaxpayer{{$taxpayer->id}}">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>

    <script>

        function deleteTaxpayer(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Taxpayer?');

            if(check){
                document.getElementById('deleteTaxpayer'+id).submit();
            }


        }


        var options = {
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
            buttons: [
                { extend: 'copy', className: 'btn-sm' },
                { extend: 'csv', className: 'btn-sm' },
                { extend: 'excel', className: 'btn-sm' },
                { extend: 'pdf', className: 'btn-sm' },
                { extend: 'print', className: 'btn-sm' }
            ],
            responsive: true,
            colReorder: true,
            keys: true,
            rowReorder: true,
            select: true
        };

        if ($(window).width() <= 767) {
            options.rowReorder = false;
            options.colReorder = false;
        }
        $('#data-table-combine').DataTable(options);
    </script>

@endsection
