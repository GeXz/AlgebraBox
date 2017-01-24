<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesController extends Controller
{
	
	public function __construct()
    {
        // Middleware
        $this->middleware('sentinel.auth');   
	}
=======

class CategoriesController extends Controller
{
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
		new Category;
		$categories = DB::table('categories')->get();
		return view('user.categories.index', ['categories'=>$categories]);
=======
        return view('user.categories.index');
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('user.categories.create');		
=======
        return view('user.categories.create');
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
<<<<<<< HEAD
   
   {
		$this->validate($request, [ 
            'name' => 'bail|required|max:100',
		]);
	
	    $categories = new Category;
		$categories->name = $request->category;
		$categories->save();  
    }
	
=======
    {
        //
    }

>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
		//  
    }
        
=======
        //
    }

>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
<<<<<<< HEAD
    {	
		//
=======
    {
        //
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
	 
=======
>>>>>>> 782450502e9a4602bf19c4c6700b05f36b5721cc
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
