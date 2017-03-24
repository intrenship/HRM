<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\crud_admin;
use App\Reg;
use App\Reg\lowongan;

class adminController extends Controller
{
	//news 
	 public function create_news()
    {
        //
		return view('/superadmin/add');
    }
	public function edit_news($id)
    {
        $tampiledit = crud_admin::where('id', $id)->first();
        return view('/superadmin/edit_news')->with('tampiledit', $tampiledit);
    }
	public function update_news(Request $request, $id)
    {
        $update = crud_admin::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->berita = $request['berita'];

       if($request->file('gambar') == "")
        {
            $update->gambar = $update->gambar;
        } 
        else
        {
            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('gambar')->move("image/", $fileName);
            $update->gambar = $fileName;
        }
		$update->update();
        return redirect()->to('view_news');
    }
	public function views_news()
    {
		$datas = crud_admin::orderBy('id','DESC')->paginate(10);
		return view('/superadmin/news_view')->with('datas', $datas);
    }

 public function insert_news(Request $request)
    {
        //
		$this->validate($request, [
      'judul' => 'required',
      'berita' => 'required'
]);

     $tambah = new crud_admin();
     $tambah->judul = $request['judul'];
     $tambah->berita = $request['berita'];
// Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

        $tambah->gambar = $fileName;
     $tambah->save();

     return redirect()->to('/superadmin');
    } 	 
	
	//users
	public function register1(Request $request)
    {
        //

	$this->validate($request, [
          'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
]);
	$tambah = new Reg();
     $tambah->name = $request['name'];
	 $tambah->email = $request['email'];
	 $tambah->id_group = $request['id_group'];
     $tambah->password = bcrypt($request['password']);
	 
     $tambah->save();

     return redirect()->to('/superadmin');
    }
	public function edit_users($id)
    {
        $tampiledit = Reg::where('id', $id)->first();
        return view('/superadmin/edit_users')->with('tampiledit', $tampiledit);
    }
	public function update_users(Request $request, $id)
    {
        $update = Reg::where('id', $id)->first();
        $update->name = $request['name'];
        $update->email = $request['email'];
        $update->id_group = $request['id_group'];
        $update->password = bcrypt($request['password']);
/*
       if($request->file('gambar') == "")
        {
            $update->gambar = $update->gambar;
        } 
        else
        {
            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('gambar')->move("image/", $fileName);
            $update->gambar = $fileName;
        }
	*/	$update->update();
        return redirect()->to('view_users');
    }

	public function views_users()
    {
		$datas = Reg::orderBy('id','DESC')->paginate(8);
		return view('/superadmin/users_view')->with('datas', $datas);
    }
	 public function search_user(Request $request)
    {
        $query = $request->get('q');
        $hasil = Reg::	where('name', $query)->orWhere('email', 'like', '%' . $query . '%')->paginate(7);

        return view('superadmin/search_user', compact('hasil', 'query'));
    }
	 public function create_users()
    {
        //
		return view('/superadmin/add_users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 	 
	
	//jobs
	 public function create_jobs()
    {
        //
		return view('/superadmin/add_lowongan');
    }   
   
 public function insert_jobs(Request $request)
    {
        //
		$this->validate($request, [
      'judul' => 'required',
      'berita' => 'required'
]);

     $tambah = new crud_admin();
     $tambah->judul = $request['judul'];
     $tambah->berita = $request['berita'];
// Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

        $tambah->gambar = $fileName;
     $tambah->save();

     return redirect()->to('/superadmin');
    } 	 
	
   
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
		   $hapus = crud_admin::find($id);
        $hapus->delete();

        return redirect()->to('view_news');
    }    public function destroy_user($id)
    {
        //
		   $hapus = Reg::find($id);
        $hapus->delete();

        return redirect()->to('view_users');
    }
}
