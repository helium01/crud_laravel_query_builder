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
                        <h4><i class="fa fa-angle-right"></i> Data Proyek</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Proyek</th>
                                    <th scope="col">ID lokasi</th>
                                    <th scope="col">Nilai Proyek</th>
                                    <th scope="col">tanggal mulai</th>
                                    <th scope="col">tanggal selesai</th>
                                    <th scope="col">masa pengerjaan</th>
                                    <th scope="col">kode material</th>
                                    <th scope="col">ID pengguna</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($inpp as $a)
                                <tr>
                                    <th scope="row">{{$a->nama_proyek}}</th>
                                    <td>{{$a->id_lokasi}}</td>
                                    <td>{{$a->nilai_proyek}}</td>
                                    <td>{{$a->tanggal_mulai}}</td>
                                    <td>{{$a->tanggal_selesai}}</td>
                                    <td>{{$a->masa_pengerjaan}}</td>
                                    <td>{{$a->kode_material}}</td>
                                    <td>{{$a->id_pengguna}}</td>
                                    <td>Pilihan</td>
                                    <td>
                                    <a href="/proyek/edit/{{$a->nama_proyek}}" type="button"  class="btn btn-theme02">edit</a>
                                    <a href="/proyek/del/{{$a->nama_proyek}}" type="button" class="btn btn-theme04">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- /col-lg-6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 bg-info text-white">
                        <h4><i class="fa fa-angle-right"></i> Input data Proyek</h4>
                        <form action="/proyek/upload" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">nama proyek</label>
                                <input name="nama_proyek" type="text" class="form-control" >
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">id lokasi</label>
                                <select name="id_lokasi" class="form-control" id="exampleFormControlSelect1">
                                @foreach($lok as $l)
                                <option value="{{$l->id_lokasi}}">{{$l->id_lokasi}} == {{$l->jumlah_proyek}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nilai Proyek</label>
                                <input name="nilai_proyek" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal mulai</label>
                                <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Selesai</label>
                                <input name="tanggal_selesai" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Masa Pengerjaan</label>
                                <input name="masa_pengerjaan" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Material</label>
                                <select name="kode_material" class="form-control" id="exampleFormControlSelect1">
                                @foreach($mat as $m)
                                <option value="{{$m->kode_material}}">{{$m->kode_material}} == {{$m->nama_material}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Id Pengguna</label>
                                <select name="id_pengguna" class="form-control" id="exampleFormControlSelect1">
                                @foreach($peng as $p)
                                <option value="{{$p->id}}">{{$p->id}} == {{$p->name}}</option>
                                @endforeach
                                </select>
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