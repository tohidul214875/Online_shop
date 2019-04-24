<?php

namespace App\Http\Controllers;
use Validator;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $input = $request->all();
//        //$data=Product::create($input);
//
//        try {
//            $data = Product::create($input);
//
//            return redirect()->route('product.index')->with('success', 'Product Save');
//        } catch (\Exception $s) {
//            return redirect()->route('prodouct.index')->with('error', 'Product not Save');
//        }
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
        $product = new product();
        $product->name =  $request->name;
        $product->price =  $request->price;
        $product->discription =  $request->discription;
        $product->offic =  $request->offic;
        $product->photo = $fileNameToStore;
        $product->save();
        return redirect('product');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Product::findOrFail($id);
        return view('product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::findOrFail($id);
        $data->delete();
        return redirect()->route('product.index')->with('success', 'Product Delete');

    }
//    public function delete($id){
//        $data=Product::findOrFail($id);
//        $data->delete();
//        return redirect()->route('product.index')->wth('success', 'Product Delete');
//
//    }
}
