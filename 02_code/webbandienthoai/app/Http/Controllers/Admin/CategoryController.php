<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use \Str;
use \DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorys= Category::orderby('id','DESC');
        if($request->keySearch){
            $categorys = $categorys->where('name','like','%'.$request->keySearch.'%');
        }
        $categorys = $categorys->paginate(7);
        return view('admin.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category['name'] = $request->name;
        $category['status'] = $request->status;
        $category['created_at'] = now();
        $category['updated_at'] = now();
        $category['image'] = 'abc.png';
        $category['admin_id'] = \Auth::guard('admin')->user()->id;
        $category['slug'] = Str::slug($request->name);

        Category::create($category);

        return redirect()->route('admin.category.index')->with('success','Thêm mới thành công');
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
        $category = DB::table('categoris')->where('id','=',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        dd($category);
        $category['name'] = $request->name;
        $category['status'] = $request->status;
        // $category['created_at'] = now();
        $category['updated_at'] = now();
        $category['image'] = 'abc.png';
        $category['admin_id'] = \Auth::guard('admin')->user()->id;
        $category['slug'] = Str::slug($request->name);

        $category->update($category);

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        if(!$category->delete()){
            return redirect()->route('admin.category.index')->with('error','Xóa thất bại');
        }
        return redirect()->route('admin.category.index')->with('success','Xóa thành công');
    }
}
