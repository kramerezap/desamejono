<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\tb_keluarga;
use App\tb_potensi;
use App\tb_berita;
use App\tb_galeri;
use App\tb_inbox;
use App\tb_penduduk;
use App\tb_rw;
use App\tb_rt;
use App\tb_status;
use App\tb_suratmasuk;
use App\tb_suratkeluar;
use App\tb_laporan;
use File;


class BlogController extends Controller
{
    public function beranda(){
    	Session::put('page','beranda');
    	return view('web/beranda');
    }
    public function berita(){
        Session::put('page','berita');
        return view('web/berita');
    }
     public function potensi(){
        Session::put('page','potensi');
        return view('web/potensi');
    }
      public function galeri(){
        Session::put('page','galeri');
        return view('web/galeri');
    }
          public function kontak(){
        Session::put('page','kontak');
        return view('web/kontak');
    }
    public function profil(){
    	    	Session::put('page','profil');

    	return view('web/profil');
    }
     public function profilsejarah(){
    	Session::put('page','profil');
    	return view('web/profilsejarah');
    	
    }
     public function profilstruktur(){
    Session::put('page','profil');
    	return view('web/profilstruktur');
    }
  // public function admindashboard(){
  //   	return view('admin/dashboard');
  //   }
     public function profilanggaran(){
        return view('web/profilanggaran');
    }

    public function laporlurah(){
        return view('web/laporlurah');
    }

     
    public function adminlogin(){
    	return view('admin/login');
    }


  
    public function adminloginaction(Request $request){
        $USERNAME = $request->USERNAME;
        $PASSWORD = $request->PASSWORD;
        
        $data = DB::table('tb_user')->where([['USERNAME',$USERNAME],['PASSWORD',$PASSWORD]])->get();
        if(count($data) > 0) {
            Session::put('USERNAME',$USERNAME);
            Session::put('PASSWORD',$PASSWORD);
            Session::put('login',TRUE);
            
            return redirect('admin');

        }
        else {
        	Session::put('message', 'Email atau Password tidak cocok !'); 
            return redirect('adminlogin');

        }
    }

    public function admindashboard(){
        return View('admin/homeadmin');
    }                       
    

    public function adminpotensi(){
        return View('admin/adminpotensi');
    }   
     public function adminlaporan(){
        return View('admin/adminlaporan');
    }                       
    
	public function adminkeluarga(){
        Session::put('page','keluarga');
    	return view('admin/adminkeluarga');
    }
    public function adminkeuangan(){
        Session::put('page','keuangan');
        return view('admin/adminkeuangan');
    }
    public function admingaleri(){
        Session::put('page','galeri');
        return view('admin/admingaleri');
    }
    public function adminberita(){
        Session::put('page','berita');
        return view('admin/adminberita');
    }
    public function adminpenduduk(){
        Session::put('page','penduduk');
        return view('admin/adminpenduduk');
    }
     public function adminsuratmasuk(){
        Session::put('page','suratmasuk');
        return view('admin/adminsuratmasuk');
    }
    public function adminsuratkeluar(){
        Session::put('page','suratkeluar');
        return view('admin/adminsuratkeluar');
    }
    /* public function adminpenduduk(){
        Session::put('page','penduduk');
    	return view('admin/adminpenduduk');
    } */
    public function admininsertkeluarga(Request $request)
    {
        $NO_KK = $request->NO_KK;
        $ID_RT = $request->ID_RT;
        $ID_RW = $request->ID_RW;
        
        $ALAMAT = $request->alamat;
        $VIEW = 1;

        $data = new tb_keluarga();
        $data->NO_KK = $NO_KK;
        $data->ID_RT = $ID_RT;
        $data->ID_RW = $ID_RW;
        
        $data->ALAMAT = $ALAMAT;
        $data->VIEW = $VIEW;
        $data->save();
        
        return redirect('/adminkeluarga');
    } 
     public function admininsertrw(Request $request)
    {
        $NO_RW = $request->NO_RW;
        

        $data = new tb_rw();
        $data->NO_RW = $NO_RW;
        $data->save();
        
        return redirect('/adminrtrw');
    } 
    public function admininsertrt(Request $request)
    {
        $ID_RW = $request->ID_RW;
        $NO_RT = $request->NO_RT;

        $data = new tb_rt();
        $data->ID_RW = $ID_RW;
        $data->NO_RT = $NO_RT;
        $data->save();
        
        return redirect('/adminrtrw');
    } 
    public function admininsertpenduduk(Request $request)
    {
        $NO_KTP = $request->NO_KTP;
        $NO_KK = $request->NO_KK;
        $ID_PENDIDIKAN = $request->ID_PENDIDIKAN;
        $ID_STATUSDLMKEL = $request->ID_STATUSDLMKEL;
        $ID_PEKERJAAN = $request->ID_PEKERJAAN;
        $ID_AGAMA = $request->ID_AGAMA;
        $ID_STATUS = $request->ID_STATUS;
        $NAMA_LENGKAP = $request->NAMA_LENGKAP;
        $TEMPAT_LHR = $request->TEMPAT_LHR;
        $TGL_LHR = $request->TGL_LHR;
        $NOTELP = $request->NOTELP;
        $VIEW = 1;

        $data = new tb_penduduk();
        $data->NO_KTP = $NO_KTP;
        $data->NO_KK = $NO_KK;
        $data->ID_PENDIDIKAN = $ID_PENDIDIKAN;
        $data->ID_STATUSDLMKEL = $ID_STATUSDLMKEL;
        $data->ID_PEKERJAAN = $ID_PEKERJAAN;
        $data->ID_AGAMA = $ID_AGAMA;
        $data->ID_STATUS = $ID_STATUS;
        $data->NAMA_LENGKAP = $NAMA_LENGKAP;
        $data->TEMPAT_LHR = $TEMPAT_LHR;
        $data->TGL_LHR = $TGL_LHR;
        $data->NOTELP = $NOTELP;
        $data->VIEW = $VIEW;
        $data->save();
        
        return redirect('/adminkeluarga');
    } 
    
    
    public function hapuskeluarga($id)
    {
        DB::table('tb_keluarga')->where('NO_KK',$id)->update(['VIEW'=>0]);
          DB::table('tb_penduduk')->where('NO_KK',$id)->update(['VIEW'=>0]);
        return redirect('/adminkeluarga');
    }
    public function bacaberita($id)
    {
        $berita=DB::table('tb_berita')->where('ID_BERITA',$id)->get();
          
        return view('web/bacaberita',['berita'=>$berita]);
    }
        public function hapuspotensi($id)
    {
        DB::table('tb_potensi')->where('ID_POTENSI',$id)->update(['VIEW' => 0]);
        return redirect('/adminpotensi');
    }
    public function hapussuratmasuk($id)
    {
        DB::table('tb_suratmasuk')->where('ID_SURAT',$id)->delete();
        return redirect('/adminsuratmasuk');
    }
      public function hapussuratkeluar($id)
    {
        DB::table('tb_suratkeluar')->where('ID_SURAT2',$id)->delete();
        return redirect('/adminsuratkeluar');
    }
        public function hapusgaleri($id)
    {
        DB::table('tb_galeri')->where('ID_GALERI',$id)->update([
        'VIEW' => 0]);
        return redirect('/admingaleri');
    }
    public function hapuspenduduk($id)
    {
        DB::table('tb_penduduk')->where('NO_KTP',$id)->delete();
        return redirect('/adminpenduduk');
    }    
    public function hapusrw($id)
    {
        DB::table('tb_rw')->where('ID_RW',$id)->delete();
        return redirect('/adminrtrw');
    }    
    public function hapusberita($id)
    {
        DB::table('tb_berita')->where('ID_BERITA',$id)->update(['VIEW'=>0]);
        return redirect('/adminberita');
    }   


   public function admininsertpotensi(Request $request)
    {
        $judul_potensi = $request->judul;
        $isi_potensi = $request->isi;
        $GAMBAR = $request->GAMBAR;

        $data = new tb_potensi();
        $data->JUDUL_POTENSI = $judul_potensi;
        
        $data->ISI_POTENSI = $isi_potensi;
        $data->GAMBAR = $GAMBAR;
         $data->ID_USER = 1;
         $data->VIEW=1;
         if ($request->hasFile('GAMBAR')) {
             $request->file('GAMBAR')->move('Assets/images/potensidesa/',$request->file('GAMBAR')->getClientOriginalName());
             $data->GAMBAR = $request->file('GAMBAR')->getClientOriginalName();
        $data->save();
         }
        
        
        return redirect('/adminpotensi');
    }
    public function admininsertsuratmasuk(Request $request)
    {
        $NO_SURAT = $request->NO_SURAT;
        $TGL_BUAT = $request->TGL_BUAT;
        $TGL_KIRIM = $request->TGL_KIRIM;
         $DARI = $request->DARI;
        $KE = $request->KE;

        $data = new tb_suratmasuk();
        $data->NO_SURAT = $NO_SURAT;
        
        $data->TGL_BUAT = $TGL_BUAT;
        $data->TGL_KIRIM = $TGL_KIRIM;
         $data->DARI = $DARI;
         $data->KE=$KE;
        
        $data->save();
        
        
        
        return redirect('/adminsuratmasuk');
    }

