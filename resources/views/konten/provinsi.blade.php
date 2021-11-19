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
                        <h4><i class="fa fa-angle-right"></i> Data Provinsi</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID provinsi</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($inpp as $a)
                                <tr>
                                    <th scope="row">{{$a->id_provinsi}}</th>
                                    <td>{{$a->nama_provinsi}}</td>
                                    <td>{{$a->keterangan}}</td>
                                    <td>
                                    <a href="/provinsi/edit/{{$a->id_provinsi}}" type="button"  class="btn btn-theme02">edit</a>
                                    <a href="/provinsi/del/{{$a->id_provinsi}}" type="button" class="btn btn-theme04">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- /col-lg-6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 bg-info text-white">
                        <h4><i class="fa fa-angle-right"></i> Input data Prvinsi</h4>
                        <form action="/provinsi/upload" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">id lokasi</label>
                                <input name="nama_proyek" type="number" class="form-control" >
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nama provinsi</label>
                                <input name="id_lokasi" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">keterangan</label>
                                <input name="nilai_proyek" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <div class="col-md-3 col-xs-11">
                  
                            <button type="submit" class="btn btn-round btn-primary">Submit</button>
                        </form>
                    </div>
                    
            
                    <!-- /col-lg-6 -->
                </div>
                <!--/ row -->
            </section>
            <!-- /wrapper -->
        </section>
        @include('template.js')