@extends('master.master')

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

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ক্রমিক</th>
                                <th>বাড়ির নাম</th>
                                <th>মালিক/প্রতিষ্ঠানের নাম</th>
                                <th>হোল্ডিং নং</th>
                                <th>রাস্তার/মহল্লার নাম</th>
                                <th>কিউ-আর-কোড</th>
                                <th>অ্যাকশান</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($taxpayers as $taxpayer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$taxpayer->house_name}}</td>
                                    <td>{{$taxpayer->house_owner}}</td>
                                    <td>{{$taxpayer->holding_no}}</td>
                                    <td>{{$taxpayer->road_name}}</td>
                                    <td> <img src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(60)->generate(url('').'/lpps/qr-code/'.$taxpayer->id) ) }}" alt="qr-code"> </td>

                                    <td>

                                        <a href="" class="btn btn-primary btn-sm" title="হোল্ডিং প্লেট বিতরণ">
                                            <i class="fa fa-arrow-up font-size-10"></i>
                                        </a>

                                        <a href="{{route('taxpayer.show', ['id' => $taxpayer->id])}}" class="btn btn-info btn-sm" title="বিস্তারিত">
                                            <i class="fa fa-book-open font-size-10"></i>
                                        </a>

                                        <a href="{{route('taxpayer.edit', ['id' => $taxpayer->id])}}" class="btn btn-success btn-sm" title="সম্পাদনা">
                                            <i class="fa fa-edit font-size-10"></i>
                                        </a>
                                        <a href="" onclick="deleteTaxpayer({{$taxpayer->id}})" class="btn btn-danger btn-sm" title="মুছে ফেলুন">
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
    </script>






@endsection
