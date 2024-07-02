<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use \Hash;
use \Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::orderby('id','DESC');
        if($request->keySearch){
            $user = $user->where('name','like','%'.$request->keySearch.'%');
        }
        $user = $user->paginate(5);
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->only('name','email');
        $user['password'] = Hash::make($request->password);
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('');
            $user['avatar']=$path;
        }
        User::create($user);
        return redirect()->route('admin.user.index')->with('success','tạo mới tài khoản thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        dd($user);
        return view('admin.user.edit',compact('user'));
    }
    public function my(Request $request,$id)
    {
        $user = User::where('id','=',$id)->first();
        // dd($user->id);
        return view('home.layouts_home.my',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $dataUser = $request->only('name','email');
        if($request->password){
            $user['password']=Hash::make($request->password);
        }
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('');
            $dataUser['avatar']=$path;

            $file=$user->avatar;
            if($file && Storage::exists($file)){
                Storage::delete($file);
            }
        }
        if(!$user->update($dataUser)){
            return redirect()->route('admin.user.index')->with('error','Cập nhật dự liệu thất bại');
        }
        return redirect()->route('admin.user.index')->with('success','Cập nhật dự liệu thành công');
    }
    public function myupdate(Request $request, $id)
    {
        $user = User::where('id','=',$id)->first();
        $dataUser = $request->only('name','email');
        if($request->password){
            $dataUser['password']=Hash::make($request->password);
        }
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('');
            $dataUser['avatar']=$path;

            $file=$user->avatar;
            if($file && Storage::exists($file)){
                Storage::delete($file);
            }
        }
        // dd($dataUser);
        if(!$user->update($dataUser)){
            return redirect()->route('my',\Auth::user()->id)->with('error','Cập nhật dự liệu thất bại');
        }
        return redirect()->route('my',\Auth::user()->id)->with('success','Cập nhật dự liệu thành công');
    }

    public function destroy(User $user)
    {
        if(!$user->delete()){
            return redirect()->route('admin.user.index')->with('error','Xóa thất bại');
        }
        return redirect()->route('admin.user.index')->with('success','Xóa thành công');
    }
}
