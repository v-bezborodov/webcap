<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::paginate(10);

        return view('feedback.index', ['feedbacks' => $feedbacks??[]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'stars' => 'integer|min:0|max:5',
            'body'  => 'required|string|max:255',
            'phone' => 'nullable|numeric',
            'stars' => 'required|numeric',
            'file'  => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('file')) {
            $content = $request->file('file');
//            $disk = Storage::put('feedback-img', $content);

            $content->store('public/feedback-img');
            $filename = $content->hashName();

//            return $path;
//            $disk->putFile('feedback-img', $content);
        }
//dd($request->file->getClientOriginalName(), $request->file('file')->hashName());
        $feedback = new Feedback();
        $feedback->stars = $request->stars;
        $feedback->body = $request->body;
        $feedback->file = $filename;
        $user->feedbacks()->save($feedback);
        return redirect()->back();


//        try {
//            // Save original image
//            $avatar_image = Image::make($image_file);
//            $imageFile = $avatar_image->stream();
//            $imageFile = $imageFile->__toString();
//            $uploadFile = self::CATEGORY_IMAGE_PATH . $image_name;
//            Storage::put($uploadFile, $imageFile);
//
//        } catch (\Exception $e) {
//            return $e->getMessage();
//        }


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
