<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    public function index()
    {

        $photos = Photos::latest();

        if (request('search')) {
            $photos->where('label', 'like', '%' . request('search') . '%');
        }

        return view('index', [
            "title" => "Unsplash | Demo",
            "photos" => $photos->get()
        ]);
    }

    public function show(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        $photos = new Photos([
            'label' => $request->get('label'),
            'photo_url' => $request->get('photo_url'),
        ]);
        $photos->save();
        return redirect('/')->with('success', 'Photos has been saved.');   // -> resources/views/stocks/index.blade.php

    }

    public function destroy($id)
    {
        $photo = Photos::find($id);
        $photo->delete();


        return redirect('/')->with('success', 'Photos has been removed!'); // message after deleting
    }
}
