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
                        <form action="/proyek/edit/{{$a->nama_proyek}}/post" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">nama proyek</label>
                                <input name="nama_proyek" type="text" class="form-control" value="{{$a->nama_proyek}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">id lokasi</label>
                                <input name="id_lokasi" type="number" class="form-control" id="exampleInputPassword1" value="{{$a->id_lokasi}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nilai Proyek</label>
                                <input name="nilai_proyek" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->nilai_proyek}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal mulai</label>
                                <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->tanggal_mulai}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Selesai</label>
                                <input name="tanggal_selesai" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->tanggal_selesai}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Masa Pengerjaan</label>
                                <input name="masa_pengerjaan" type="text" class="form-control" id="exampleInputPassword1" value="{{$a->masa_pengerjaan}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Material</label>
                                <input name="kode_material" type="number" class="form-control" id="exampleInputPassword1" value="{{$a->kode_material}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Id Pengguna</label>
                                <input name="id_pengguna" type="number" class="form-control" id="exampleInputPassword1" value="{{$a->id_pengguna}}">
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