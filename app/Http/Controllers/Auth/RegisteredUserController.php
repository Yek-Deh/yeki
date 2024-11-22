<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserImage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'images.*' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'description' => ['required','string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->storeAs('', $fileName, 'public');
        $filePath = 'uploads/' . $fileName;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' =>$request->description,
            'image' => $filePath,
            'password' => Hash::make($request->password),
        ]);
        // insert images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = $image->getClientOriginalName();
                $image->storeAs('', $fileName, 'public');
                $filePath = 'uploads/' . $fileName;
                UserImage::create([
                    'user_id' => $user->id,
                    'path' => $filePath,
                ]);
            }
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
