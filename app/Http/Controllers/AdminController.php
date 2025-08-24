<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\projects;
use App\Models\personal_details;
use App\Models\skills;
use App\Models\educations;
use App\Models\experiences;
use App\Models\achievements;
use App\Models\infos;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $stats = [
            'projects' => projects::count(),
            'skills' => skills::count(),
            'educations' => educations::count(),
            'experiences' => experiences::count(),
            'achievements' => achievements::count(),
            'personal_details' => personal_details::count(),
        ];

        $recentProjects = projects::latest()->take(5)->get();
        $recentEducations = educations::latest()->take(3)->get();
        
        return view('admin.dashboard', compact('stats', 'recentProjects', 'recentEducations'));
    }

    public function projects()
    {
        $projects = projects::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function projectsCreate()
    {
        return view('admin.projects.create');
    }

    public function projectsStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        projects::create($validated);

        return redirect()->route('admin.projects')->with('success', 'Project created successfully!');
    }

    public function projectsEdit($id)
    {
        $project = projects::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function projectsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $project = projects::findOrFail($id);
        $project->update($validated);

        return redirect()->route('admin.projects')->with('success', 'Project updated successfully!');
    }

    public function projectsDestroy($id)
    {
        $project = projects::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully!');
    }

    public function skills()
    {
        $skills = skills::latest()->paginate(15);
        return view('admin.skills.index', compact('skills'));
    }

    public function skillsCreate()
    {
        return view('admin.skills.create');
    }

    public function skillsStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string',
        ]);

        skills::create($validated);

        return redirect()->route('admin.skills')->with('success', 'Skill created successfully!');
    }

    public function skillsEdit($id)
    {
        $skill = skills::findOrFail($id);
        return view('admin.skills.edit', compact('skill'));
    }

    public function skillsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string',
        ]);

        $skill = skills::findOrFail($id);
        $skill->update($validated);

        return redirect()->route('admin.skills')->with('success', 'Skill updated successfully!');
    }

    public function skillsDestroy($id)
    {
        $skill = skills::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skills')->with('success', 'Skill deleted successfully!');
    }

    public function educations()
    {
        $educations = educations::latest()->paginate(10);
        return view('admin.educations.index', compact('educations'));
    }

    public function educationsCreate()
    {
        return view('admin.educations.create');
    }

    public function educationsStore(Request $request)
    {
        $validated = $request->validate([
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'grade' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        educations::create($validated);

        return redirect()->route('admin.educations')->with('success', 'Education created successfully!');
    }

    public function educationsEdit($id)
    {
        $education = educations::findOrFail($id);
        return view('admin.educations.edit', compact('education'));
    }

    public function educationsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'grade' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $education = educations::findOrFail($id);
        $education->update($validated);

        return redirect()->route('admin.educations')->with('success', 'Education updated successfully!');
    }

    public function educationsDestroy($id)
    {
        $education = educations::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.educations')->with('success', 'Education deleted successfully!');
    }

    public function experiences()
    {
        $experiences = experiences::latest()->paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    public function experiencesCreate()
    {
        return view('admin.experiences.create');
    }

    public function experiencesStore(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        experiences::create($validated);

        return redirect()->route('admin.experiences')->with('success', 'Experience created successfully!');
    }

    public function experiencesEdit($id)
    {
        $experience = experiences::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));
    }

    public function experiencesUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        $experience = experiences::findOrFail($id);
        $experience->update($validated);

        return redirect()->route('admin.experiences')->with('success', 'Experience updated successfully!');
    }

    public function experiencesDestroy($id)
    {
        $experience = experiences::findOrFail($id);
        $experience->delete();

        return redirect()->route('admin.experiences')->with('success', 'Experience deleted successfully!');
    }

    public function achievements()
    {
        $achievements = achievements::latest()->paginate(10);
        return view('admin.achievements.index', compact('achievements'));
    }

    public function achievementsCreate()
    {
        return view('admin.achievements.create');
    }

    public function achievementsStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'issuer' => 'nullable|string|max:255',
            'certificate_link' => 'nullable|url',
        ]);

        achievements::create($validated);

        return redirect()->route('admin.achievements')->with('success', 'Achievement created successfully!');
    }

    public function achievementsEdit($id)
    {
        $achievement = achievements::findOrFail($id);
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function achievementsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'issuer' => 'nullable|string|max:255',
            'certificate_link' => 'nullable|url',
        ]);

        $achievement = achievements::findOrFail($id);
        $achievement->update($validated);

        return redirect()->route('admin.achievements')->with('success', 'Achievement updated successfully!');
    }

    public function achievementsDestroy($id)
    {
        $achievement = achievements::findOrFail($id);
        $achievement->delete();

        return redirect()->route('admin.achievements')->with('success', 'Achievement deleted successfully!');
    }

    public function personalDetails()
    {
        $personalDetails = personal_details::first();
        return view('admin.personal-details.edit', compact('personalDetails'));
    }

    public function personalDetailsUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'bio' => 'nullable|string',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'twitter' => 'nullable|url',
            'website' => 'nullable|url',
            'profile_image' => 'nullable|string',
        ]);

        $personalDetails = personal_details::first();
        
        if ($personalDetails) {
            $personalDetails->update($validated);
        } else {
            personal_details::create($validated);
        }

        return back()->with('success', 'Personal details updated successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
