<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class personalInformation extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userID=Auth::id();
      $currentUser=User::where('id', $userID)->first();

      return view('dashboard.admin.personal-information',['currentUser'=>$currentUser]);

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
        //
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
    public function update(Request $request, User $personal_information)
    {
      $data= request()->validate([
        'name'=>'nullable',
        'area'=>'nullable',
        'phone'=>'nullable',
        'file_name'=>'nullable',

      ]);

      // $file = $request->file('file_name')->getClientOriginalName();
      // $data['original_file_name']=$file;
      // $file1 = $request->file('file_name')->getClientOriginalExtension();
      // $data['extension']=$file1;




      if ($request->hasfile('file_name')){
          $file = $request->file('file_name');
          $filename =$request->file('file_name')->getClientOriginalName();
          $file->move('upload/resource/',$filename);
          $data['file_name'] = $filename;
      }


      $personal_information->update($data);
      session()->flash('msg','Personal Information Updated Successfully');
      return redirect(route('personal-information.index'));

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
