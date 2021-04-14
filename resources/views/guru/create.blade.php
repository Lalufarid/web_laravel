@extends('layouts.app')
@section('title','artikel')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="/guru/store" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('guru.partials.form-control',['submit'=>'Create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection