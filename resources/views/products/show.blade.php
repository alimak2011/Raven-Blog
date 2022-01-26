@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="spread">
        <div class="spread__left">
        </div>
        <div class="spread__right">
          <div class="title">
            <h1 class="medium">Post</h1>
            <h1 class="large"><span class="tiny">Num</span>{{$product->id}}</h1>
          </div>
          <div class="content">
           
              <div class="en" lang="en">
                  <h2 style="color: #095775;">
                    
                    <strong>Name:</strong>
                {{ $product->name }}

              </h2>
              <strong>Details:</strong>
              <p style="color: #ffffff;">
                  
                {{ $product->detail }}

              </p>
            </div>
          </div>
          
        </div>
      </div>
    
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="500px">
           
@endsection