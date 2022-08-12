@extends('master.new-master')

@section('title')
    ওয়ার্ড তালিকা | ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম
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

                                    <th>ক্রমিক</th>
                                    <th>ওয়ার্ড নাম</th>
                                    <th>ওয়ার্ড নং</th>
                                    <th>বর্তমান অবস্থা</th>
                                    <th>অ্যাকশান</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($wards as $ward)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->iteration  }}</td>
                                        <td>{{$ward->ward_name}}</td>
                                        <td>{{ $numto->bnNum($ward->ward_no) }}</td>
                                        <td>{{$ward->status == 1 ? 'সক্রিয়' :'নিষ্ক্রিয়'}}</td>
                                        <td>

                                            <a href="{{route('ward.taxpayer', ['wardNo' => $ward->ward_no])}}" class="btn btn-primary btn-sm" title="এই ওয়ার্ডের ট্যাক্সদাতার তালিকা">
                                                ট্যাক্সদাতা
                                            </a>

                                            <a href="{{route('ward.edit', ['id' => $ward->id])}}" class="btn btn-info btn-sm" title="সম্পাদন করুন">
                                                সম্পাদনা
                                            </a>

                                            <a href="{{route('status.update', ['id' => $ward->id])}}" class="btn {{$ward->status == 1 ? 'btn-warning ' : 'btn-success'}} btn-sm">
                                                {{$ward->status == 1 ? 'নিষ্ক্রিয় ' : 'সক্রিয়'}}
                                            </a>

                                            <a href="" onclick="deleteWard({{$ward->id}})" class="btn btn-danger btn-sm" title="মুছে ফেলুন">
                                                <i class="fa fa-trash font-size-10"></i>
                                            </a>
                                            <form action="{{route('ward.delete', ['id' => $ward->id])}}" method="POST" id="deleteWard{{$ward->id}}">
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

        function deleteWard(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Ward?');

            if(check){
                document.getElementById('deleteWard'+id).submit();
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
