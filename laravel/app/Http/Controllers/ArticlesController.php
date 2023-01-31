<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(): object
    {
        $articles = Article::all();
        return response()->json($articles);
    }
}
