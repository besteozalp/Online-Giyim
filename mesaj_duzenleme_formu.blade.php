@extends('layouts.admin.amaster')
@section('title','Mesaj Düzenleme Sayfası')
@section('keywords','deneme admin anahtar kelimeler')

<!-- content starts -->
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Home</a>

        <li>
            <a href="{{url('/')}}/admin/mesajlar">Mesaj Listesi</a>
        </li>
        <li>
            <a href="#">Mesaj Düzenleme</a>
        </li>
    </ul>
</div>
<div class="box box-primary">
    <div class="box box-info">
        <h3 class="box-title">Mesaj Düzenleme Formu</h3>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('/')}}/admin/message/edit/{{$veri[0]->Id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Adı Soyadı</label>

                    <div class="col-sm-10">

                            <input type="text" name="name" value="{{$veri[0]->name}}">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">

                            <input type="email" name="email" value="{{$veri[0]->email}}">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Konu</label>
                    <div class="col-sm-10">
                        <input type="text" name="subject" value="{{$veri[0]->subject}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Ip</label>

                    <div class="col-sm-10">
                        <input type="text" name="ip" value="{{$veri[0]->ip}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Mesaj</label>

                    <div class="col-sm-10">
                        {{$veri[0]->message}}
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label">Tarihler</label>
                    <div class="col-sm-10">
                   Gönderilme:{{$veri[0]->created_at}}<br>
                    Güncelleme:{{$veri[0]->updated_at}}
                    </div>
                </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Durum</label>

                <div class="col-sm-10">
                    {{$veri[0]->status}}
                </div>
            </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">İşlem Notu</label>
                    <div class="col-sm-8">

                            <textarea name="note" class="form-control"> {{$veri[0]->note}}</textarea>

                    </div>
                </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">İPTAL</button>
                <button type="submit" class="btn btn-info pull-right">GÜNCELLE</button>
            </div>
             </div>
            <!-- /.box-footer -->
        </form>
    </div>
    <!-- /.box-header -->
    <!-- form start -->


</div>
<!-- content ends -->
    @endsection

@section("java")
    <script src="{{url('/')}}/assets/admin/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('aciklama')
            //bootstrap WYSIHTML5 - text editor
            //$('.textarea').wysihtml5()
        })
    </script>
@endsection