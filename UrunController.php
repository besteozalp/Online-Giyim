<?php

namespace App\Http\Controllers\Admin;


use App\Urunler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UrunController extends Controller
{

    public function index()
    {
        $sql='select u.Id,u.adi,u.resim,u.marka,u.beden,u.sfiyat,u.stok,u.renk,u.durum,c.adi as kategori,t.adi as turu
              from urunler u,kategoriler c,turler t 
              where u.kategori_id=c.Id and u.turu_id=t.Id
               order by u.adi';

        $urunler=DB::select($sql);

        return view('admin.urun_listesi',['urunler'=>$urunler]);
    }


    public function create()
    {
        //Ekleme Formu
        $turler=DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        return view('admin.urun_ekleme_formu',['turler'=>$turler],['kategoriler'=>$kategoriler]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('urunler')->insert([
            ['adi' => $request->get('adi') ,
                'keywords' => $request->get('keywords'),
                'description'=>$request->description,
                'turu_id'=>$request->turu_id,
                'kategori_id'=>$request->kategori_id,
                'beden'=>$request->beden,
                'stok'=>$request->stok,
                'renk'=>$request->renk,
                'afiyat'=>$request->afiyat,
                'sfiyat'=>$request->sfiyat,
                'marka'=>$request->marka,
                'aciklama'=>$request->aciklama,
                'durum'=>$request->durum,
                'resim' => $name ]
        ]);

        return redirect('admin/urunler')->with('success', 'Ürünler Kaydedildi');
    }

    public function show($id)
    {
        //
        echo"gösterme".$id;
    }


    public function edit($id)
    {
        $turler=DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');


        $veri=DB::select('select u.*,c.adi as kategori,t.adi as turu
              from urunler u,kategoriler c,turler t 
              where u.kategori_id=c.Id and u.turu_id=t.Id and u.Id=?',[$id]);
        return view('admin.urun_duzenleme_formu',compact('veri','turler','kategoriler'));
    }

    public function update(Request $request, $id)
    {

        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('urunler')
        ->where('Id',$id)
        ->update([
                'adi' => $request->adi ,
                'keywords' => $request->keywords,
                'description'=>$request->description,
                'turu_id'=>$request->turu_id,
                'kategori_id'=>$request->kategori_id,
                'beden'=>$request->beden,
                'stok'=>$request->stok,
                'renk'=>$request->renk,
                'afiyat'=>$request->afiyat,
                'sfiyat'=>$request->sfiyat,
                'marka'=>$request->marka,
                'aciklama'=>$request->aciklama,
                'durum'=>$request->durum,
                'resim' => $name
        ]);

        return redirect('admin/urunler')->with('success', $request->adi.' Ürünü Güncellendi');
    }


    public function destroy($id)
    {
       DB::select("DELETE FROM urunler WHERE Id=?",[$id]);
       return redirect('admin/urunler')->with('success','Ürün Silindi');
    }

    public function galeri_formu($id)
    {
        $resimler=DB::select('select * from images where urun_id=?',[$id]);
        $veri=DB::select('SELECT * FROM urunler WHERE Id=?',[$id]);
        return view('admin.urun_galeri_ekleme',compact('veri','resimler'));
    }


    public function galeri_ekle(Request $request)
    {
        //
        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('images')->insert([
            [   'urun_id'=>$request->id,
                'resim' => $name ]
        ]);

        return redirect('admin/urun/galeri/'.$request->id)->with('success', 'Resim Kaydedildi');
    }

    public function galeri_sil($id)
    {
        DB::select("DELETE FROM images WHERE Id=?",[$id]);
        return redirect('admin/urun/galeri/'.$id)->with('success','Galeriden Resim Silindi');
    }


}
