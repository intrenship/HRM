<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\crud_admin;
use App\Reg;
use App\jobs;
use Mail;
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
	
	 public function search_news(Request $request)
    {
        $query = $request->get('q');
        $hasil = crud_admin::	where('judul', 'like', '%' . $query . '%')->paginate(7);

        return view('superadmin/search_news', compact('hasil', 'query'));
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

	 
	 
	Mail::send('user.pesan', $data, function($pesan) {
    $pesan->to('jaka.1453karang@gmail.com', 'El Cicko')->subject('Selamat datang di Laravel!');
});
     $tambah->save();
		
     return redirect()->to('/superadmin');
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
	public function cari_lowongan()
    {
        		$datas = jobs::orderBy('id','DESC')->paginate(8);
		return view('/user/search')->with('datas', $datas);
    }
	
		 public function biodata()
    {
        //
		return view('/user/biodata');
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
      'lowongan' => 'required',
      'kualifikasi' => 'required',
      'katagori' => 'required'
]);

     $tambah = new jobs();
     $tambah->lowongan = $request['lowongan'];
     $tambah->kualifikasi = $request['kualifikasi'];
     $tambah->katagori = $request['katagori'];

     $tambah->save();

     return redirect()->to('/superadmin');
    } 	 
	public function views_jobs()
    {
		$datas = jobs::orderBy('id','DESC')->paginate(8);
		return view('/superadmin/jobs_view')->with('datas', $datas);
    }
   
  public function edit_jobs($id)
    {
        $tampiledit = jobs::where('id', $id)->first();
        return view('/superadmin/edit_jobs')->with('tampiledit', $tampiledit);
    }
	public function update_jobs(Request $request, $id)
    {
        $update = jobs::where('id', $id)->first();
        $update->lowongan = $request['lowongan'];
        $update->katagori = $request['katagori'];
        $update->kualifikasi = $request['kualifikasi'];
	
	$update->update();
        return redirect()->to('view_jobs');
    }
 public function cari_lowongan1(Request $request)
    {
        $query = $request->get('q');
        $hasil = jobs::	where('lowongan',  'like', '%' . $query . '%')->paginate(7);

        return view('user/search_lowongan', compact('hasil', 'query'));
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
    }    
	public function destroy_user($id)
    {
        //
		   $hapus = Reg::find($id);
        $hapus->delete();

        return redirect()->to('view_users');
    }public function destroy_jobs($id)
    {
        //
		   $hapus = jobs::find($id);
        $hapus->delete();

        return redirect()->to('view_jobs');
    }
	
}
