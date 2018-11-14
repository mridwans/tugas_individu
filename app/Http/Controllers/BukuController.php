<?php
 
namespace App\Http\Controllers;
 
use App\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class BukuController extends Controller{

	public function createBuku(Request $request){
 
    	$buku = Buku::create($request->all());
 
    	return response()->json($buku);
 
	}
 
	public function updateBuku(Request $request, $id){

    	$buku  = Buku::find($id);
    	$buku->judul_buku = $request->input('judul_buku');
    	$buku->pengarang = $request->input('pengarang');
    	$buku->tahun_terbit = $request->input('tahun_terbit');
    	$buku->save();
 
    	return response()->json($buku);
	}  

	public function deleteBuku($id){
    	$buku  = Buku::find($id);
    	$buku->delete();
 
    	return response()->json('Removed successfully.');
	}

	public function index(){
 
    	$bukus  = Buku::all();
 
    	return response()->json($bukus);
 
	}
}
?>