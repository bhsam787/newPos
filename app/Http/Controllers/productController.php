<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Supplier;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $supplierID=$_GET['supplierID'];


      $productList=product::where('supplier_id',$supplierID)->get();


      return view('dashboard.admin.add-supplier-product',['productList'=>$productList,'supplierID'=>$supplierID]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category_name=$request->category_name;
      $product_name=$request->product_name;
      $target_sale=$request->target_sale;
      $quantity=$request->quantity;
      $product_cost=$request->product_cost;
      $percentage=$request->percentage;
      $supplier_id=$request->supplier_id;
      $approximate_cost=$request->approximate_cost;

      for($i=0; $i<count($target_sale) ; $i++){
      $data=[
        'category_name'=>$category_name[$i],
        'product_name'=>$product_name[$i],
        'target_sale'=>$target_sale[$i],
        'quantity'=>$quantity[$i],
        'product_cost'=>$product_cost[$i],
        'percentage'=>$percentage[$i],
        'supplier_id'=>$supplier_id[$i],
        'approximate_cost'=>$approximate_cost[$i],



      ];
      product::Create($data);

    }





      session()->flash('msg','Product Added Successfully');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $category_name=$request->category_name;
      $product_name=$request->product_name;
      $target_sale=$request->target_sale;
      $quantity=$request->quantity;
      $product_cost=$request->product_cost;
      $percentage=$request->percentage;
      $supplier_id=$request->supplier_id;
      $approximate_cost=$request->approximate_cost;
       if(count($request->id) > 0) {
      foreach ($request->id as $key=>$value) {

      $data=[
        'category_name'=>$category_name[$key],
        'product_name'=>$product_name[$key],
        'target_sale'=>$target_sale[$key],
        'quantity'=>$quantity[$key],
        'product_cost'=>$product_cost[$key],
        'percentage'=>$percentage[$key],
        'supplier_id'=>$supplier_id[$key],
        'approximate_cost'=>$approximate_cost[$key],



      ];
      $product=product::where('id',$request->id[$key])->first();
      $product->update($data);
    }
  }
  session()->flash('msg','Product Updated Successfully');
  return back();
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
    }
}
