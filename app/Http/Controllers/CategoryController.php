<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::all();
        return view('Backend.categoryList',compact('categories'));
    }
    public function addShow(Request $request)
    {
        $categories =Category::all();
        $id=$request->categoryID;
        $category=null;
        if (!is_null($id))
        {
            $category=Category::find($id);
        }
        return view('Backend.categoryAdd',compact('categories','category'));

    }
    public function add(CategoryRequest $request)
    {
        $isExist=Category::whereName($request->name)->first();
        if ($isExist)
        {
            alert()->warning('Başarısız', 'Bu Kategori Zaten Mevcut')
                ->showConfirmButton('Tamam', '#3885d6')
                ->persistent(false, false);
            return redirect()->back();
        }
        else if (isset($request->categoryID))
        {
            $category = Category::findOrFail($request->categoryID);
            $category->name=$request->name;
            $category->save();
        }
        else
        {
            $categories = new Category();
            $categories->name=$request->name;
            $categories->save();
            alert()->success('Başarılı', 'Kategori Eklendi')
                ->showConfirmButton('Tamam', '#3885d6')
                ->persistent(true, true);
        }



        return redirect()->route('admin.categoryList');


    }
    public function delete(Request $request)
    {
        $id=$request->categoryID;

        Category::where('id', $id)->delete();
        return response()->json([], 200);

    }
}
