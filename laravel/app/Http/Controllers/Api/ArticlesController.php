<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():string
    {
        $articles = Article::all();

        return response()->json([
            'status' => 201,
            'articles' => $articles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        // $article = Article::create($request->all());
        $article->user_id = rand(1, 4);
        $article->save();
        return response()->json([
            'status' => 201,
            'message' => 'article post success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $article_empty = Article::where('id', $id)->exists();
            if (!$article_empty) {
                throw new \Exception('idが存在しません');
            }
            Article::where('id', $id)->update($request->all());

            return response()->json([
                'status' => 201,
                'message' => 'article update success'
            ]);
        } catch(\Exception $e) {
            dd($e);
            return response()->json([
                $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        try {
            $article_empty = Article::where('id', $id)->exists();
            if(!$article_empty){
                throw new \Exception('idが存在しません');
            }
            Article::destroy($id);
    
            return response()->json([
                'status' => 201,
                'message' => 'article delete success'
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
