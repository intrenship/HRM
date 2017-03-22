<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\crud_admin;

class adminController extends Controller
{
   
    public function create_news()
    {
        //
		return view('/superadmin/add');
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
      'name' => 'required',
      'username' => 'required',
	  'email' => 'required',
      'password' => 'required'	  
]);
	$tambah = new Reg();
     $tambah->name = $request['name'];
     $tambah->username = $request['username'];
	 $tambah->email = $request['email'];
     $tambah->password = $request['password'];
     $tambah->save();
		dd('succes');

     return redirect()->to('../utama');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampilkan = Crud::find($id);
        return view('tampil')->with('tampilkan', $tampilkan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		   $tampiledit = Crud::where('id', $id)->first();
        return view('edit')->with('tampiledit', $tampiledit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		  $update = Crud::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->isi = $request['isi'];
        $update->update();

        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		   $hapus = Crud::find($id);
        $hapus->delete();

        return redirect()->to('/');
    }
}
