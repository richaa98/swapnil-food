<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus=Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
    
           $name = $request->file('image')->getClientOriginalName();
    
           $path = $request->file('image')->store('public/images/Menu');
    
    
           $menu = new Menu;
    
           $menu->rate = $request->rate;
           $menu->name = $request->name;
           $menu->category = $request->category;
           $menu->image = $path;
           $menu->save();
    
           return redirect('/admin/menu')->with('status', 'Image Has been uploaded successfully in laravel 8');
    
       
    }

    public function show(Menu $menu)
    {

    }

}
