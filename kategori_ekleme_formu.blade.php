@extends('layouts.admin.amaster')
@section('title','Kategori Ekleme Sayfası')
@section('keywords','deneme admin anahtar kelimeler')

<!-- content starts -->
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Home</a>
        </li>
        <li>
            <a href="#">Kategori Ekleme</a>
        </li>
    </ul>
</div>
<div class="box box-primary">
    <div class="box box-info">
        <h3 class="box-title">Kategori Ekleme Formu</h3>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('/')}}/admin/kategori/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori Adı</label>

                    <div class="col-sm-10">
                        <input type="text" name="adi" required class="form-control"  placeholder="Kategori Adı">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Keywords-Anahtar Kelimeler</label>

                    <div class="col-sm-10">
                        <input type="text" name="keywords" class="form-control"  placeholder="Keywords">
                    </div>
                </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Description-Açıklama</label>

        <div class="col-sm-10">
            <input type="text" name="description" class="form-control"  placeholder="Description">
        </div>
    </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Kategorisi</label>
                <div class="col-sm-10">
                    <select class="form-control" name="ust_id">
                        <option value="0">Kategori Yok</option>
                        @foreach($kategoriler as $rs)
                            <option value="{{$rs->Id}}">{{$rs->adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label">Aktif Durum</label>

                <div class="col-sm-10">
                    <select class="form-control" name="durum">
                        <option>Evet</option>
                        <option>Hayır</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Kategori Ana Resmi</label>
                <div class="col-sm-10">
                    <input type="file" required name="resim">
                </div>
                <p class="help-block">Resim dosyası seçiniz</p>
            </div>


            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">İPTAL</button>
                <button type="submit" class="btn btn-info pull-right">KAYDET</button>
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