@extends('layouts.admin.amaster')
@section('title','Ürün Ekleme Sayfası')
@section('keywords','deneme admin anahtar kelimeler')

<!-- content starts -->
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{url('/')}}/admin">Home</a>
        </li>
        <li>
            <a href="#">Ürün Ekleme</a>
        </li>
    </ul>
</div>
<div class="box box-primary">
    <div class="box box-info">
        <h3 class="box-title">Ürün Ekleme Formu</h3>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('/')}}/admin/urun/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Adı</label>

                    <div class="col-sm-10">
                        <input type="text" name="adi" class="form-control"  placeholder="Ürün Adı">
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
                <label class="col-sm-2 control-label">Ürün Türü</label>
                <div class="col-sm-10">
                <select class="form-control" name="turu_id">
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
                    <input type="text" name="stok" value="0" class="form-control"  placeholder="Stok">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alış Fiyatı</label>

                <div class="col-sm-10">
                    <input type="text" name="afiyat" value="0" class="form-control"  placeholder="Alış Fiyatı">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Satış Fiyatı</label>

                <div class="col-sm-10">
                    <input type="text" name="sfiyat" value="0" class="form-control"  placeholder="Satış Fiyatı">
                </div>
            </div>

                 <div class="form-group">
                     <label class="col-sm-2 control-label">Marka</label>

                     <div class="col-sm-10">
                         <select class="form-control" name="marka">
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
                        <option>Evet</option>
                        <option>Hayır</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ürün Açıklama</label>
                <div class="col-sm-10">
                    <textarea name="aciklama" id="aciklama" class="form-control" rows="10" cols="80">



                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ürün Ana Resmi</label>
                <div class="col-sm-10">
                    <input type="file" name="resim">
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