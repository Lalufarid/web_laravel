@extends('layouts.app')
@section('title','artikel')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post: {{$guru->name}}</div>
                <div class="card-body">
                    <form action="/guru/{{$guru->slug}}/edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        @include('guru.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection