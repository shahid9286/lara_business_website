<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }




    public function create()
    {
      
        return view('admin.service.create');
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
        $service = new Service();

        
        
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

            $file->move('assets/images/service/', $image_unique_name);

            $service->image = $image_unique_name;

        }
        
        $service->title = $request->title;
        $service->description = $request->description;
        $service->order_no = $request->order_no;
        $service->status = $request->status;

        

        $service->save();
        


        return redirect()->route('admin.index.service');
    }



    
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
    }



    
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'title' => 'nullable|string' ,
                'description' => 'nullable|string' ,
                'order_no' => 'numeric|required' ,
                'status' => 'numeric|required' ,
            ]
        );
        $service = Service::find($id);

        
        
        if($request->hasfile('image'))
        {

            unlink('assets/images/service/'.$service->image);

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

            $file->move('assets/images/service/', $image_unique_name);

            $service->image = $image_unique_name;

        }
        
        $service->title = $request->title;
        $service->description = $request->description;
        $service->order_no = $request->order_no;
        $service->status = $request->status;

        

        $service->save();
        


        return redirect()->route('admin.index.service');
    }
    


    
    public function delete($id)
    {
        $service = Service::find($id);
        unlink('assets/images/service/'.$service->image);// delete image
        $service->delete(); // delete db records
        return redirect()->route('admin.index.service');
    }
}
