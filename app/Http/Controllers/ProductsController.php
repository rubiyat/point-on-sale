<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\Photo;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get(['id','product_category_id','name','price','vat_rate']);
        $number = 1;
        return view('admin.products.index', compact('products','number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.products.create');
        
        $productCategories = ProductCategory::all();
        return view('admin.products.create', compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $products = new Product;

        $this->validate($request,[
                        'product_category_id' => 'required',
                        'name' => 'required|max:100',
                        'price' => 'required',
                        'vat_rate' => 'required',
                    ],[
                        'product_category_id.required' => ' The product category field is required.',
                        'name.required' => ' The product name field is required.',
                        'name.max' => ' The role name may not be greater than 100 characters.',
                        'price.required' => ' The price field is required.',
                        'vat_rate.required' => ' The vat_rate field is required.',
                    ]);

        $file = $request->file('image');
        $name = time() . $file->getClientOriginalName();
        $file->move('images',$name);



        $products->create($request->all());
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
        $products = Product::findOrFail($id);
        return view('admin.products.show', compact(['products']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findorfail($id);
        $productCategories = ProductCategory::get(['id', 'name']);
        return view('admin.products.edit', compact('products','productCategories'));
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
        $products = Product::find($id);

           $this->validate($request,[
                        'product_category_id' => 'required',
                        'name' => 'required|max:100',
                        'price' => 'required',
                        'vat_rate' => 'required',
                    ],[
                        'product_category_id.required' => ' The product category field is required.',
                        'name.required' => ' The product name field is required.',
                        'name.max' => ' The role name may not be greater than 100 characters.',
                        'price.required' => ' The price field is required.',
                        'vat_rate.required' => ' The vat_rate field is required.',
                    ]);
        $products->update($request->all());
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $products = Product::findOrFail($id);

        $products->delete();

        return redirect('admin/products');
    }
}
