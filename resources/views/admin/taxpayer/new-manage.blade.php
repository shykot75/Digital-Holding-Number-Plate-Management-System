<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/html/table_manage_combine.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 17:41:15 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Managed Tables - Extension Combination</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/css/default/app.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />


    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />

</head>
<body>




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
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>






<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>




<script src="{{asset('/')}}datatable/assets/js/vendor.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/js/app.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>


<script src="{{asset('/')}}datatable/assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-select/js/dataTables.select.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/pdfmake/build/pdfmake.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/pdfmake/build/vfs_fonts.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/jszip/dist/jszip.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/js/demo/table-manage-combine.demo.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/js/demo/render.highlight.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>

<script type="256de2ca2ad2c51ca6e849ef-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
<script src="{{asset('/')}}datatable/assets/js/rocket-loader.min.js" data-cf-settings="256de2ca2ad2c51ca6e849ef-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71417a56785b78b7","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/table_manage_combine.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 17:41:16 GMT -->
</html>
