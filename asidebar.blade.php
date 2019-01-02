<!-- left menu starts -->
<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked">

            </div>
            <ul class="nav nav-pills nav-stacked main-menu">
                <li class="nav-header">Main</li>
                <li><a class="ajax-link" href="{{url('/')}}/admin"><i class="glyphicon glyphicon-home"></i><span> Anasayfa </span></a>
                </li>

                <div class="dropdown">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="dropdown"><i class="glyphicon glyphicon-pencil"></i>Ürün İşlemleri  <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a class="ajax-link" href="{{url('/')}}/admin/urunler"><i class="glyphicon glyphicon-align-justify"></i><span> Ürün Listesi  </span></a>
                    </li>
                    <li><a class="ajax-link" href="{{url('/')}}/admin/kategoriler"><i class="glyphicon glyphicon-tag"></i><span> Kategoriler  </span></a>
                    </li>
                </ul>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"></i>Siparişler  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="{{url('/')}}/admin/siparis_yeni"><i class="glyphicon glyphicon-align-justify"></i><span>Yeni Siparişler</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{url('/')}}/admin/siparisler/Onaylandi"><i class="glyphicon glyphicon-tag"></i><span> Onaylanan Siparişler </span></a>
                        </li>
                        <li><a class="ajax-link" href="{{url('/')}}/admin/siparisler/Kargoda"><i class="glyphicon glyphicon-tag"></i><span> Kargodakiler </span></a>
                        </li>
                        <li><a class="ajax-link" href="{{url('/')}}/admin/siparisler/Tamamlandi"><i class="glyphicon glyphicon-tag"></i><span> Bitenler  </span></a>
                        </li>
                        <li><a class="ajax-link" href="{{url('/')}}/admin/siparisler/İptal"><i class="glyphicon glyphicon-tag"></i><span> İptal  </span></a>
                        </li>
                    </ul>
                </div>

                <li><a class="ajax-link" href="{{url('/')}}/admin/mesajlar"><i class="glyphicon glyphicon-comment"></i><span> Müşteri Mesajları </span></a>
                </li>

                <li><a class="ajax-link" href="{{url('/')}}/admin/uyeler"><i class="glyphicon glyphicon-user"></i><span> Üyeler </span></a>
                </li>

                <li><a class="ajax-link" href="{{url('/')}}/admin/settings"><i class="glyphicon glyphicon-cog"></i><span> Ayarlar </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/span-->
<!-- left menu ends -->