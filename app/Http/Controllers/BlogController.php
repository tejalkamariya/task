<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $var=Blog::all();
        $current = Carbon::now();
        $date=$current->toDateString();
        
        return view('listblogs',compact('var'))->with('date');
    }
    public function create(){
        //echo "hi";exit;
        return view('addblog');
    }
    public function store(Request $request)
    {
        //echo "hii";exit;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_active' => 'required',
            'image' => 'required',

        ]);

       $var =  Blog::create($request->all());
        $image = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$image);
        return view('dashboard');

    }
    public function edit($id){
        echo "hi";exit;
        $var=Blog::find($id);
        return view('edit',compact('var'));
    }
    public function update(Request $request,Data $data){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_active' => 'required',
            'image' => 'required',

            //'start'=>'start_date',

        ]);
        $data->update($request->all());
        return view('addblog');
    }
    public function destroy($id){
        echo "hi";
       $data=Blog::find($id);
       $data->delete();
        return view('listblogs');
    }
}
