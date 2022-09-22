@extends('Backend.layouts.app')
@php
    if ($category)
        {
            $categoryText="Kategori Düzenleme";

        }
        else
        {
            $categoryText="Yeni Kategori Ekleme";
        }

@endphp
p
@section('title')
    Kategori
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">{{$categoryText}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.categoryList')}}">Kategori Listesi </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$categoryText}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" id="createCategoryForm" method="POST" action="{{route('admin.categoryAdd')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Kategori Adı</label>
                            <br>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="Kategori Adı" value="{{$category ? $category->name : ''}}"  >

                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>



                        <button  id="createCategoryButton" type="submit" class="btn btn-primary me-2" >Kaydet</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
