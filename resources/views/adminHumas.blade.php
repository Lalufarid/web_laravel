@extends('layouts.app')
@section('titile','admin')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>Humas</h4>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mb-3">
            <a  href="/humas/create" class="btn btn-primary text-center">tambah Humas</a>
        </div>
    </div>
  </div>


<section class="pesanan">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
          <th scope="col">NO</th>
            <th scope="col">Judul Artikel</th>
            <th scope="col">Isi Artikel</th>
            <th scope="col">Gambar Artikel</th>
            <th scope="col">Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @forelse($humas as $hms)
          <tr>
          <td scope="row">{{$hms->id}}</td>
            <td>{{$hms->title}}</td>
            <td style="text-align:justify">{{$hms->body}}</td>
            <td>
            <img src="{{asset($hms->takeImage())}}" class="img-thumbnail float-left" width="200px">
            </td>
            <td>
            <div class="mr-5">
                <a href="/humas/{{$hms->slug}}/edit" class="btn btn-success mb-4">Edit</a>
                <form action="humas/{{$hms->slug}}/delete" method="post" class="float-left">
                    @csrf 
                    @method("delete")
                    <button class="btn btn-danger mr-5" type="submit">Delete</button>
                </form>
            </div>
            </td>
          </tr>
        @empty
          <div class="col-md-12">
              <div class="alert alert-info text-center">
                  KOSONG
              </div>
          </div>
        @endforelse
        </tbody>
      </table>
    </div>
  </section>

@stop