@extends('layout.masterPage')
@section('title','home')
@section('content')


  <div class="jumbotron">
  <div class="container">
    <h1 class="display-4">SELAMAT DATANG DI WEBSITE  <br> SMAN 2 PRAYA </h1>
    <img src="../img/logo.png" alt="" width="100px">
  </div>
</div>

<section class="roaster">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h4>TEMUKAN INFORMASI TENTANG SMAN 2 PRAYA</h4>
        <hr>
        <h4>VISI DAN MISI</h4>
        <p class="visi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime natus possimus est eaque amet dolorum earum nisi maiores aspernatur omnis unde repellendus, consequuntur tenetur error veniam sunt enim saepe harum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, autem cum nihil quae dolore ea reprehenderit adipisci ducimus. Numquam pariatur fugiat eius aperiam, ab quisquam consectetur harum alias cum repudiandae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus id quibusdam neque maxime quos tempore doloribus corrupti facilis illum vitae voluptatem dicta soluta, repudiandae quam magni provident a ad exercitationem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officia laborum nisi accusantium natus nemo magni nostrum molestiae est nihil placeat perferendis, earum dolor, repellat, reprehenderit tenetur dignissimos in libero!</p>
       
        <h4>GURU DAN STAFF</h4>
      </div>
    </div>
    <div class="row info-guru py-2">
    @forelse($gurus as $guru)
        <div class="col-md-4 mt-3">
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
    <div class="row mt-4">
      <div class="col-sm-12 text-center">
        <a class="btn btn-primary text-center" href="\guru">Lihat Semua Guru dan Staff</a>
      </div>
    </div>
  </div>
</section>

<section class="tulisan">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-3">
        <a href="\artikel"><h4>ARTIKEL</h4></a>
      </div>
    </div>
    <div class="row">
    @forelse($artikels as $artikel)
        <div class="col-sm-4 mb-3">
            <img src="{{asset($artikel->takeImage())}}" class="img-thumbnail float-left"style="height: 300px;">
            <a href="posts/{{$artikel->title}}"><h5>{{$artikel ->title}}</h5></a>
            <p>{{Str::limit($artikel->body,100)}}</p>
            <span>Published on {{$artikel->created_at->format("d m,y")}}</span>
            <div>
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
</section>
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-3">
        <h4>KEGIATAN</h4>
      </div>
    </div>
    <div class="row info-kegiatan">
    @forelse($artikels as $siswa)
      <div class="col-sm-12">
        <img src="../img/15.jpg" width="300px" class="img-thumbnail float-left" alt="">
              <h5>{{$siswa->title}}</h5>
              <p class="visi">{{$siswa->body}}</p>
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
</section> -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-3">
        <h4>MAP SMAN 2 PRAYA</h4>
      </div>
      <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.7503560561413!2d116.28549691433695!3d-8.715239891252955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1c84161a98b%3A0x179d566383257d0f!2sSMAN%202%20Praya!5e0!3m2!1sen!2sid!4v1613572643648!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>

<footer>
	<div class="container">	
    
	</div>
</footer>

@endsection
