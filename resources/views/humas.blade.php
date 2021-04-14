@extends ('layout.masterPage')
@section('title','humas dan siswa')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center mt-5">
            <h4>SISWA DAN HUMAS</h4>
            <hr class="garis">
          </div>
      </div>
      <div class="row">
      @forelse($humas as $hms)
      <div class="col-md-12">
            <div class="card mb-4 text-center">
                <img src="{{asset($hms->takeImage())}}" class="img-thumbnail float-left" width=""> 
                <a href="/humas/kegiatan"><div class="card-title ml-3">{{$hms->title}}</div></a>
                <div class="card-body" style="text-align: justify;">
                    {{($hms->body)}}
                    <div class="text-secondary my-3">
                          <span>Published by {{$hms->author->name}} &middot; {{$hms->created_at->format("d F,Y")}}</span>
                      </div>
                      <div class="row">
                @if($hms->imageA)                        
                    <div class="col-sm-6">
                        <img src="{{asset($hms->takeImageA())}}" class="img-thumbnail" style="height: 450px;">             
                    </div>
                @endif
                @if($hms->imageB)
                    <div class="col-sm-6">
                        <img src="{{asset($hms->takeImageB())}}" class="img-thumbnail" style="height: 450px;">
                    </div>
                @endif
                @if($hms->link)
                    <div class="col-md-12 text-center mt-3">
                        <iframe src="{{$hms->link}}" frameborder="0"></iframe>
                    </div>
                @endif
             </div>
                </div>
            </div>
        </div>
      @empty
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                KOSONG
            </div>
        </div>
      @endforelse
      </div>
    </div>
@stop