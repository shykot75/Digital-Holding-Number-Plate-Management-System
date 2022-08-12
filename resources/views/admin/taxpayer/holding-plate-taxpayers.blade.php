@extends('master.new-master')

@section('title')
    হোল্ডিং প্লেট তালিকা | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
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
                                    <th class="text-nowrap">মোবাইল</th>
                                    <th class="text-nowrap">ওয়ার্ড</th>
                                    <th class="text-nowrap">প্লেট নং</th>
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
                                        <td>{{ $numto->bnNum($taxpayer->mobile_number) }}</td>
                                        <td>{{ $numto->bnNum($taxpayer->ward_no) }}</td>
                                        <td>{{$taxpayer->plate_no}}</td>

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
