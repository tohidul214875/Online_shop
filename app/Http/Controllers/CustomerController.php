<?php

namespace App\Http\Controllers;
use Validator;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $customer = new customer();
        $customer->name =  $request->name;
        $customer->number =  $request->number;
        $customer->address =  $request->address;
        $customer->email =  $request->email;
        $customer->discription =  $request->discription;
        $customer->photo = $fileNameToStore;
        $customer->save();
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Customer::findOrFail($id);
        return view('customer.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $data =Customer::findOrFail($id);
        try {
            $data->update($input);
            $error=0;
        }
        catch (\Exception $s){
            $error=1;
        }
        if($error==0)
            return redirect()->route('customer.index')->with('success', 'Customer name Update');
        else
            return redirect()->back()->withInput()->with('error', 'Customer name not Update');
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Customer::findOrFail($id);
        $data->delete();
        return redirect()->route('customer.index')->with('success', 'Customer name Delete');
    }
}
