<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class TugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tugas
    	$tugas = DB::table('tugas')->get();
 
    	// mengirim data tugas ke view index
    	return view('tugas.index',['tugas' => $tugas]);
 
    }
    // method untuk menampilkan view form tambah tugas
public function tambah()
{
 
	// memanggil view tambah
	return view('tugas.tambah');
 
}
// method untuk insert data ke table tugas
public function store(Request $request)
{
	// insert data ke table tugas
	DB::table('tugas')->insert([
		'tugas_idpegawai' => $request->idpegawai,
		'tugas_tanggal' => $request->tanggal,
		'tugas_namatugas' => $request->namatugas,
		'tugas_status' => $request->status
	]);
	// alihkan halaman ke halaman tugas
	return redirect('/tugas');
 
}
// method untuk edit data tugas
public function edit($id)
{
	// mengambil data tugas berdasarkan id yang dipilih
	$tugas = DB::table('tugas')->where('tugas_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('tugas.edit',['tugas' => $tugas]);
 
}
// update data tugas
public function update(Request $request)
{
	// update data tugas
	DB::table('tugas')->where('tugas_id',$request->id)->update([
		'tugas_idpegawai' => $request->idpegawai,
		'tugas_tanggal' => $request->tanggal,
		'tugas_namatugas' => $request->namatugas,
		'tugas_status' => $request->status
	]);
	// alihkan halaman ke halaman tugas
	return redirect('/tugas');
}
// method untuk hapus data tugas
public function hapus($id)
{
	// menghapus data tugas berdasarkan id yang dipilih
	DB::table('tugas')->where('tugas_id',$id)->delete();
		
	// alihkan halaman ke halaman tugas
	return redirect('/tugas');
}
}