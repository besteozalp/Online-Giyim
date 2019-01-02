<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index()
    {
        $data=DB::select('SELECT * FROM settings');
        $turler=DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler=DB::select('SELECT * FROM kategoriler WHERE ust_id=0 ORDER BY adi');
        $yeniler=DB::select('SELECT * FROM urunler ORDER BY adi');
        $popular=DB::select('SELECT * FROM urunler ORDER BY Id');
        $menu="home";
        return view("front.home",compact('turler','kategoriler','yeniler','popular','data','menu'));
    }

    public function urun($id)
    {

        $data=DB::select('SELECT * FROM settings');
        $turler=DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler=DB::select('SELECT * FROM kategoriler WHERE ust_id=0 ORDER BY adi');
        $urun=DB::select('SELECT * FROM urunler WHERE Id=?',[$id]);
        $resimler=DB::select('select * from images where urun_id=?',[$id]);
        $menu="urun";
        return view("front.urun_detay",compact('turler','kategoriler','urun','resimler','menu','data'));
    }

    public function hakkimizda()
    {
        $data=DB::select('SELECT * FROM settings');
        $kategoriler=DB::select('SELECT * FROM kategoriler WHERE ust_id=0 ORDER BY adi');
        $menu="hakkimizda";
        return view("front.hakkimizda",compact('kategoriler','data','menu'));
    }

    public function iletisim()
    {
        $data=DB::select('SELECT * FROM settings');
        $kategoriler=DB::select('SELECT * FROM kategoriler WHERE ust_id=0 ORDER BY adi');
        $menu="iletisim";
        return view("front.iletisim",compact('kategoriler','data','menu'));
    }

    public function bize_yazin_formu()
    {
        $data=DB::select('SELECT * FROM settings');
        $kategoriler=DB::select('SELECT * FROM kategoriler WHERE ust_id=0 ORDER BY adi');
        $menu="bizeyazin";
        return view("front.bizeyazin",compact('kategoriler','data','menu'));
    }

    public function bize_yazin_kaydet(Request $request)
    {
        DB::table('messages')->insert([
            ['name' => $request->get('name') ,
                'email' => $request->get('email'),
                'subject'=>$request->subject,
                'message'=>$request->message,
                'ip' => request()->ip() ]
        ]);
        return redirect('/bize_yazin')->with('success', 'Mesajınız Alınmıştır');
    }



}
