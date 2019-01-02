@extends('layouts.admin.amaster')
@section('title','Ürün İşlemleri')
@section('keywords','deneme admin anahtar kelimeler')


<!-- content starts -->
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Anasayfa</a>
        </li>
        <li>
            <a href="#">Ürünler</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
            <div class="box-content" style="width: 2500px">
                <div class="box col-md-6">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2>Ürün Listesi</h2>
                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <a href="{{url('/')}}/admin/urun/ekle" class="btn btn-success btn-sm">Ürün Ekle</a>

                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                        @endif

                        <div class="box-content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Adı</th>
                                    <th>Turu</th>
                                    <th>Kategorisi</th>
                                    <th>Beden</th>
                                    <th>Fiyat</th>
                                    <th>Marka</th>
                                    <th>Stok</th>
                                    <th>Renk</th>
                                    <th>Durum</th>
                                    <th>Resim</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($urunler as $urun)
                                <tr>
                                    <td>{{$urun->Id}}</td>
                                    <td class="center">{{$urun->adi}}</td>
                                    <td class="center">{{$urun->turu}}</td>
                                    <td class="center">{{$urun->kategori}}</td>
                                    <td class="center">{{$urun->beden}}</td>
                                    <td class="center">{{$urun->sfiyat}}</td>
                                    <td class="center">{{$urun->marka}}</td>
                                    <td class="center">{{$urun->stok}}</td>
                                    <td class="center">{{$urun->renk}}</td>
                                    <td class="center">{{$urun->durum}}</td>
                                    <td class="center"><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="30">
                                    <a href="{{url('/')}}/admin/urun/galeri/{{$urun->Id}}"
                                       onclick="return !window.open(this.href,'','top=100 left=200 width=500,height=600')">Galeri</a>
                                    </td>
                                    <td class="center">
                                            <a href="{{url('/')}}/admin/urun/edit/{{$urun->Id}}" class="btn btn-primary btn-sm"> Düzenle</a>
                                    </td>
                                    <td class="center">
                                        <a href="{{url('/')}}/admin/urun/del/{{$urun->Id}}" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')"> Sil</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <ul class="pagination pagination-centered">
                                <li><a href="#">Prev</a></li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div><!--/row-->


<!-- content ends -->
    @endsection