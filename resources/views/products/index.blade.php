@extends('products.layout')
     
@section('content')

        @foreach ($products as $product)
        
        <div class="card">
            <div class="card__header">
                
                <img src="/image/{{ $product->image }}" alt="card__image" class="card__image" width="600">
            </div>
            <div class="card__body">
              <span id="smO" class="tag tag-blue" onclick="showmore()">Show full card:</span>
              
              <h4>
                {{ $product->name }}
               </h4>
              <p> {{ $product->detail }}
            </p>
            </div>
            <div class="card__footer">
              <div class="user">
                <img src="/images/20220116_020955.jpg" alt="user__image" class="user__image">
                <div class="user__info">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
          
                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
          
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
          
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  
                </div>
              </div>
            </div>
          </div>
            
        @endforeach
    

       
    
    {{ $products->links() }}
    <style>
        .w-5{
            display: none;
        }
    </style>
        
@endsection