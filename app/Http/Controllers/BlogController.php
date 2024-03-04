<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
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


        // Create Data
        //oluşturulan migrate dosyası üzerinden veriyi çekmek ve yeni data oluşturmak
        //$blog = new Blog();
        //$blog->title = 'this is a new title!';
        //$blog->body  = 'this is a new body!';
        //$blog->status  = 1;
        //$blog->save();


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
         * // or
         * // iki farklı where koşulunu, chain operatoru ile birbirine bağlayarak da veri çekilebilir.
         * $blog = Blog::where(['status', '=', 1]) -> where('id', 2) ->get();
         * $blog = Blog::where(['status' => 1, 'id' => 2]) -> get();

         */
        //Delete Data
        /**
         * $blog = Blog::findorFail(2);
         * $blog->delete();
         */
        //$blog = Blog::all();
        //dd($blog);

        // birebir ilişki ile dbden veri çekmek
        /**
          * $blogs = Blog::with('category')->get();
          * //echo $blogs;
          * foreach( $blogs as $blog ){
          *     echo $blog -> title .' ->'. $blog ->category->name;
          *     echo '</br>';
          * }
         */


        $category = Category::find(1);
        return $category->blogs;



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        /**
         * compact() methodu ile, değişkenlerin isimlerini, karşıya yollayabiliriz
         * dikkat edilmesi gereken, compact kullanırken, değişkenlerin başına $ işareti konulmaz.
         */

        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([

            'category'=> 'required | integer',
            'title' => 'required | max:255 | min:3',
            'body' => 'required',
            'status' => 'required | boolean',
            // image key'inin max value'si, bize karakter boyutunu değil konulan resmin boyutunun max durumunu belirtir.
            // max: parametresine verilen değer byte cinsinden değil, kilobyte cinsinden alınır.
            'image' => 'required | image | max:3000'
        ]);
        if($request -> hasFile('image')){
            $image = $request -> file('image');
            $imageName = $image -> getClientOriginalName();

            $image->move(public_path('uploads'), $imageName);
        }
        // Store Data
        $blog = new Blog();
        $blog->category_id = $request-> category;
        $blog->title = $request-> title;
        $blog->body = $request-> body;
        $blog->status = $request-> status;
        $blog->save();

        session()->flash('success', 'Your Blog hasbeen created successfully!');
        return redirect()->back();
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
