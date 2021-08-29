<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;


class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=supplier::orderByDesc('id')->get();
        return view('dashboard.admin.supplier',['suppliers'=>$suppliers]);
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
      $data= request()->validate([
        'supplier_name'=>'required',
        'address'=>'nullable',
        'phone'=>'nullable',
        'other_cost'=>'nullable',
        'supplier_name'=>'required',
        'rupee'=>'required',
        'bdt'=>'required',
        'order_date'=>'required',
        'weight'=>'nullable',
        'weight_cost'=>'nullable',
        'category'=>'nullable',
        'receive_date'=>'nullable',
        'status'=>'nullable',


      ]);
      supplier::create($data);
      session()->flash('msg','New Supplier Added Successfully');
      return redirect(route('supplier.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(supplier $supplier)
    {
        return view('dashboard.admin.single-supplier',['supplier'=>$supplier]);
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
    public function update(Request $request,supplier $supplier)
    {
      $data= request()->validate([
        'supplier_name'=>'required',
        'address'=>'nullable',
        'phone'=>'nullable',
        'other_cost'=>'nullable',
        'rupee'=>'required',
        'bdt'=>'required',
        'order_date'=>'required',
        'weight'=>'nullable',
        'weight_cost'=>'nullable',
        'category'=>'nullable',
        'receive_date'=>'nullable',
        'status'=>'nullable',


      ]);
      $supplier->update($data);
      session()->flash('msg',' Supplier Updated Successfully');
      return redirect(route('supplier.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplier $supplier)
    {
        $supplier->delete();
    }
}
