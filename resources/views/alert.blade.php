@if(session()->has('success'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb--5">
            <div class="alert alert-success text-center">
                 {{session()->get('success')}}
            </div>
        </div>
    </div>
</div>
 @endif