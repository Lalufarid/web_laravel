@extends ('layout.masterPage')
@section('title','guru dan staff')
@section('content')
<div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 text-center mt-5">
          <h4>GURU DAN STAFF SMAN 2 PRAYA</h4>
          <hr class="garis">
        </div>
      </div>
        <div class="row info-guru">
        @forelse($gurus as $guru)
        <div class="col-md-6 mb-3">
            <img src="{{asset($guru->takeImage())}}" class="img-thumbnail float-left" width="200px">
            <span>Nama  : {{$guru->name}}</span><br>
            <span>Alamat: {{$guru->alamat}}</span><br>
            <span>Guru  : {{$guru->mapel}}</span>
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
@endsection