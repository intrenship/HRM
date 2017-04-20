<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\crud_admin;
use App\crud_lamaran;
use App\Reg;
use App\jobs;
use App\biodata;
use App\lamaran;
use App\formal;
use App\non_formal;
use App\organisasi;
use App\ortu;
use Mail;
class adminController extends Controller
{
	//news 
	 public function create_news()
    {
        //
		return view('/superadmin/add');
    }	 
	public function lamaran_view()
    {
        //
				$datas = crud_lamaran::orderBy('id','DESC')->paginate(10);

		return view('/superadmin/lamaran')->with('datas', $datas);
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
	
	public function insert_lamaran(Request $request)
    { 
	
     $tambah = new crud_lamaran();
     $tambah->id_user = $request['id_user'];
     $tambah->id_lowongan = $request['id_lowongan'];
     $tambah->status = $request['status'];
// Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('file_cv');
        $fileName   = $file->getClientOriginalName();
        $request->file('file_cv')->move("cv/", $fileName);

        $tambah->file_cv = $fileName;
     $tambah->save();

     return redirect()->to('/user/biodata');
    } 	
	public function insert_lamaran1(Request $request)
    {
 $this->validate($request, [
      'id_user' => 'required',
      'id_lowongan' => 'required',
      'status' => 'required'
]);
     $tambah = new crud_lamaran();
     $tambah->id_user = $request['id_user'];
     $tambah->id_lowongan = $request['id_lowongan'];
     $tambah->status = $request['status'];
     $tambah->save();

     return redirect()->to('search_lowongan');
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
	public function cari_lowongan(request $request,$id)
    {
	$users = biodata::where('id_user',$id)->first();
		if (count($users)){		
		  $datas1 = DB::table('users')
            ->join('pendidikan_formal', 'users.id', '=', 'pendidikan_formal.id_user')
            ->join('pendidikan_nonformal', 'users.id', '=', 'pendidikan_nonformal.id_user')
            ->join('orang_tua', 'users.id', '=', 'orang_tua.id_user')
            ->join('biodata', 'users.id', '=', 'biodata.id_user')
            ->select('users.*', 'pendidikan_formal.*', 'pendidikan_nonformal.*','orang_tua.*','biodata.*')
            ->get();

        		$datas = jobs::orderBy('id','DESC')->paginate(8);
		return view('/user/search')->with('users', $users)->with('datas', $datas)->with('datas1', $datas1);
		 }	
	
    }
	public function editbiodata($id) 
    {
		$biodata = DB::table('agama')->get();
		$jenis = DB::table('jenis_kelamin')->get();
		$kawin = DB::table('status_perkawinan')->get();
		$jenjang = DB::table('jenjang')->get();
		$users = biodata::where('id_user',$id)->first();
		$jurusan = DB::table('jurusan')->get();
        $datas = DB::table('users')
            ->leftJoin('pendidikan_formal', 'users.id', '=', 'pendidikan_formal.id_user')
            ->leftJoin('pendidikan_nonformal', 'users.id', '=', 'pendidikan_nonformal.id_user')
            ->leftJoin('orang_tua', 'users.id', '=', 'orang_tua.id_user')
            ->leftJoin('biodata', 'users.id', '=', 'biodata.id_user')
            ->select('users.*', 'pendidikan_formal.*', 'pendidikan_nonformal.*','orang_tua.*','biodata.*')
			->where('biodata.id_user','=',$id)
            ->get();
		return view('/user/biodataedit')->with('datas', $datas)->with('biodata',$biodata)->with('jenis',$jenis)->with('kawin',$kawin)->with('jenjang',$jenjang)
		->with('jurusan',$jurusan)->with('users',$users);
    }
	public function biodata($id)
    {
		$users = biodata::where('id_user',$id)->first();
		if (count($users)){	
		$datas = DB::table('users')
            ->leftJoin('pendidikan_formal', 'users.id', '=', 'pendidikan_formal.id_user')
            ->leftJoin('pendidikan_nonformal', 'users.id', '=', 'pendidikan_nonformal.id_user')
            ->leftJoin('orang_tua', 'users.id', '=', 'orang_tua.id_user')
            ->leftJoin('biodata', 'users.id', '=', 'biodata.id_user')
            ->select('users.*', 'pendidikan_formal.*', 'pendidikan_nonformal.*','orang_tua.*','biodata.*')
			->where('biodata.id_user','=',$id)
            ->get();
		return view('/user/editbio')->with('users',$users)->with('datas',$datas);
    }	
		else{
		$biodata = DB::table('agama')->get();
		$jenis = DB::table('jenis_kelamin')->get();
		$kawin = DB::table('status_perkawinan')->get();
		$jenjang = DB::table('jenjang')->get();
		$jurusan = DB::table('jurusan')->get();
		return view('/user/biodata')->with('biodata',$biodata)->with('jenis',$jenis)->with('kawin',$kawin)->with('jenjang',$jenjang)
		->with('jurusan',$jurusan)->with('users',$users);
	}
	}
	//jobs
	 public function create_jobs()
    {
        //
		return view('/superadmin/add_lowongan');
    }   
   
	public function insert_jobs(Request $request)
    {     //
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
	public function updatebiodata(Request $request, $id_user)
    {
		
		
     $tambah =  biodata::where('id_user',$id_user)->first();
	 $tambah->no_ktp = $request['no_ktp'];
	 $tambah->nama = $request['nama'];
     $tambah->alamat = $request['alamat'];
     $tambah->alamat_ktp = $request['alamat_ktp'];
	 $tambah->jenis_kelamin = $request['jenis_kelamin'];
     $tambah->agama = $request['agama'];
     $tambah->status_perkawinan = $request['status_perkawinan'];
	 $tambah->hobi = $request['hobi'];
     $tambah->suku = $request['suku'];
     $tambah->no_hp = $request['no_hp'];
	 $tambah->no_tlp = $request['no_tlp'];
     $tambah->no_sim = $request['no_sim'];
	 $tambah->id_user = $request['id_user'];

	 $tambah1 =  formal::where('id_user',$id_user)->first();
	 $tambah1->tingkat_pendidikan = $request['tingkat_pendidikan'];
	 $tambah1->jurusan = $request['jurusan'];
     $tambah1->sekolah = $request['sekolah'];
     $tambah1->th_masuk = $request['th_masuk'];
	 $tambah1->th_keluar = $request['th_keluar'];
     $tambah1->id_user = $request['id_user'];
     
	 $tambah2 = non_formal::where('id_user',$id_user)->first();
	 $tambah2->jenis_pendidikan = $request['jenis_pendidikan'];
	 $tambah2->penyelengara = $request['penyelengara'];
     $tambah2->tahun = $request['tahun'];
     $tambah2->id_user = $request['id_user']; 
	 
	 $tambah3 = ortu::where('id_user',$id_user)->first();
	 $tambah3->nama_ibu = $request['nama_ibu'];
     $tambah3->alamat_ortu = $request['alamat_ortu'];
     $tambah3->id_user = $request['id_user']; 
	 
	 $tambah4  = organisasi::where('id_user',$id_user)->first();
	 $tambah4 ->nama_ibu = $request['nama_ibu'];
     $tambah4 ->alamat_ortu = $request['alamat_ortu'];
     $tambah4 ->id_user = $request['id_user'];

    
	 
     $tambah->update();
     $tambah1->update();
     $tambah2->update();
     $tambah3->update();
     $tambah4->update();
	
        return redirect()->to('/user/editbio');
    }
	public function cari_lowongan1(Request $request,$id)
    {
		$users = biodata::where('id_user', $id)->first();

		if (count($users)){		
		$query = $request->get('q');
			$hasil = jobs::	where('lowongan',  'like', '%' . $query . '%')->paginate(7);
	$datas = DB::table('users')
            ->join('pendidikan_formal', 'users.id', '=', 'pendidikan_formal.id_user')
            ->join('pendidikan_nonformal', 'users.id', '=', 'pendidikan_nonformal.id_user')
            ->join('orang_tua', 'users.id', '=', 'orang_tua.id_user')
            ->join('biodata', 'users.id', '=', 'biodata.id_user')
            ->select('users.*', 'pendidikan_formal.*', 'pendidikan_nonformal.*','orang_tua.*','biodata.*')
            ->get();
        return view('user/search_lowongan', compact('hasil', 'query','datas'));
    }
	else{
		
	}
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
// biodata//

public function insert_biodata(Request $request)
    {
        //
		
     $tambah = new biodata();
	 $tambah->no_ktp = $request['no_ktp'];
	 $tambah->nama = $request['nama'];
     $tambah->alamat = $request['alamat'];
     $tambah->alamat_ktp = $request['alamat_ktp'];
	 $tambah->jenis_kelamin = $request['jenis_kelamin'];
     $tambah->agama = $request['agama'];
     $tambah->status_perkawinan = $request['status_perkawinan'];
	 $tambah->tinggi = $request['tinggi'];
	 $tambah->berat = $request['berat'];
	 $tambah->npwp = $request['npwp'];
	 $tambah->hobi = $request['hobi'];
     $tambah->suku = $request['suku'];
     $tambah->no_hp = $request['no_hp'];
     $tambah->email = $request['email'];
	 $tambah->no_tlp = $request['no_tlp'];
	 $tambah->kendaraan = $request['kendaraan'];
	 $tambah->sim = $request['sim'];
     $tambah->no_sim = $request['no_sim'];
	 $tambah->id_user = $request['id_user'];

	 $tambah1 = new formal();
	 $tambah1->tingkat_pendidikan = $request['tingkat_pendidikan'];
	 $tambah1->jurusan = $request['jurusan'];
     $tambah1->sekolah = $request['sekolah'];
     $tambah1->th_masuk = $request['th_masuk'];
     $tambah1->kota = $request['kota'];
	 $tambah1->th_keluar = $request['th_keluar'];
     $tambah1->id_user = $request['id_user'];
     
	 $tambah2 = new non_formal();
	 $tambah2->jenis_pendidikan = $request['jenis_pendidikan'];
	 $tambah2->penyelengara = $request['penyelengara'];
     $tambah2->tahun = $request['tahun'];
     $tambah2->id_user = $request['id_user']; 
	 
	 $tambah3 = new ortu();
	 $tambah3->nama_ibu = $request['nama_ibu'];
     $tambah3->alamat_ortu = $request['alamat_ortu'];
     $tambah3->pekerjaan = $request['pekerjaan'];
     $tambah3->alamat_ortu = $request['alamat_ortu'];
     $tambah3->id_user = $request['id_user'];
	 
	 $tambah4 = new organisasi();
	 $tambah3->jenis = $request['jenis'];
     $tambah3->nama_organisasi = $request['nama_organisasi'];
     $tambah3->posisi = $request['posisi'];
     $tambah3->tahun = $request['tahun'];
     $tambah3->id_user = $request['id_user'];

    
	 
     $tambah->save();
     $tambah1->save();
     $tambah2->save();
     $tambah3->save();
     $tambah4->save();
	      return redirect()->to('/user/user_home');

	}
	public function lamaran(Request $request)
    {
        //
		
     $tambah = new lamaran();
	 $tambah->id_user = $request['id_user'];
	 $tambah->id_lowongan = $request['id_lowongan'];
     $tambah->status = $request['status'];
	 
     $tambah->save();
   
	      return redirect()->to('/user/user_home');

	}
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
