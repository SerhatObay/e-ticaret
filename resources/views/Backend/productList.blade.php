@extends('Backend.layouts.app')
@section('title')
    Ürünler
@endsection
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 100px;
            height: unset !important;
            border-radius: unset !important;
        }
    </style>
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
                    <th>Ürün Resmi</th>
                    <th>Ürün Adı</th>
                    <th>Kategori</th>
                    <th>Açıklama</th>
                    <th>Özellikleri</th>
                    <th>Fiyatı</th>
                    <th>Stok Sayısı</th>
                    <th>Ürün Satış Durumu</th>
                    <th>Eklenme Tarihi</th>
                    <th>Güncellenme Tarihi</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr id="{{$product->id}}">
                    <th>{{$product->id}}</th>
                    <td><a  href="{{ route('admin.productAdd',['productID'=>$product->id]) }}" class="btn btn-warning editPost">Düzenle <i class="fa fa-edit"></i></a></td>
                    <td><a data-id="{{$product->id}}" href="javascript:void(0)" class="btn btn-danger deletePost">Sil <i class="fa fa-trash"></i></a></td>
                    <td><img src="{{asset($product->image)}}" alt=""></td>
                    <th>{{$product->name}}</th>
                    <th>{{$product->getCategory->name}}</th>
                    <th>{!! $product->description !!}</th>
                    <th>{!! $product->features !!}</th>
                    <th>{{$product->price}}</th>
                    <th>{{$product->stock}}</th>
                    <<td>
                        @if($product->status)
                            <a data-id="{{$product->id}}" href="javascript:void(0)"  class="btn btn-success changePostStatus" >Satışta</a>
                        @else
                            <a data-id="{{$product->id}}" href="javascript:void(0)" class="btn btn-danger changePostStatus" >Satış Dışı</a>
                        @endif

                    </td>
                    <td>{{\Carbon\Carbon::parse($product->created_at)->format("d-m-Y H:i:s")}}</td>
                    <td>{{\Carbon\Carbon::parse($product->update_at)->format("d-m-Y H:i:s")}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot class="bg-warning">
                <tr>
                    <th>ID</th>
                    <<th>Düzenle</th>
                    <th>Sil</th>
                    <th>Ürün Resmi</th>
                    <th>Ürün Adı</th>
                    <th>Kategori</th>
                    <th>Açıklama</th>
                    <th>Özellikleri</th>
                    <th>Fiyatı</th>
                    <th>Stok Sayısı</th>
                    <th>Ürün Satış Durumu</th>
                    <th>Eklenme Tarihi</th>
                    <th>Güncellenme Tarihi</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection
