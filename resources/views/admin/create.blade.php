@extends('layouts.app')
@section('title','artikel')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="/admin/store" method="post" autocomplete="off" enctype="multipart/form-data" >
                        @csrf
                        @include('admin.partials.form-control',['submit'=>'Create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