    public function admininsertsuratkeluar(Request $request)
    {
        $NO_SURAT = $request->NO_SURAT;
        $TGL_BUAT = $request->TGL_BUAT;
        $TGL_KIRIM = $request->TGL_KIRIM;
         $DARI = $request->DARI;
        $KE = $request->KE;

        $data = new tb_suratkeluar();
        $data->NO_SURAT = $NO_SURAT;
        
        $data->TGL_BUAT = $TGL_BUAT;
        $data->TGL_KIRIM = $TGL_KIRIM;
         $data->DARI = $DARI;
         $data->KE=$KE;
        
        $data->save();
        
        
        
        return redirect('/adminsuratkeluar');
    }

        public function updatepotensi(Request $request, $id)
    {
        $judul_potensi = $request->judul;
        $isi_potensi = $request->isi;
        $GAMBAR = DB::select("select*from tb_potensi where ID_POTENSI = '$id'");
        foreach ($GAMBAR as $key) {
            $image_path = "Assets/images/potensidesa/$key->GAMBAR";  
            if(File::exists($image_path)) {
            File::delete($image_path);
            }
        }

            $photo_path=$request->file('GAMBAR');

            $m_path=$photo_path->getClientOriginalName();
            $photo_path->move('Assets/images/potensidesa/',$m_path);


       

        $data = DB::table('tb_potensi')->where('ID_POTENSI',$id)->update(['JUDUL_POTENSI'=>$judul_potensi,'ISI_POTENSI'=>$isi_potensi,'GAMBAR'=>$m_path]);
        return redirect('/adminpotensi');
        
    }

    public function admininsertberita(Request $request)
    {
        $judul_berita = $request->judul;
        $isi_berita = $request->isi;
        $GAMBAR = $request->GAMBAR;

        $data = new tb_berita();
        $data->JUDUL_BERITA = $judul_berita;
        $data->ISI_BERITA = $isi_berita;
        $data->GAMBAR = $GAMBAR;
         $data->ID_USER = 1;
         $data->VIEW = 1;

         if ($request->hasFile('GAMBAR')) {
             $request->file('GAMBAR')->move('Assets/images/berita/',$request->file('GAMBAR')->getClientOriginalName());
             $data->GAMBAR = $request->file('GAMBAR')->getClientOriginalName();
        $data->save();
         }
        
        
        return redirect('/adminberita');
    }
    public function laporlurahact(Request $request)
    {
        $NAMA = $request->namalengkap;
        $EMAIL = $request->email;
        $ISI = $request->isi;
        $GAMBAR = $request->GAMBAR;
        

        $data = new tb_laporan();
        $data->NAMA = $NAMA;
        $data->EMAIL = $EMAIL;
        $data->ISI_LAPORAN = $ISI;
        $data->GAMBAR = $GAMBAR;
      
         if ($request->hasFile('GAMBAR')) {
             $request->file('GAMBAR')->move('Assets/images/laporan/',$request->file('GAMBAR')->getClientOriginalName());
             $data->GAMBAR = $request->file('GAMBAR')->getClientOriginalName();
        $data->save();
         }
        
        return redirect('laporlurah');
    }


    public function admininsertgaleri(Request $request)
    {
        $judul_galeri = $request->judul;
        $URL_GALERI = $request->URL_GALERI;

        $data = new tb_galeri();
        $data->JUDUL_GALERI= $judul_galeri;
        $data->URL_GALERI = $URL_GALERI;
         $data->ID_USER = 1;
         if ($request->hasFile('URL_GALERI')) {
             $request->file('URL_GALERI')->move('Assets/images/galeri/',$request->file('URL_GALERI')->getClientOriginalName());
             $data->URL_GALERI = $request->file('URL_GALERI')->getClientOriginalName();
        $data->VIEW = 1;
        $data->save();
         }
        
        
        return redirect('/admingaleri');
    }
    public function adminpesan(){
        return View('admin/adminpesan');
    }     
    public function rtrw(){
        return View('admin/adminrw');
    }     

    public function insertpesan(Request $request)
    {
        $NAMA_LENGKAP = $request->namalengkap;
        $EMAIL = $request->email;
        $PESAN = $request->pesan;
        $STATUS = 'Belum Dibaca';

        $data = new tb_inbox();
        $data->NAMA_LENGKAP = $NAMA_LENGKAP;
        $data->EMAIL = $EMAIL;
        $data->PESAN = $PESAN;
        $data->STATUS = $STATUS;
        $data->save();
        
        return redirect('kontak');
    }

