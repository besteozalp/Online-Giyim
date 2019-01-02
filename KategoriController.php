<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function index()
    {

        $kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        return view('admin.kategori_listesi',['datas'=>$kategoriler]);
    }


    public function create()
    {

        $kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        return view('admin.kategori_ekleme_formu',['kategoriler'=>$kategoriler]);
    }


    public function store(Request $request)
    {
        //
        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('kategoriler')->insert([
            ['adi' => $request->get('adi') ,
                'keywords' => $request->get('keywords'),
                'description'=>$request->description,
                'ust_id'=>$request->ust_id,
                'durum'=>$request->durum,
                'resim' => $name ]
        ]);

        return redirect('admin/kategoriler')->with('success', 'Kategoriler Kaydedildi');
    }

    public function show($id)
    {
        //
        echo"gösterme".$id;
    }


    public function edit($id)
    {

        $kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $veri=DB::select('select a.*,b.adi as kategori
                                from kategoriler a left join kategoriler b
                                on a.ust_id=b.Id
                                where a.Id=?',[$id]);
        return view('admin.kategori_duzenleme_formu',compact('veri','kategoriler'));
    }

    public function update(Request $request, $id)
    {

        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('kategoriler')
        ->where('Id',$id)
        ->update([
            'adi' => $request->get('adi') ,
            'keywords' => $request->get('keywords'),
            'description'=>$request->description,
            'ust_id'=>$request->ust_id,
            'durum'=>$request->durum,
            'resim' => $name
        ]);

        return redirect('admin/kategoriler')->with('success', $request->adi.' kategorisi Güncellendi');
    }


    public function destroy($id)
    {
       DB::select("DELETE FROM kategoriler WHERE Id=?",[$id]);
       return redirect('admin/kategoriler')->with('success','Kategori Silindi');
    }
}
