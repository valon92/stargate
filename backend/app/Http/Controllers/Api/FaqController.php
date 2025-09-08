<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Faq::published();
        
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }
        
        $faqs = $query->orderBy('order')
                     ->orderBy('created_at', 'desc')
                     ->get();
        
        return response()->json($faqs);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        if (!$faq->published) {
            return response()->json(['error' => 'FAQ not found'], 404);
        }
        
        return response()->json($faq);
    }

    /**
     * Get FAQ categories
     */
    public function categories()
    {
        $categories = Faq::published()
                        ->select('category')
                        ->distinct()
                        ->pluck('category');
        
        return response()->json($categories);
    }
}
