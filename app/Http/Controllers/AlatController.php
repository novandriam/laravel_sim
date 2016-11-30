<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Datatables;
use DB;
use Redirect;
use App\Alat;

class AlatController extends Controller
{
    public function index()
    {
    	return view('admin.alat.list');
    }

    public function indexData(Request $request)
    {
		// Just to display mysql num rows, add this code
		DB::statement(DB::raw('set @rownum=0'));
		$table 	= Alat::select([DB::raw('@rownum := @rownum + 1 AS rownum'),
					'alats.*',
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
	    			return '<a href="'.url('kelola/pengguna/edit/'.$table->id).'" class="btn btn-sm btn-primary">Edit</a>
	    			<a onclick="return confirm(\'Hapus '.$table->name.' ?\')" href="'.url('kelola/pengguna/delete/'.$table->id).'" class="btn btn-sm btn-danger">Hapus</a>';

	    		})   		
	    		->make(true);
    }

    public function add() 
    {
    	return view('admin.pengguna.add');
    }

    public function addact(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'unique:users'
    	]);

    	$user = new User();
    	$user->name=$request['name'];
    	$user->email=$request['email'];
    	$user->password=bcrypt($request['password']);
    	$user->level=$request['level'];
    	$user->save();

    	return Redirect::to('kelola/pengguna');
    }

    public function delete($id)
    {
    	$user=User::find($id);
    	$user->delete();

    	return Redirect::to('kelola/pengguna');
    }

    public function edit($id)
    {
    	$user=User::find($id);

    	return view('admin.pengguna.edit',[
    			'user' => $user
    		]);
    }

    public function editact(Request $request)
    {
    	$id=$request['id'];
    	$this->validate($request, [
    		'email' => 'unique:users,email,'.$id //untuk apabila email sama biar tetap bisa submit
    	]);

    	$user = User::find($id);
    	$user->name=$request['name'];
    	$user->email=$request['email'];

    	if($request['password'] != '')
    	{
    		$user->password=bcrypt($request['password']); //agar pasword apabila tidak di isi tidak di isi spasigg 
    	}    	
    	$user->level=$request['level'];
    	$user->save();

    	return Redirect::to('kelola/pengguna');
    }

}
