<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function list()
    {
        $products =Product::all();

        $categories =Category::all();
        return view('Backend.productList',compact('products','categories'));
    }
    public function addShow(Request $request)
    {
        $categories =Category::all();
        $id =$request->productID;
        $product=null;
        if (!is_null($id)){
            $product =Product::find($id);


        }
        return view('Backend.productAdd',compact('product','categories'));
    }
    public  function add(ProductRequest $request)
    {
        if (isset($request->productID))
        {
            $product =Product::findOrFail($request->productID);
            $product->name = $request->name;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->stock=$request->stock;
            $product->features=$request->features;
            $product->category_id=$request->category;
            $product->slug=Str::slug($request->name);

            if ($request->hasFile('image')) {
                $imageName = Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('public/Product'), $imageName);
                $product->image = 'public/Product/' . $imageName;
            }
            $product->save();

        }
        else
        {
            $products =new Product();
            $products->name = $request->name;
            $products->description=$request->description;
            $products->price=$request->price;
            $products->stock=$request->stock;
            $products->features=$request->features;
            $products->category_id=$request->category;
            $products->slug=Str::slug($request->name);

            if ($request->hasFile('image')) {
                $imageName = Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('public/Product'), $imageName);
                $products->image = 'public/Product/' . $imageName;
            }
            $products->save();
        }



        return redirect()->route('admin.productList');

    }

    public function delete(Request $request)
    {
        $id = $request->productID;

        $products = Product::find($id);
        $image_path = public_path('/') . $products->image;
        if ($products) {
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        Product::where('id', $id)->delete();


        return response()->json([], 200);
    }
    public function changeStatus(Request $request)
    {
        $id = $request->productID;
        $newStatus = null;
        $findProduct = Product::find($id);
        $status = $findProduct->status;
        if ($status) {
            $status = 0;
            $newStatus = "Pasif";
        } else {
            $status = 1;
            $newStatus = "Aktif";

        }
        $findProduct->status = $status;
        $findProduct->save();

        return response()->json([
            'newStatus' => $newStatus,
            'productID' => $id,
            'status' => $status
        ], 200);


    }

}
