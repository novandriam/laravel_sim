<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Datatables;
use DB;
use Redirect;
use App\KategoriAset;
use App\Aset;

class KategoriAsetController extends Controller
{
    public function index()
    {
    	return view('admin.kategori_aset.list');
    }

    public function indexData(Request $request)
    {
		// Just to display mysql num rows, add this code
		DB::statement(DB::raw('set @rownum=0'));
		$table 	= KategoriAset::select([DB::raw('@rownum := @rownum + 1 AS rownum'),
					'kategori_asets.*',
					// Or Select all with table.*
					])
					->get();
        // if(isset)
		$datatables = Datatables::of($table);
		if($keyword = $request->get('search')['value'])
		{
			$datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
		}

	    return $datatables	 
	    		->addColumn('action', function($table) {
	    			return '<a href="'.url('kelola/kategori_aset/edit/'.$table->id).'" class="btn btn-sm btn-primary">Edit</a>
	    			<a onclick="return confirm(\'Hapus '.$table->nama.' ?\')" href="'.url('kelola/kategori_aset/delete/'.$table->id).'" class="btn btn-sm btn-danger">Hapus</a>';

	    		})   		
	    		->make(true);
    }

    public function add() 
    {
    	return view('admin.kategori_aset.add');
    }

    public function addact(Request $request)
    {

    	$kategori = new KategoriAset();
    	$kategori->nama=$request['nama'];
        $kategori->save();

    	return Redirect::to('kelola/kategori_aset');
    }

    public function delete($id)
    {
    	$kategori=KategoriAset::find($id);

        $aset=Aset::where('kategori_aset_id','=',$id)->first();
        if(isset($aset->id))
        {
            return Redirect::to('kelola/kategori_aset')->with('peringatan','Gagal Hapus, masih ada aset dalam kategori ini');
        }
        else
        {
            $kategori->delete();
            return Redirect::to('kelola/kategori_aset')->with('peringatan','Hapus berhasil');
        }    	    	
    }

    public function edit($id)
    {
    	$kategori=KategoriAset::find($id);

    	return view('admin.kategori_aset.edit',[
    			'kategori' => $kategori
    		]);
    }

    public function editact(Request $request)
    {
    	$id=$request['id'];
    	
        $kategori=KategoriAset::find($id);
        $kategori->nama=$request['nama'];
        $kategori->save();

    	return Redirect::to('kelola/kategori_aset');
    }

}
