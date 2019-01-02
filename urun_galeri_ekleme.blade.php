
<div class="box box-primary">
    <div class="box box-info">
        <h3 class="box-title">Ürün Galeri Formu</h3>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('/')}}/admin/urun/galeri/{{$veri[0]->Id}}" method="post" enctype="multipart/form-data">
         @csrf
            <div class="box-body">
                <div class="form-group">
                   Ürün Adı :<label class="col-sm-2 control-label">{{$veri[0]->adi}}</label>
                </div>
                <br>
                <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
                <hr>
                Ürün Galeri Resmi: <input type="file" name="resim">
                <input type="hidden" name="id" value="{{$veri[0]->Id}}">

                <button type="submit" class="btn btn-info pull-right">EKLE</button>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif

                @foreach($resimler as $rs)
                    <img src="{{url('/')}}/userfiles/{{$rs->resim}}" height="100">
                    <a href="{{url('/')}}/admin/urun/galerisil/{{$rs->Id}}" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')"> Sil</a>
                @endforeach

            </div>
        </form>
    </div>

</div>
<!-- content ends -->
