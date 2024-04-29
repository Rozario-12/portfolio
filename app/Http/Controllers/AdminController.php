<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $user = Admin::first();
        $Skills = Skill::all();
        return view('welcome', compact('user','Skills'));
    }
    public function viewProfile(){
        $admin = Admin::first();
        return view('profile', compact('admin'));
    }
    public function updateProfile(Request $request)
    {
        $admin = Admin::find($request->id);

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phNo' => 'required|max:10',
            'proimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Assuming you're validating the image file
        ]);

        // Update admin's profile information
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phNo = $request->input('phNo');

        // Handle profile image upload
        if ($request->hasFile('proimage')) {
            $file = $request->file('proimage');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('images');

            // Move the file to the public/images directory
            $file->move($path, $filename);

            // Update database record for profile image
            $admin->proimage = 'images/' . $filename;
        }

        // Save the updated admin
        $admin->save();

        return response()->json(['success'=> 'Profile updated successfully.']);

    }
    public function submitForm(Request $request)
        {

            // Retrieve form data
            $name = $request->input('name');
            $email = $request->input('email');
            $message = $request->input('message');
            $recipientEmail = env('MAIL_TO_ADDRESS');

          

            // Redirect back with success message
            //return redirect()->back()->with('success', 'Your message has been sent successfully.');
            return response()->json(["status"=>"success"]);
        }
}
