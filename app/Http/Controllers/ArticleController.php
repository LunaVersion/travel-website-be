<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'content' => 'required|string',
            'slug' => 'required|string',
            'time' => 'required|date',
            'status' => 'required|string',
            'image' => 'required|string',
            'is_draft' => 'nullable|boolean', 
        ]);

        $paragraphs = explode("\n", trim($validated['content']));
        $contentJson = json_encode(['paragraphs' => $paragraphs]);

        $isDraft = $request->input('is_draft', false);        

        if ($isDraft) {
            // $data['versions']['draft'] = [
            //     'title' => $validated['title'],
            //     'category_id' => $validated['category_id'],
            //     'content' => $validated['content'],
            //     'slug' => $validated['slug'],
            //     'time' => $validated['time'],
            //     'status' => 'draft', 
            //     'image' => $validated['image']
            // ];
            $data = [
                'versions' => json_encode([
                    'draft' => [
                        'draft_title' => $validated['title'],
                        'draft_category_id' => $validated['category_id'],
                        'draft_content' => $contentJson,
                        'draft_slug' => $validated['slug'],
                        'draft_time' => $validated['time'],
                        'draft_status' => $validated['status'],
                        'draft_image' => $validated['image']
                    ]
                ])
            ];
        } else {
            $data = [
                'versions' => json_encode([
                    'current' => [
                        'title' => $validated['title'],
                        'category_id' => $validated['category_id'],
                        'content' => $contentJson,
                        'slug' => $validated['slug'],
                        'time' => $validated['time'],
                        'status' => $validated['status'],
                        'image' => $validated['image']
                    ]
                ])
            ];
        }
        

        DB::table('articles')->insert($data);

        return redirect()->route('articles.index')->with('success', 'Article saved successfully.');
    }
    // public function showNews() {
    //     return view('index');
    // }

    // public function index(Request $request)
    // {
    //     $categoryId = $request->input('category_id', 0);

    //     $categories = [0 => 'Adventure Travel', 1 => 'Beach', 2 => 'Explore World', 3 => 'Family Holidays', 4 => 'Art and culture']; 

    //     $articles = DB::table('articles')
    //         ->when($categoryId > 0, function($query) use ($categoryId) {
    //             return $query->where('category_id', $categoryId);
    //         })
    //         ->get(); 

    //     return view('templates.index', compact('articles', 'categories', 'categoryId'));
    // }

    public function index(Request $request)
    {
    $categoryId = $request->input('category_id', 0);

    $categories = [0 => 'Adventure Travel', 1 => 'Beach', 2 => 'Explore World', 3 => 'Family Holidays', 4 => 'Art and culture'];

    $articles = DB::table('articles')
        ->when($categoryId > 0, function($query) use ($categoryId) {
            return $query->whereJsonContains('versions->current->category_id', $categoryId);
        })
        ->get();

    return view('templates.index', compact('articles', 'categories', 'categoryId'));
    }

    // public function showdetail($slug)
    // {
    //     $article = DB::table('articles')
    //         ->whereJsonContains('versions->current->slug', $slug)
    //         ->first();

    //     if (!$article) {
    //         abort(404);
    //     }

    //     $currentVersion = json_decode($article->versions, true)['current'];

    //     return view('templates.detail', compact('currentVersion'));
    // }

    public function showdetail($slug)
{
    // Lấy tất cả các bài viết từ bảng articles
    $articles = DB::table('articles')->get();

    // Duyệt qua các bài viết và giải mã JSON
    $currentVersion = null;
    foreach ($articles as $article) {
        $versions = json_decode($article->versions, true);
        
        // Tìm phiên bản có slug trùng khớp
        foreach ($versions as $version) {
            if ($version['slug'] === $slug) {
                $currentVersion = $version;
                break 2; // Thoát khỏi cả hai vòng lặp khi tìm thấy
            }
        }
    }

    // Kiểm tra nếu không tìm thấy version
    if (!$currentVersion) {
        return abort(404, 'Article not found');
    }

    // Truyền dữ liệu cho view
    return view('templates.detail', [
        'article' => $article,
        'currentVersion' => $currentVersion,
        'content' => json_decode($currentVersion['content'], true)
    ]);
}



}
