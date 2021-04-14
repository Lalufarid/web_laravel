@extends('layouts.app')
@section('title','artikel')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post: {{$artikel->title}}</div>
                <div class="card-body">
                    <form action="/admin/{{$artikel->slug}}/edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        @include('admin.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection