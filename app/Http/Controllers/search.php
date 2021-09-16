<?php

namespace App\Http\Controllers;


use App\product;
use Illuminate\Http\Request;
use Google\Cloud\Vision\VisionClient;

class search extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.search');
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

            // dd($productList);

            // dd($text);
            return view('dashboard.admin.search',['text'=>$text,'productList'=>$productList]);


      }


      // $vision = new VisionClient(['keyFile' => json_decode(env('GOOGLE_CLOUD_KEY'), true)]);
      //
      // $familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');
      //
      // $image = $vision->image($familyPhotoResource,
      //     ['FACE_DETECTION',
      //      'WEB_DETECTION',
      //      'LABEL_DETECTION',
      //      'IMAGE_PROPERTIES',
      //      'SAFE_SEARCH_DETECTION',
      //      'LANDMARK_DETECTION',
      //      'LOGO_DETECTION',
      //      'DOCUMENT_TEXT_DETECTION'
      //     ]);
      // $result = $vision->annotate($image);
      //
      // if ($result) {
      //     $imagetoken = random_int(1111111, 999999999);
      //     // move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/feed/' . $imagetoken . ".jpg");
      //     // var_dump($result);
      // } else {
      //     // header("location: index.php");
      //     die();
      // }
      //
      // $faces = $result->faces();
      // $logos = $result->logos();
      // $labels = $result->labels();
      // $text = $result->text();
      // $fullText = $result->fullText();
      // $properties = $result->imageProperties();
      // $cropHints = $result->cropHints();
      // $web = $result->web();
      // $safeSearch = $result->safeSearch();
      // $landmarks = $result->landmarks();
      //   dd($text);


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
