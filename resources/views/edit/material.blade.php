@include('template.css')
<title>dashboard Admin</title>

<!-- Favicons -->


<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        @include('template.header')
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        @include('template.sidebar')
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row mt">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h4><i class="fa fa-angle-right"></i>Edit Data Proyek</h4>
                        @foreach($kuproy as $a)
                        <form action="/material/edit/{{$a->kode_material}}/post" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">kode material</label>
                                <input name="nama_proyek" type="text" class="form-control" value="{{$a->kode_material}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">suplier material</label>
                                <input name="id_lokasi" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->suplaier_material}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">tanggal pembelian</label>
                                <input name="nilai_proyek" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->tanggal_pembelian}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Total biaya</label>
                                <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->total_biaya}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nama material</label>
                                <input name="tanggal_selesai" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->nama_material}}">
                            </div>
                           
                            <div class="col-md-3 col-xs-11">
                  
                            <button type="submit" class="btn btn-round btn-primary">Submit</button>
                        </form>
                        @endforeach
                    </div>

                    <!-- /col-lg-6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 bg-info text-white">
                        
                            
                    </div>
                    
            
                    <!-- /col-lg-6 -->
                </div>
                <!--/ row -->
            </section>
            <!-- /wrapper -->
        </section>
        @include('template.js')