@extends('layouts.front.fmaster')
@section('title',$data[0]->adi)
@section('keywords',$data[0]->keywords)
@section('description',$data[0]->description)

@section('sidebar')
    @include('front.fsidebar')
@endsection

@section('blog')
    @include('front.blog')
@endsection

@section('shipping')
    @include('front.shipping')
@endsection

@section('content')
    @include('front.content')
@endsection