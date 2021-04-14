@extends('layouts.app')
@section('title','jadwal')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post: {{$jadwal->mapel}}</div>
                <div class="card-body">
                    <form action="/jadwal/{{$jadwal->mapel}}/edit" method="post">
                        @method('patch')
                        @csrf
                        @include('jadwal.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection