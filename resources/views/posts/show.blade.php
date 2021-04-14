@extends('layout.masterPage');
@section('title','The post');
@section('content')
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col-md-12 mb-5">
                <img src="{{asset($artikel->takeImage())}}" class="img-thumbnail" style="height: 450px;">
                <h5>{{$artikel ->title}}</h5>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{{$artikel->body}}</p>
                    <div class="text-secondary mb-3">
                        {{$artikel->author->name}} &middot; {{$artikel->created_at->format("d F,Y")}}
                    </div>
                    <div class="col-md-12 mt-3">
                        <p>Artikel terkait :</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($artikel->imageA)                        
                    <div class="col-sm-6">
                        <img src="{{asset($artikel->takeImageA())}}" class="img-thumbnail" style="height: 450px;">             
                    </div>
                @endif
                @if($artikel->imageB)
                    <div class="col-sm-6">
                        <img src="{{asset($artikel->takeImageB())}}" class="img-thumbnail" style="height: 450px;">
                    </div>
                @endif
                @if($artikel->link)
                    <div class="col-md-12 text-center mt-3">
                        <iframe src="{{$artikel->link}}" frameborder="0"></iframe>
                        
                    </div>
                @endif
             </div>
    </div>
@endsection
