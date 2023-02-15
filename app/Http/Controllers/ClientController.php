<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function create()
    {
        return view('admin.client.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string' ,
                'link' => 'required|string' ,
                'image' => 'required' ,
                'order_no' => 'numeric|required' ,
                'status' => 'numeric|required' ,
            ]
        );
        $client = new Client();

        
        
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

            $file->move('assets/images/client/', $image_unique_name);

            $client->image = $image_unique_name;

        }
        
        $client->title = $request->title;
        $client->link = $request->link;
        $client->order_no = $request->order_no;
        $client->status = $request->status;

        

        $client->save();
        


        return redirect()->route('admin.index.client');
    }

    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index',compact('clients'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.client.edit',compact('client'));
    }

    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'title' => 'required|string' ,
                'link' => 'required|string' ,
                'order_no' => 'numeric|required' ,
                'status' => 'numeric|required' ,
            ]
        );
        $client = Client::find($id);

        
        
        if($request->hasfile('image'))
        {

            unlink('assets/images/client/'.$client->image);

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

            $client->image = $image_unique_name;

        }
        
        $client->title = $request->title;
        $client->link = $request->link;
        $client->order_no = $request->order_no;
        $client->status = $request->status;

        

        $client->save();
        


        return redirect()->route('admin.index.client');
    }

}
