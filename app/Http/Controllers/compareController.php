<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Google\Cloud\Vision\VisionClient;

class compareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.compare');
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
      if($request->file('image')){
        //convert image to base64
            $image = base64_encode(file_get_contents($request->file('image')));
            //Sending image for OCR server


            $vision =  new VisionClient(['keyFilePath' => __DIR__ . '/key.json',]);;
            $familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');
            $image = $vision->image($familyPhotoResource,
                [
                 'DOCUMENT_TEXT_DETECTION'
                ]);
            $result = $vision->annotate($image);
            $text = $result->text();
            foreach ($text as $key => $value) {
              $productList[$key]=product::where('product_name',$value->info()['description'])->get();

            }
            if ($request->hasfile('txt')){
                $file = $request->file('txt');
                $filename =$request->file('txt')->getClientOriginalName();
                $file->move('upload/resource/',$filename);
                $mainFile='upload/resource/'.$filename;


                $textArr= explode("\r\n", file_get_contents($mainFile));
            }

            // dd($productList);

            // dd($text);
            return view('dashboard.admin.compare',['text'=>$text,'productList'=>$productList,'textArr'=>$textArr]);
    }
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
        //
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
