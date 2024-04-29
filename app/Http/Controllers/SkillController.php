<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexed()
    {
        $skills = Skill::all();
        return view('admin.skills',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Create-skills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'skill_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Assuming you're validating the image file
        ]);

        // Create a new skill instance
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->content = $request->content;
        $skill->status =1;

        // Handle profile image upload
        if ($request->hasFile('skill_image')) {
            $file = $request->file('skill_image');
            $filename = $request->title . '.' . $file->getClientOriginalExtension(); // Include dot before extension
            $path = public_path('skills');

            // Move the file to the public/skill directory
            $file->move($path, $filename);

            // Update database record for skill image
            $skill->skill_image = 'skills/' . $filename; // Corrected path
        }

        // Save the skill record to the database
        $skill->save();
        return response()->json([
            'success' => true,
            'message' => 'stored completed successfully.',
            // Add more data as needed
        ]);

    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.show-skill', compact('skill'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.show-skill', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|max:20',
            'skill_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Assuming you're validating the image file
        ]);

        // Create a new skill instance
        $skill = Skill::findOrFail($request->id);
        $skill->title = $request->title;
        $skill->content = $request->content;
        $skill->status = $request->status;

        // Handle profile image upload
        if ($request->hasFile('skill_image')) {
            $file = $request->file('skill_image');
            $filename = $request->title . '.' . $file->getClientOriginalExtension(); // Include dot before extension
            $path = public_path('skills');

            // Move the file to the public/skill directory
            $file->move($path, $filename);

            // Update database record for skill image
            $skill->skill_image = 'skills/' . $filename; // Corrected path
        }

        // Save the skill record to the database
        $skill->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        // Delete the skill
        $skill->delete();

        // Optionally, you can redirect the user back to a specific route
        return redirect()->route('data-skilla')->with('success', 'Skill deleted successfully.');
    }
}
