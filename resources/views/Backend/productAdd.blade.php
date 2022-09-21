@extends('Backend.layouts.app')
@php
    if ($product)
        {
            $producttext="Ürün Düzenleme";

        }
        else
        {
            $producttext="Yeni ürün Ekleme";
        }

@endphp
@section('title')
    Ürünler
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">{{$producttext}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.productList')}}">Ürün Listesi </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$producttext}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" id="createProductForm" method="POST" action="{{route('admin.productAdd')}}" enctype="multipart/form-data">
                        @csrf
                        @if($product)
                            <input type="hidden" name="productID" value="{{$product->id}}">
                        @endif
                        <div class="form-group">
                            <label for="name">Ürün Adı</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="Ürün Adı" value="{{$product ? $product->name : ''}}" >

                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea class="form-control"  name="description" id="description" cols="30"
                                      rows="7" placeholder="Açıklama"   >
                                {{$product ? $product->description : ''}}
                            </textarea>
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="features">Özeliikler</label>
                            <textarea class="form-control"  name="features" id="features" cols="30"
                                      rows="7" placeholder="Özellikler">
                                 {{$product ? $product->features : ''}}
                            </textarea>
                            @error('features')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select name="category" id="category" >
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>

                            @error('category')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stock">Stok sayısı</label>
                            <input type="text" class="form-control" name="stock" id="stock"
                                   placeholder="Stok sayısı" value="{{$product ? $product->stock : ''}}" >

                            @error('stock')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Ürün Fiyatı</label>
                            <input type="text" class="form-control" name="price" id="price"
                                   placeholder="Ürün Fiyatı"  value="{{$product ? $product->price : ''}}">

                            @error('price')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Ürün Resmi</label>
                            <input type="file" class="form-control" name="image" id="image" required >
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror


                        </div>

                        <button  id="createProductButton" type="submit" class="btn btn-primary me-2" >Kaydet</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
