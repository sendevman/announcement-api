<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a paginated list of announcements.
     * 
     * @param Request $request - The incoming HTTP request.
     * @return \Illuminate\Http\JsonResponse - A JSON response with paginated announcements.
     */
    public function index(Request $request)
    {
        // Fetch announcements, ordered by creation date, with pagination (10 per page)
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(10);

        // Return the paginated announcements as a JSON response
        return response()->json($announcements);
    }
}
