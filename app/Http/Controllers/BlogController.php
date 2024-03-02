<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Bu modelin bütün datalarını, db'den çeker
        // Collection üzerinden verileri return eder
        /**
         *  Collection nedir?
         * Basit olarak, collection data grubudur, ya da veri mimarisinin basitleşmiş array hali denebilir.
         * fakat bundan daha esnektir
         */

        //$blog = Blog::all();
        //$blog = Blog::find(1);
        //$blog = Blog::first();


        /** Create Data
         * oluşturulan migrate dosyası üzerinden veriyi çekmek ve yeni data oluşturmak
         * $blog = new Blog();
         * $blog->title = 'this is a new title!';
         * $blog->body  = 'this is a new body!';
         * $blog->status  = 1;
         * $blog->save();
         */

        // Update Data
        /**
         *$blog = Blog::find('2');
         *$blog->title = 'this is a updated title!';
         *$blog->body  = 'this is a updated body!';
         *$blog->status  = 1;
         *$blog->save();

         */


        // get datas
        /**

         * $blog = Blog::where('status', '=', 1)->get();
         * $blog = Blog::where(['status' => 0, 'id' => 2]) -> get();
         * // or
         * // iki farklı where koşulunu, chain operatoru ile birbirine bağlayarak da veri çekilebilir.
         * $blog = Blog::where(['status', '=', 1]) -> where('id', 2) ->get();

         */
        //Delete Data
        /**
         * $blog = Blog::findorFail(2);
         * $blog->delete();
         * dd($blog);
         */



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
