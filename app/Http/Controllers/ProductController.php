<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products=Product::all();
//        $items=Item::where('category_id', $id)->get();
        return view('product.index', compact('products'));
//        $items=Item::all();

    }


    public function create()
    {
//        $catList = DB::table('categories')->pluck('name', 'id');
//        return view('product.create')->with('catlist', $catList);
                $categories=Category::pluck('name', 'id');
//        return $categories;
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/picture', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $item = new Product();
        $item->category_id = $request->category_id;
        $item->name =  $request->name;
        $item->price =  $request->price;
        $item->discription =  $request->discription;
        $item->offic =  $request->offic;
        $item->photo = $fileNameToStore;
        $item->save();
        return redirect('product');
    }


    public function show($id)
    {

    }

    public function edit( $id)
    {
        $data=Product::findOrFail($id);
        return view('product.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();
        $data =Product::findOrFail($id);
        try {
            $data->update($input);
            $error=0;
        }
        catch (\Exception $s){
            $error=1;
        }
        if($error==0)
            return redirect()->route('product.index')->with('success', 'Product Update');
        else
            return redirect()->back()->withInput()->with('error', 'Product not Update');
        return $data;
    }

    public function destroy($id)
    {
        $data=Product::findOrFail($id);
        $data->delete();
        return redirect()->route('product.index')->with('success', 'Product Delete');
    }
}
