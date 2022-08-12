@extends('master.master')

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
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align: center;">
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
                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{$ward->ward_name}}</td>
                                    <td>{{ $numto->bnNum($ward->ward_no) }}</td>
                                    <td>{{$ward->status == 1 ? 'সক্রিয়' :'নিষ্ক্রিয়'}}</td>
                                    <td>

                                        <a href="" class="btn btn-primary btn-sm" title="এই ওয়ার্ডের ট্যাক্সদাতার তালিকা">
                                            দেখুন
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
    </script>







@endsection
