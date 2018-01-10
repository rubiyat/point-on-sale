<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productCategories = ProductCategory::orderBy('id', 'DESC')->get(['id','name','description','status']);
        $number = 1;

        return view('admin.productcategory.index', compact(['productCategories', 'number']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productCategory = new ProductCategory();

        $this->validate($request,[
                        'name' => 'required|unique:product_categories|max:100',
                    ],[
                        'name.required' => ' The role name field is required.',
                        'name.max' => ' The role name may not be greater than 100 characters.',
                        'name.unique' => ' It seems role name already exist',
                    ]);

        $productCategory->create($request->all());
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
        
        $productCategory = ProductCategory::findOrFail($id);

        return view('admin.productcategory.show', compact('productCategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $productCategory = ProductCategory::findorfail($id);
        return view('admin.productcategory.edit', compact('productCategory'));
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
        //
        
        $productCategory = ProductCategory::find($id);
         $this->validate($request,[
                        'name' => 'required|max:100',
                    ],[
                        'name.required' => ' The role name field is required.',
                        'name.max' => ' The role name may not be greater than 100 characters.',
                    ]);
        $productCategory->update($request->all());
        return redirect('admin/productcategory');
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
        
        ProductCategory::findOrFail($id)->delete();
        return redirect('admin/productcategory');
        

        
    }

}
