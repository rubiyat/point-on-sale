<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $suppliers = Supplier::all();
         $number = 1;

        return view('admin.supplier.index', compact('suppliers', 'number'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.supplier.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $supplier = new Supplier();

        $this->validate($request,[
                                   'company_name' => 'required|unique:suppliers|max:100',
                                   'email' => 'required|unique:suppliers|max:100',
                               ],[
                                   'company_name.required' => ' The company name field is required.',
                                   'company_name.max' => ' The company name may not be greater than 100 characters.',
                                   'company_name.unique' => ' It seems company name already exist',

                                   'email.required' => ' The email field is required.',
                                   'email.max' => ' The email may not be greater than 100 characters.',
                                   'email.unique' => ' It seems email already exist',
                               ]);

        $supplier->create($request->all());

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $supplier = Supplier::findOrFail($id);


        return view('admin.supplier.show', compact('supplier'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit',compact(['supplier']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $this->validate($request,[
                                   'company_name' => 'required|unique:suppliers|max:100',
                                   'email' => 'required|unique:suppliers|max:100',
                               ],[
                                   'company_name.required' => ' The company name field is required.',
                                   'company_name.max' => ' The company name may not be greater than 100 characters.',
                                   'company_name.unique' => ' It seems company name already exist',

                                   'email.required' => ' The email field is required.',
                                   'email.max' => ' The email may not be greater than 100 characters.',
                                   'email.unique' => ' It seems email already exist',
                               ]);
        
        $supplier->update($request->all());
        return redirect('admin/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return redirect('admin/supplier');

    }

}
