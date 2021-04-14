@extends ('layout.masterPage')
@section('title','login')
@section('content')
<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h4>LOGIN</h4>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <form>
           <div class="form-group">
               <label>username</label>
               <input type="text" name="" class="form-control" placeholder="Masukkan Username Anda">
           </div>
           <div class="form-group">
               <label>password <!-- <a class="forgot" href="">forgot your pass ?</a> --></label>
               <input type="password" name="" class="form-control" placeholder="Masukkan password Anda">
           </div>
         </form>
      <div class="row">
           <div class="col-sm-6">
            <a href="/admin" class="btn btn-primary">Login</a>
            
            </div>   
         </div>
      </div>
    </div>
  </div>
  </section>
@stop