@extends('admin.layout.master')

@section('content')


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">List of Clients</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Link</th>
                                <th scope="col">Order No</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td>
                                    <img class="img-thumbnail" style="width: 60px; height:60px;"
                                        src="{{asset('assets/images/client/'.$client->image)}}" alt="Image title">
                                </td>
                                <td>{{$client->title}}</td>
                                <td>{{$client->link}}</td>
                                <td>{{$client->order_no}}</td>
                                <td>
                                    @if($client->status == 1)
                                        <span class="btn btn-success"> Published</span>
                                    @else
                                        <span class="btn btn-danger"> Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.edit.client',$client->id)}}" class="btn btn-info"> Edit</a>
                                    <a href="{{route('admin.delete.client',$client->id)}}" class="btn btn-danger"> Delete</a>
                                </td>

                            </tr>

                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->




@endsection