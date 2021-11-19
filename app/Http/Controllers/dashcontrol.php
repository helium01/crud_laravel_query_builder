<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashcontrol extends Controller
{
    // controller untuk view
    public function dashboard(){
        return view('konten.dashboard');
    }
    public function proyek(){
        $a=DB::table('tb_proyek')->get();
        $mat=DB::table('tb_material')->get();
        $peng=DB::table('users')->get();
        $lok=DB::table('tb_lokasi')->get();
        return view('konten.proyek',['inpp'=>$a],['mat'=>$mat],['peng'=>$peng],['lok'=>$lok]);
    }
    public function material(){
        $a=DB::table('tb_material')->get();
        return view('konten.material',['inpp'=>$a]);
    }
    public function lokasi(){
        $a=DB::table('tb_lokasi')->get();
        $b=DB::table('tb_provinsi')->get();
        return view('konten.lokasi',['inpp'=>$a],['lok'=>$b]);
    }
    public function user(){
        $a=DB::table('users')->get();
        return view('konten.user',['inpp'=>$a]);
    }
    public function provinsi(){
        $a=DB::table('tb_provinsi')->get();
        return view('konten.provinsi',['inpp'=>$a]);
    }

    // controller untuk create post
    public function proyekpost(Request $request){
        DB::table('tb_proyek')->insert([
          'nama_proyek'=>$request->nama_proyek,  
          'id_lokasi'=>$request->id_lokasi,  
          'nilai_proyek'=>$request->nilai_proyek,  
          'tanggal_mulai'=>$request->tanggal_mulai,  
          'tanggal_selesai'=>$request->tanggal_selesai,  
          'masa_pengerjaan'=>$request->masa_pengerjaan,  
          'kode_material'=>$request->kode_material,  
          'id_pengguna'=>$request->id_pengguna,  
        ]);
        return redirect('/proyek');
    }
    public function materialpost(Request $request){
        DB::table('tb_material')->insert([
          'kode_material'=>$request->nama_proyek,  
          'suplaier_material'=>$request->id_lokasi,  
          'tanggal_pembelian'=>$request->nilai_proyek,  
          'total_biaya'=>$request->tanggal_mulai,  
          'nama_material'=>$request->tanggal_selesai, 
        ]);
        return redirect('/material');
    }
    public function provinsipost(Request $request){
        DB::table('tb_provinsi')->insert([
          'id_provinsi'=>$request->nama_proyek,  
          'nama_provinsi'=>$request->id_lokasi,  
          'keterangan'=>$request->nilai_proyek, 
        ]);
        return redirect('/provinsi');
    }
    public function lokasipost(Request $request){
        DB::table('tb_lokasi')->insert([
          'id_lokasi'=>$request->nama_proyek,  
          'id_provinsi'=>$request->id_lokasi,  
          'kecamatan'=>$request->nilai_proyek,  
          'jumlah_proyek'=>$request->tanggal_mulai,
        ]);
        return redirect('/lokasi');
    }
    public function userpost(Request $request){
        DB::table('users')->insert([
          'id'=>$request->nama_proyek,  
          'name'=>$request->id_lokasi,  
          'email'=>$request->nilai_proyek,  
          'password'=>bcrypt($request->tanggal_mulai), 
        ]);
        return redirect('/user');
    }
    // controller untuk delete ya
    public function delproyek($id){
        DB::table('tb_proyek')->where('nama_proyek',$id)->delete();
        return redirect('/proyek');
    }
    public function delmaterial($id){
        DB::table('tb_material')->where('kode_material',$id)->delete();
        return redirect('/material');
    }
    public function delprovinsi($id){
        DB::table('tb_provinsi')->where('id_provinsi',$id)->delete();
        return redirect('/provinsi');
    }
    public function deluser($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user');
    }
    public function dellokasi($id){
        DB::table('tb_lokasi')->where('id_lokasi',$id)->delete();
        return redirect('/lokasi');
    }
    // untuk edit
    public function editproyek($id){
        $b=DB::table('tb_proyek')->where('nama_proyek',$id)->get();
        return view('edit.proyek',['kuproy'=>$b]);
    }
    public function editmaterial($id){
        $b=DB::table('tb_material')->where('kode_material',$id)->get();
        return view('edit.material',['kuproy'=>$b]);
    }
    public function editlokasi($id){
        $b=DB::table('tb_lokasi')->where('id_lokasi',$id)->get();
        return view('edit.lokasi',['kuproy'=>$b]);
    }
    public function editprovinsi($id){
        $b=DB::table('tb_provinsi')->where('id_provinsi',$id)->get();
        return view('edit.provinsi',['kuproy'=>$b]);
    }
    public function edituser($id){
        $b=DB::table('users')->where('id',$id)->get();
        return view('edit.user',['kuproy'=>$b]);
    }
    // untuk post edit
    public function editproyekpost(Request $request, $id){
        DB::table('tb_proyek')->where('nama_proyek',$id)->update([
          'nama_proyek'=>$request->nama_proyek,  
          'id_lokasi'=>$request->id_lokasi,  
          'nilai_proyek'=>$request->nilai_proyek,  
          'tanggal_mulai'=>$request->tanggal_mulai,  
          'tanggal_selesai'=>$request->tanggal_selesai,  
          'masa_pengerjaan'=>$request->masa_pengerjaan,  
          'kode_material'=>$request->kode_material,  
          'id_pengguna'=>$request->id_pengguna,  
        ]);
        return redirect('/proyek');
    }
    public function editlokasipost(Request $request, $id){
        DB::table('tb_lokasi')->where('id_lokasi',$id)->update([
            'id_lokasi'=>$request->nama_proyek,  
            'id_provinsi'=>$request->id_lokasi,  
            'kecamatan'=>$request->nilai_proyek,  
            'jumlah_proyek'=>$request->tanggal_mulai,
          ]);
          return redirect('/lokasi');
    }
    public function edituserpost(Request $request, $id){
        DB::table('users')->where('id',$id)->update([
            'id'=>$request->nama_proyek,  
            'name'=>$request->id_lokasi,  
            'email'=>$request->nilai_proyek,  
            'password'=>bcrypt($request->tanggal_mulai), 
          ]);
          return redirect('/user');
    }
    public function editprovinsipost(Request $request, $id){
        DB::table('tb_provinsi')->where('id_provinsi',$id)->update([
            'id_provinsi'=>$request->nama_proyek,  
            'nama_provinsi'=>$request->id_lokasi,  
            'keterangan'=>$request->nilai_proyek, 
          ]);
          return redirect('/provinsi');
    }
    public function editmaterialpost(Request $request, $id){
        DB::table('tb_material')->where('kode_material',$id)->update([
            'kode_material'=>$request->nama_proyek,  
            'suplaier_material'=>$request->id_lokasi,  
            'tanggal_pembelian'=>$request->nilai_proyek,  
            'total_biaya'=>$request->tanggal_mulai,  
            'nama_material'=>$request->tanggal_selesai, 
          ]);
          return redirect('/material');
    }
}
