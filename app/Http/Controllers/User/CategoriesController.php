<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Category;



class CategoriesController extends Controller
{
<<<<<<< HEAD
=======
	
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
	public function __construct()
    {
        // Middleware
        $this->middleware('sentinel.auth');
<<<<<<< HEAD
	}
=======
        $this->middleware('sentinel.access:categories.create', ['only' => ['create', 'store']]);
        $this->middleware('sentinel.access:categories.view', ['only' => ['index', 'show']]);
        $this->middleware('sentinel.access:categories.update', ['only' => ['edit', 'update']]);
        $this->middleware('sentinel.access:categories.destroy', ['only' => ['destroy']]);
    }
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		new Category;
		$categories = DB::table('categories')->get();
        return view('user.categories.index', ['categories'=>$categories]);	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.categories.create');	
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   
   {
		$this->validate($request, [ 
            'name' => 'bail|required|max:100',
		]);

	    $categories = new Category;
		$categories->name = $request->category;
		$categories->save();   
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
