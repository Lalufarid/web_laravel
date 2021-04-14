@extends('layout.masterPage');
@section('title','The post');
@section('content')
<div class="container">
        <div class="row text-center mt-5">
            <div class="col-md-12 mb-5">
                <img src="{{asset($humas->takeImage())}}" class="img-thumbnail" style="height: 450px;">
                <h5>{{$humas->title}}</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{{$humas->body}}</p>
                   
                    <div class="col-md-12 mt-3">
                        <p>Artikel terkait :</p>
                    </div>
                </div>
            </div>
            <div class="row">                        
                <div class="col-sm-6">
                    <img src="{{asset($humas->takeImageA())}}" class="img-thumbnail" style="height: 450px;">             
                </div>
                <div class="col-sm-6">
                    <img src="{{asset($humas->takeImageB())}}" class="img-thumbnail" style="height: 450px;">
                </div>
                <div class="col-md-12 text-center mt-3">
                    <iframe src="{{$humas->link}}" frameborder="0"></iframe>
                </div>
             </div>
    </div>
@endsection
