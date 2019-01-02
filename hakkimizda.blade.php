@extends('layouts.front.fmaster')
@section('title',$data[0]->adi)
@section('keywords',$data[0]->keywords)
@section('description',$data[0]->description)

@section('sidebar')
    @include('front.fsidebar')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 p-b-30">

        </div>

        <div class="col-md-8 p-b-30">
            <h3 class="m-text26 p-t-15 p-b-16">
                Hakkımızda
            </h3>

            <p class="p-b-28">
              {!!$data[0]->hakkimizda!!}
            </p>

            <div class="bo13 p-l-29 m-l-9 p-b-10">

                <span class="s-text7">
							- BestModa
						</span>
            </div>
        </div>
    </div>
@endsection