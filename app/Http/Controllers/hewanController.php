<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class hewanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table hewan
		$hewan = DB::table('hewan')->get();
 
    	// mengirim data hewan ke view index
		return view('index',['hewan' => $hewan]);
 
	}
 
	// method untuk menampilkan view form tambah hewan
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table hewan
	public function store(Request $request)
	{
		// insert data ke table hewan
		DB::table('hewan')->insert([
			'namahewan' => $request->nama,
			'jumlahhewan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
 
	}
 
	// method untuk edit data hewan
	public function edit($id)
	{
		// mengambil data hewan berdasarkan id yang dipilih
		$hewan = DB::table('hewan')->where('kodehewan',$id)->get();
		// passing data hewan yang didapat ke view edit.blade.php
		return view('edit',['hewan' => $hewan]);
 
	}
 
	// update data hewan
	public function update(Request $request)
	{
		// update data hewan
		DB::table('hewan')->where('kodehewan',$request->id)->update([
			'namahewan' => $request->nama,
			'jumlahhewan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
	}
 
	// method untuk hapus data hewan
	public function hapus($id)
	{
		// menghapus data hewan berdasarkan id yang dipilih
		DB::table('hewan')->where('kodehewan',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/hewan');
	}
}