@extends('layouts.app')
@section('titile','admin')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>ARTIKEL</h4>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mb-3">
            <a  href="/admin/create" class="btn btn-primary text-center">tambah artikel</a>
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
        @forelse($artikels as $artikel)
          <tr>
            <td scope="row">{{$artikel->id}}</td>
            <td>{{$artikel->title}}</td>
            <td>{{$artikel->body}}</td>
            <td>
            <img style="width:200px; height:250px; object-fit: cover; object-position: center;" 
                src="{{asset($artikel->takeImage())}}" class="img-thumbnail">
            </td>
            <td>
            <div class="mr-5">
                <a href="/admin/{{$artikel->slug}}/edit" class="btn btn-success mb-4">Edit</a>
                <form action="admin/{{$artikel->slug}}/delete" method="post" class="float-left">
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
      <div class="d-flex justify-content-center">
      <div>
            {{$artikels->links()}} 
      </div>
    </div>
    </div>
  </section>

@stop