@extends('layouts.app')
@section('titile','admin')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>jadwal</h4>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mb-3">
            <a  href="/jadwal/create" class="btn btn-primary text-center">tambah jadwal</a>
        </div>
    </div>
  </div>


<section class="pesanan">
    <div class="container">
      <table class="table">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Gambar</th>
           
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @forelse($jadwals as $jadwal)
          <tr>
            <td scope="row">{{$jadwal->id}}</td>
            <td>{{$jadwal->jadwal}}</td>
            <td><img src="{{asset($jadwal->takeImage())}}" class="img-thumbnail float-left" width="200px" style="height: 200px;"></td>
            <td>
            <div class="mr-5">
                <a href="/jadwal/{{$jadwal->jadwal}}/edit" class="btn btn-success mb-4">Edit</a>
                <form action="jadwal/{{$jadwal->jadwal}}/delete" method="post" class="float-left">
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