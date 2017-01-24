<?php

namespace App\Http\Controllers\User;

<<<<<<< HEAD
<<<<<<< HEAD

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesController extends Controller
{
=======
=======

>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Category;



class CategoriesController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
	
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
<<<<<<< HEAD
<<<<<<< HEAD
		new Category;
		$categories = DB::table('categories')->get();
        return view('user.categories.index', ['categories'=>$categories]);
=======
        return view('user.categories.index');
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
=======
		new Category;
		$categories = DB::table('categories')->get();
        return view('user.categories.index', ['categories'=>$categories]);	
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('user.categories.create');	
=======
        return view('user.categories.create');
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
=======
        return view('user.categories.create');	
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
   
   {
		$this->validate($request, [ 
            'name' => 'bail|required|max:100',
		]);
<<<<<<< HEAD
	
	    $categories = new Category;
		$categories->name = $request->category;
		$categories->save();  
    }
    
=======
    {
        //
    }
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
=======
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929

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
<<<<<<< HEAD
<<<<<<< HEAD
		//  
   
=======
        //
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
=======
		//
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
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
