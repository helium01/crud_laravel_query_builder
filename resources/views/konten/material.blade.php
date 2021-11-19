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
                        <h4><i class="fa fa-angle-right"></i> Data Material</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">kode material</th>
                                    <th scope="col">suplier material</th>
                                    <th scope="col">tanggal pembelian</th>
                                    <th scope="col">total biaya</th>
                                    <th scope="col">nama material</th>
                                    <th scope="col">pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($inpp as $a)
                                <tr>
                                    <th scope="row">{{$a->kode_material}}</th>
                                    <td>{{$a->suplaier_material}}</td>
                                    <td>{{$a->tanggal_pembelian}}</td>
                                    <td>{{$a->total_biaya}}</td>
                                    <td>{{$a->nama_material}}</td>
                                    <td>
                                    <a href="/material/edit/{{$a->kode_material}}" type="button"  class="btn btn-theme02">edit</a>
                                    <a href="/material/del/{{$a->kode_material}}" type="button" class="btn btn-theme04">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- /col-lg-6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 bg-info text-white">
                        <h4><i class="fa fa-angle-right"></i> Input data Material</h4>
                        <form action="/material/upload" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">kode_material</label>
                                <input name="nama_proyek" type="number" class="form-control" >
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">suplier material</label>
                                <input name="id_lokasi" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">tanggal pembelian</label>
                                <input name="nilai_proyek" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Total biaya</label>
                                <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nama material</label>
                                <input name="tanggal_selesai" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                  
                            <button type="submit" class="btn btn-round btn-primary">Submit</button>
                        </form>
                        <div class="col-md-3 col-xs-11">
                    </div>
                    
            
                    <!-- /col-lg-6 -->
                </div>
                <!--/ row -->
            </section>
            <!-- /wrapper -->
        </section>
        @include('template.js')