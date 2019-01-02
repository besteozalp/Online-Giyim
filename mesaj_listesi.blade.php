@extends('layouts.admin.amaster')
@section('title','Mesajlar')
@section('keywords','deneme admin anahtar kelimeler')


<!-- content starts -->
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Anasayfa</a>
        </li>
        <li>
            <a href="#">Mesajlar</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
            <div class="box-content" style="width: 2500px">
                <div class="box col-md-6">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2>Mesaj Listesi</h2>
                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>


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
                                    <th>Email</th>
                                    <th>Konu</th>
                                    <th>Durum</th>
                                    <th>Oku</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $rs)
                                <tr>
                                    <td>{{$rs->Id}}</td>
                                    <td class="center">{{$rs->name}}</td>
                                    <td class="center">{{$rs->email}}</td>
                                    <td class="center">{{$rs->subject}}</td>
                                    <td class="center">{{$rs->status}}</td>
                                    <td class="center">
                                            <a href="{{url('/')}}/admin/message/edit/{{$rs->Id}}" class="btn btn-primary btn-sm"> Oku/Detay</a>
                                    </td>
                                    <td class="center">
                                        <a href="{{url('/')}}/admin/message/del/{{$rs->Id}}" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')"> Sil</a>
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