     public function updateberita(Request $request, $id)
    {
        $judul_berita = $request->judul;
        $isi_berita = $request->isi;
        $GAMBAR = DB::select("select*from tb_berita where ID_BERITA = '$id'");
        foreach ($GAMBAR as $key) {
            $image_path = "Assets/images/berita/$key->GAMBAR";  
            if(File::exists($image_path)) {
            File::delete($image_path);
            }
        }

            $photo_path=$request->file('GAMBAR');

            $m_path=$photo_path->getClientOriginalName();
            $photo_path->move('Assets/images/berita/',$m_path);


       

        $data = DB::table('tb_berita')->where('ID_BERITA',$id)->update(['JUDUL_BERITA'=>$judul_berita,'ISI_BERITA'=>$isi_berita,'GAMBAR'=>$m_path]);
        return redirect('/adminberita');
        

    }  
    public function updategaleri(Request $request, $id)
    {
        $judul_galeri = $request->judul;
        $URL_GALERI = DB::select("select*from tb_galeri where ID_GALERI = '$id'");
        foreach ($URL_GALERI as $key) {
            $image_path = "Assets/images/galeri/$key->URL_GALERI";  
            if(File::exists($image_path)) {
            File::delete($image_path);
            }
        }

            $photo_path=$request->file('URL_GALERI');

            $m_path=$photo_path->getClientOriginalName();
            $photo_path->move('Assets/images/galeri/',$m_path);


       

        $data = DB::table('tb_galeri')->where('ID_GALERI',$id)->update(['JUDUL_GALERI'=>$judul_galeri,'URL_GALERI'=>$m_path]);
        return redirect('/admingaleri');
        
    }   
    public function updatekeluarga(Request $request, $id)
    {
        $NO_KK = $request->NO_KK;
        $ID_RT = $request->ID_RT;
        $ID_RW = $request->ID_RW;
        
        $ALAMAT = $request->alamat;

       

        $data = DB::table('tb_keluarga')->where('NO_KK',$id)->update(['NO_KK'=>$NO_KK,'ID_RT'=>$ID_RT,'ID_RW'=>$ID_RW, 'ALAMAT'=>$ALAMAT,]);
         DB::table('tb_penduduk')->where('NO_KK',$id)->update(['NO_KK'=>$NO_KK]);
        return redirect('/adminkeluarga');
        
    }   
    public function updatependuduk(Request $request, $id)
    {
        $NO_KTP = $request->NO_KTP;
        $NO_KK = $request->NO_KK;
        $ID_PENDIDIKAN = $request->ID_PENDIDIKAN;
        $ID_STATUSDLMKEL = $request->ID_STATUSDLMKEL;
        $ID_PEKERJAAN = $request->ID_PEKERJAAN;
        $ID_AGAMA = $request->ID_AGAMA;
        $ID_STATUS = $request->ID_STATUS;
        $NAMA_LENGKAP = $request->NAMA_LENGKAP;
        $TEMPAT_LHR = $request->TEMPAT_LHR;
        $TGL_LHR = $request->TGL_LHR;
        $NOTELP = $request->NOTELP;

       

        $data = DB::table('tb_penduduk')->where('NO_KTP',$id)->update(['NO_KTP'=>$NO_KTP,'NO_KK'=>$NO_KK,'ID_PENDIDIKAN'=>$ID_PENDIDIKAN, 'ID_STATUSDLMKEL'=>$ID_STATUSDLMKEL,'ID_PEKERJAAN'=>$ID_PEKERJAAN,'ID_AGAMA'=>$ID_AGAMA,'ID_STATUS'=>$ID_STATUS,'NAMA_LENGKAP'=>$NAMA_LENGKAP,'TEMPAT_LHR'=>$TEMPAT_LHR,'TGL_LHR'=>$TGL_LHR,'NOTELP'=>$NOTELP,]);
        return redirect('/adminpenduduk');
        
    }   
    public function updatesuratmasuk(Request $request, $id)
    {
       $NO_SURAT = $request->NO_SURAT;
        $TGL_BUAT = $request->TGL_BUAT;
        $TGL_KIRIM = $request->TGL_KIRIM;
         $DARI = $request->DARI;
        $KE = $request->KE;

       

        $data = DB::table('tb_suratmasuk')->where('ID_SURAT',$id)->update(['NO_SURAT'=>$NO_SURAT,'TGL_BUAT'=>$TGL_BUAT,'TGL_KIRIM'=>$TGL_KIRIM,'DARI'=>$DARI,'KE'=>$KE]);
        return redirect('/adminsuratmasuk');
        
    }   
    public function updatesuratkeluar(Request $request, $id)
    {
       $NO_SURAT = $request->NO_SURAT;
        $TGL_BUAT = $request->TGL_BUAT;
        $TGL_KIRIM = $request->TGL_KIRIM;
         $DARI = $request->DARI;
        $KE = $request->KE;

       

        $data = DB::table('tb_suratkeluar')->where('ID_SURAT2',$id)->update(['NO_SURAT'=>$NO_SURAT,'TGL_BUAT'=>$TGL_BUAT,'TGL_KIRIM'=>$TGL_KIRIM,'DARI'=>$DARI,'KE'=>$KE]);
        return redirect('/adminsuratkeluar');
        
    }   
    
}
