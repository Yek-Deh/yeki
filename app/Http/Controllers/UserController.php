<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('pages.all-user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $user=User::findOrFail($id);
        return view('pages.yek', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $user= User::findOrFail($id);
//        $user= User::select('name')->findOrFail( $id);
        $user=User::findOrFail($id);
        return view('pages.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'image' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'images.*' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'description' => ['string'],
        ]);
        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            //delete prev image
            File::delete(public_path($user->image));

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('', $filename, 'public');
            $filePath = 'uploads/' . $filename;
            $user->image = $filePath;
        }
        $user->description = $request->description;
        $user->update();

        //update images
        if ($request->hasFile('images')) {
            //delete perv images in folders
            foreach ($user->images as $image) {
                $fileName = $image->path;
                File::delete(public_path($fileName));
            }
            $user->images()->delete();
            foreach ($request->file('images') as $image) {
                $fileName = $image->getClientOriginalName();
                $image->storeAs('', $fileName, 'public');
                $filePath = 'uploads/' . $fileName;
                userImage::create([
                    'user_id' => $user->id,
                    'path' => $filePath,
                ]);
            }
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
