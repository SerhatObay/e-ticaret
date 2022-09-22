@extends('Backend.layouts.app')
@section('title')
    Kategori Listesi
@endsection
@section('content')
    <div class="card-body">

        <div class="table-responsive">
            <table class="table bg-white">
                <thead>
                <tr>
                <thead class="bg-">
                <tr>
                    <th>ID</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                    <th>Kategori Adı</th>
                    <th>Eklenme Tarihi</th>
                    <th>Güncellenme Tarihi</th>

                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr id="{{$category->id}}">
                        <th>{{$category->id}}</th>
                        <td><a  href="{{ route('admin.categoryAdd',['categoryID'=>$category->id]) }}" class="btn btn-warning editCategory">Düzenle <i class="fa fa-edit"></i></a></td>
                        <td><a data-id="{{$category->id}}" href="javascript:void(0)" class="btn btn-danger deleteCategory">Sil <i class="fa fa-trash"></i></a></td>
                        <th>{{$category->name}}</th>
                        <td>{{\Carbon\Carbon::parse($category->created_at)->format("d-m-Y H:i:s")}}</td>
                        <td>{{\Carbon\Carbon::parse($category->update_at)->format("d-m-Y H:i:s")}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
