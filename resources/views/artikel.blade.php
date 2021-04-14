@extends ('layout.masterPage')
@section('title','artikel')
@section('content')
<div class="container ">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>ARTIKEL</h4>
        <hr>
      </div>
    </div>
</div>
  <div class="container">
    <div class="row mt-5">
      @forelse($artikels as $artikel)
          <div class="col-md-6 mt-3">
              <div class="card">
              @if($artikel->thumbnail)                        
                    <img src="{{asset($artikel->takeImage())}}" class="img-thumbnail float-left" style="height: 300px;" >
                @endif
                  
                  <div class="card-title ml-4">
                      <a href="posts/{{$artikel->title}}"><h5>{{$artikel ->title}}</h5></a>
                  </div>
                  <div class="card-body" style="margin: top -10px;;">
                      <p>{{Str::limit($artikel->body)}}</p>
                      <div class="text-secondary ml-1">
                          <span>Published by {{$artikel->author->name}} &middot; {{$artikel->created_at->format("d F,Y")}}</span>
                      </div>
                  </div>
              </div>
          </div>

        <!-- <div class="col-sm-6 mb-3">
            <div class="card mb-4">
               <img src="{{asset($artikel->takeImage())}}" class="img-thumbnail float-left" height="260px" width="">
                <div class="card-title mt-3 ml-3">
                      <a href="posts/{{$artikel->title}}"><h5>{{$artikel ->title}}</h5></a>
                </div> 
                <div class="card-body bodi">
                      <p>{{Str::limit($artikel->body)}}</p>
                      <div class="text-secondary">
                           <span>Published by {{$artikel->author->name}} &middot; {{$artikel->created_at->format("d F,Y")}}</span>
                      </div>
                </div>
               <div>
            </div>
        </div> -->
      @empty
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                KOSONG
            </div>
        </div>
      @endforelse
    </div>
    <div class="d-flex justify-content-center">
      <div>
            {{$artikels->links()}} 
      </div>
    </div>
  </div>
@endsection