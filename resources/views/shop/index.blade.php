@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
<style>
  #searchbar {
     margin-left: 10%;
     padding:15px;
     border-radius: 10px;
  }

  .text-left {
    margin-left: 16%
  }

  .form-control {
    width: 100%;
    border: 3px solid #7e7f81;
    border-right: none;
    padding: 20px;
    height: 20px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #9DBFAF;
  }
 
  input[type=text] {
     width: 30%;
     -webkit-transition: width 0.15s ease-in-out;
     transition: width 0.15s ease-in-out;
  }

  input[type=text]:focus {
     width: 50%;
     color: #838383;
  }
</style>
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="category">
          <h2 id="category-label">Categories</h2>
          <ul class="list-group">
            <li class="list-group-item"><a href="/shop">All</a></li>
            @foreach ($categories as $category)
            <li class="list-group-item {{$category->id == $id ? 'active' : ''}}"><a href="/shop/category/{{$category->id}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
        <div class="col-lg-8">
          <h2 id="category-label" class="text-left mt-5">Search Product</h2>
        <form action="" class="form-inline ml-5">
          <input id="searchbar" type="text" class="form-control" name="search" placeholder="Apa yang mau dicari?">
          <button class="btn btn-primary">Search</button>
        </form>
          <div class="item-list">
          <h2>Our Products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            @foreach ($products as $product)
            <div class="col-lg-4 item mt-4">
              <a href="/shop/detail/{{$product->id}}">
              <img src="{{asset($product->image)}}" alt="nopic" height="180" width="180">
              </a>
              <p class="product-name mt-3 font-weight-bold"><a href="">{{$product->name}}</a></p>
              <p class="product-price">Rp.{{number_format($product->price)}}</p>
            </div>
            @endforeach
          </div>
        </div>
        {{$products->links()}}
      </div>
    </div>
  </div>
  <!-- Pagination Link -->
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

