<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        return view("admin.home");
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function urunler()
    {
        $urunler=DB::select('select * from urunler order by adi');

        return view("admin.urun_listesi",['urunler'=>$urunler]);
    }
    public function settings()
    {
        $data=DB::select('SELECT * FROM settings');
        return view("admin.settings",['data'=>$data]);
    }

    public function settingsupdate(Request $request, $id)
    {

        DB::table('settings')
            ->where('Id',$id)
            ->update([
                'adi' => $request->adi ,
                'keywords' => $request->keywords,
                'description'=>$request->description,
                'adres'=>$request->adres,
                'tel'=>$request->tel,
                'smtpserver'=>$request->smtpserver,
                'smtpemail'=>$request->smtpemail,
                'smtppassword'=>$request->smtppassword,
                'smtpport'=>$request->smtpport,
                'iletisim'=>$request->iletisim,
                'hakkimizda'=>$request->hakkimizda,
            ]);

        return redirect('admin/settings')->with('success', $request->adi.' Ayarlar Güncellendi');
    }

    public function messages()
    {

        $data=DB::select('SELECT * FROM messages ORDER BY id DESC');
        return view('admin.mesaj_listesi',['datas'=>$data]);
    }
    public function message_edit($id)
    {

        $data=DB::select('SELECT * FROM messages WHERE id='.$id);
        return view('admin.mesaj_duzenleme_formu',['veri'=>$data]);
    }

    public function message_update(Request $request, $id)
    {

        DB::table('messages')
            ->where('Id',$id)
            ->update([
                'note' => $request->note ,
                'status' => 'Okundu'
            ]);

        return redirect('admin/mesajlar')->with('success',' Mesaj Okundu/ Güncellendi');
    }
    public function message_del($id)
    {
        DB::select("DELETE FROM messages WHERE Id=?",[$id]);
        return redirect('admin/mesajlar')->with('success','Mesaj Silindi');
    }

    public function uye()
    {
        $data=DB::select('SELECT * FROM users ORDER BY id');
        return view('admin.uyeler',['datas'=>$data]);
    }

    public function uye_edit($id)
    {

        $data=DB::select('SELECT * FROM users WHERE id='.$id);
        return view('admin.uye_duzenleme_formu',['veri'=>$data]);
    }

}
