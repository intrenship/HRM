<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\crud_admin;
use App\Reg;

class adminController extends Controller
{
   
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
}
