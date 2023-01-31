<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }




    public function create()
    {
        return view('admin.slider.create');
    }



    
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'nullable|string' ,
                'description' => 'nullable|string' ,
                'order_no' => 'numeric|required' ,
                'status' => 'numeric|required' ,
            ]
        );
        $slider = new Slider();

        
        
        if($request->hasfile('image'))
        {
            /*
                1. Read file 

                2. get Extension   using getClientOriginalExtension()  on file object

                3. create a unique  name with extension


                4. Save file in folder  move function on file object

                5. Save unique name in database
            
            
            */

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $image_unique_name = time().rand().'.'.$extension;

            //$file->move('path form public folder', 'unique name ');

            $file->move('assets/images/slider/', $image_unique_name);

            $slider->image = $image_unique_name;

        }
        
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->order_no = $request->order_no;
        $slider->status = $request->status;

        

        $slider->save();
        


        return redirect()->route('admin.index.slider');
    }



    
    public function edit($id)
    {
        return view('admin.slider.edit');
    }



    
    public function update(Request $request,$id)
    {
        return redirect()->route('admin.index.slider');
    }
    


    
    public function delete($id)
    {
        return redirect()->route('admin.index.slider');
    }
    


    
}
