@extends ('layout.masterPage')
@section('title','kurikulum')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center mt-5">
      <h4>KURIKULUM</h4>
      <hr class="garis">
    </div>
  </div>
</div>

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            @forelse($jadwals as $jadwal)
            <div class="col-md-12 text-center mt-3">
                  <h4>{{$jadwal->jadwal}}</h>
            </div>
              <img src="{{asset($jadwal->takeImage())}}" class="img-thumbnail" style="height: 250px; ">
            @empty
              <div class="col-md-12">
                  <div class="alert alert-info text-center">
                      KOSONG
                  </div>
              </div>
            @endforelse
        </div>
    </div>
      <!-- <table class="table">
        <thead>
        <tr scope="col"> 
          <div class="text-center">
            <strong>JADWAL UN</strong>
          </div>
         </tr>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Hari & Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Mata Pelajaran</th>
          </tr>
        </thead>
        <tbody>
        @forelse($jadwals as $jadwal)
          <tr>
            <td scope="row">{{$jadwal->id}}</td>
            <td>{{$jadwal->hari}}</td>
            <td>{{$jadwal->waktu}}</td>
            <td>{{$jadwal->mapel}}</td>
          </tr>
        @empty
          <div class="col-md-12">
              <div class="alert alert-info text-center">
                  KOSONG
              </div>
          </div>
        @endforelse
        </tbody>
      </table> -->
      <div class="d-flex justify-content-center">
      <div>
            {{$jadwals->links()}} 
      </div>
    </div>
    </div>
@stop