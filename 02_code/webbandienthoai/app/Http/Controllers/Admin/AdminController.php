<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use \Hash;
use \Storage;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admin = Admin::orderby('id','DESC');
        if($request->keySearch){
            $admin->where('name','like','%'.$request->keySearch.'%');
        }
        $admin= $admin->paginate(5);
        // dd($admin);
        return view('admin.admin.index',compact('admin'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $admin = $request->only('name','email');
        $admin['password'] = Hash::make($request->password);
        // dd($request->hasFile('avatar'));
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('');
            $admin['avatar']= $path;
        }
        Admin::create($admin);
        return redirect()->route('admin.admin.index')->with('success','Tạo mới thành công');
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
    public function edit(Admin $admin)
    {

        return view('admin.admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Admin $admin)
    {

        $dataAdmin = $request->only('name','email');
        if($request->password){
            $dataAdmin['password'] = Hash::make($request->password);
        }
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('');
            $dataAdmin['avatar']= $path;

            $file = $admin->avatar;
            if($admin->avatar && Storage::exists($file)){
                Storage::delete($file);
            }
        }

        if(! $admin->update($dataAdmin)){
            return redirect()->route('admin.admin.index')->with('error','Cập nhật dữ liệu thất bại');
        }
        return redirect()->route('admin.admin.index')->with('success','Cập nhật dữ liệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        if(! $admin->delete()){
            return redirect()->route('admin.admin.index')->with('error','Xóa thất bại');
        }
        return redirect()->route('admin.admin.index')->with('success','Xóa thành công');

    }
}
