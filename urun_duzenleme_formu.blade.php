@extends('layouts.admin.amaster')
@section('title','Ürün Düzenleme Sayfası')
@section('keywords','deneme admin anahtar kelimeler')

<!-- content starts -->
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Home</a>

        <li>
            <a href="{{url('/')}}/admin/urunler">Ürün Listesi</a>
        </li>
        <li>
            <a href="#">Ürün Düzenleme</a>
        </li>
    </ul>
</div>
<div class="box box-primary">
    <div class="box box-info">
        <h3 class="box-title">Ürün Düzenleme Formu</h3>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('/')}}/admin/urun/update/{{$veri[0]->Id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Adı</label>

                    <div class="col-sm-10">
                        <input type="text" name="adi" value="{{$veri[0]->adi}}" class="form-control"  placeholder="Ürün Adı">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Keywords-Anahtar Kelimeler</label>

                    <div class="col-sm-10">
                        <input type="text" name="keywords" value="{{$veri[0]->keywords}}" class="form-control"  placeholder="Keywords">
                    </div>
                </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Description-Açıklama</label>

        <div class="col-sm-10">
            <input type="text" name="description" value="{{$veri[0]->description}}" class="form-control"  placeholder="Description">
        </div>
    </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ürün Türü</label>
                <div class="col-sm-10">
                <select class="form-control" name="turu_id">
                    <option selected value="{{$veri[0]->turu_id}}">{{$veri[0]->turu}}</option>
                    @foreach($turler as $rs)
                    <option value="{{$rs->Id}}">{{$rs->adi}}</option>
                        @endforeach
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kategorisi</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kategori_id">
                        <option selected value="{{$veri[0]->kategori_id}}">{{$veri[0]->kategori}}</option>
                        @foreach($kategoriler as $rs)
                            <option value="{{$rs->Id}}">{{$rs->adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Beden</label>
                <div class="col-sm-10">
                    <select class="form-control" name="beden">
                        <option selected>{{$veri[0]->beden}}</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                    </select>
                </div>
            </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Renk</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="renk">
                            <option selected>{{$veri[0]->renk}}</option>
                            <option>Beyaz</option>
                            <option>Siyah</option>
                            <option>Kırmızı</option>
                            <option>Turuncu</option>
                            <option>Sarı</option>
                            <option>Yeşil</option>
                            <option>Mavi</option>
                            <option>Lacivert</option>
                            <option>Kahverengi</option>
                            <option>Mor</option>
                            <option>Bej</option>
                            <option>Mavi</option>
                            <option>Nude</option>
                            <option>Pembe</option>
                            <option>Haki Yeşili</option>
                            <option>Karışık Renkli</option>
                        </select>
                    </div>
                </div>



                <div class="form-group">
                <label class="col-sm-2 control-label">Stok</label>

                <div class="col-sm-10">
                    <input type="text" name="stok" value="{{$veri[0]->stok}}" class="form-control"  placeholder="Stok">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alış Fiyatı</label>

                <div class="col-sm-10">
                    <input type="text" name="afiyat" value="{{$veri[0]->afiyat}}" class="form-control"  placeholder="Alış Fiyatı">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Satış Fiyatı</label>

                <div class="col-sm-10">
                    <input type="text" name="sfiyat" value="{{$veri[0]->sfiyat}}" class="form-control"  placeholder="Satış Fiyatı">
                </div>
            </div>

                 <div class="form-group">
                     <label class="col-sm-2 control-label">Marka</label>

                     <div class="col-sm-10">
                         <select class="form-control" name="marka">
                             <option selected>{{$veri[0]->marka}}</option>
                             <option>Zara</option>
                             <option>Mango</option>
                             <option>H&M</option>
                             <option>Bershka</option>
                             <option>Pull&Bear</option>
                             <option>Stradivarius</option>
                             <option>OXXO</option>
                             <option>İpekyol</option>
                             <option>Adil Işık</option>
                             <option>De Facto</option>
                             <option>US Polo</option>
                             <option>Mavi</option>
                             <option>Colin's</option>
                             <option>Beymen</option>
                             <option>Piere Cardin</option>
                             <option>Koton</option>
                             <option>Forever21</option>
                             <option>Nine West</option>
                             <option>Hotiç</option>
                             <option>Derimod</option>
                             <option>Elle</option>
                             <option>Kemal Tanca</option>
                             <option>Altın Yıldız Classics</option>
                             <option>Kiğılı</option>
                             <option>Ramsey</option>
                         </select>
                     </div>
                 </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Aktif Durum</label>

                <div class="col-sm-10">
                    <select class="form-control" name="durum">
                        <option selected>{{$veri[0]->durum}}</option>
                        <option>Evet</option>
                        <option>Hayır</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ürün Açıklama</label>
                <div class="col-sm-10">
                    <textarea name="aciklama" id="aciklama" class="form-control" rows="10" cols="80">

                       {{$veri[0]->aciklama}}

                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ürün Ana Resmi</label>
                <div class="col-sm-10">
                    <input type="file" value="{{$veri[0]->resim}}" name="resim">
                </div>
                <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
                <p class="help-block">Resim dosyası seçiniz</p>
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