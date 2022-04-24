<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $news = News::all()->toarray();
        return view('admin/newses/index',['news' => $news]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin/newses/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['imgUrl'] = $request->input('imgUrl');
         $data['date'] = $request->input('date');
        News::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'imgUrl' => $data['imgUrl'],
             'date' => $data['date'],
        ]);

        return redirect()->route('news');

        
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $news = News::find($id)->toarray();
        return view('admin/newses/edit',['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $id = $request->input('id');
     $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['imgUrl'] = $request->input('imgUrl');
         $data['date'] = $request->input('date');
        News::find($id)->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'imgUrl' => $data['imgUrl'],
             'date' => $data['date'],
        ]);

        return redirect()->route('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(News::destroy($id)){
            return redirect()->route('news');
        }
    }
}
