<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Blog::where('published', true);
        
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }
        
        if ($request->has('tag')) {
            $query->whereJsonContains('tags', $request->tag);
        }
        
        $blogs = $query->orderBy('created_at', 'desc')
                      ->paginate($request->get('per_page', 10));
        
        return response()->json($blogs);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        if (!$blog->published) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }
        
        // Increment views
        $blog->increment('views');
        
        return response()->json($blog);
    }

    /**
     * Get featured blog posts
     */
    public function featured()
    {
        $featured = Blog::where('published', true)
                       ->orderBy('views', 'desc')
                       ->limit(3)
                       ->get();
        
        return response()->json($featured);
    }

    /**
     * Get blog categories/tags
     */
    public function categories()
    {
        $tags = Blog::where('published', true)
                   ->whereNotNull('tags')
                   ->get()
                   ->pluck('tags')
                   ->flatten()
                   ->unique()
                   ->values();
        
        return response()->json($tags);
    }
}
