@extends('layouts.app')
@section('titile','admin')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>GURU</h4>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mb-3">
            <a  href="/guru/create" class="btn btn-primary text-center">tambah Guru</a>
        </div>
    </div>
  </div>


<section class="pesanan">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat </th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">gambar</th>
            <th scope="col">Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @forelse($gurus as $guru)
          <tr>
            <td scope="row">{{$guru->id}}</td>
            <td>{{$guru->name}}</td>
            <td>{{$guru->alamat}}</td>
            <td>{{$guru->mapel}}</td>
            <td>
            <img style="width:200px; height:250px; object-fit: cover; object-position: center;" 
                src="{{asset($guru->takeImage())}}" class="img-thumbnail">
            </td>
            <td>
            <div class="mr-5">
                <a href="/guru/{{$guru->slug}}/edit" class="btn btn-success mb-4">Edit</a>
                <form action="guru/{{$guru->slug}}/delete" method="post" class="float-left">
                    @csrf 
                    @method("delete")
                    <button class="btn btn-danger mr-5" type="submit" >Delete</button>
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