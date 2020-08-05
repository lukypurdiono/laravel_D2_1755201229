<?php

namespace App\Http\Controllers;
use App\Prodi;
use App\Mahasiswa;
use DataTables;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(){
        return view('prodi.index');
        // $list_prodi = Prodi::all();
        // return view('prodi.index', compact('list_prodi'));
    }

    public function prodi_list()
    {
      $prodi = Prodi::all();
      return Datatables::of($prodi)->addIndexColumn()->addColumn('action', function($prodi) {$action = '<a class="text-primary" href="/prodi/edit/'.$prodi->kode_prodi.'">Edit</a>';
      $action .= ' | <a class="text-danger" href="/prodi/delete/'.$prodi->kode_prodi.'">Hapus</a>';return $action;})->make();
    }

    public function create(){
        $prodi = Prodi::all();
        return view('prodi.create', compact('prodi'));
    }

    public function store(Request $request){
        $request->validate([
            'kode_prodi' => 'required|digits:3',
            'nama_prodi' => 'required',
            'kaprodi' => 'required'
         ]);
            Prodi::create($request->all());
            return redirect()->route('prodi.index')
            ->with('success','Data berhasil ditambahkan');
    }
   

    public function edit(Prodi $prodi, $kode_prodi)
    {
        $prodi = Prodi::find($kode_prodi);
        return view('prodi.edit', compact('prodi'));
    }
    
    public function update(Request $request, Prodi $prodi)
    {
        $request->validate(
            [               
                'nama_prodi' => 'required',
                'kaprodi' => 'required'
            ]);
        $prodi->update($request->all());
        return redirect()->route('prodi.index')->with('success','Data berhasil diupdate');
    }
         
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success','Data Berhasil Dihapus');
    }
}