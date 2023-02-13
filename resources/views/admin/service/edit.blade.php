@extends('admin.layout.master')

@section('content')


<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Service</h6>
                <form method="POST" action="{{route('admin.update.service',$service->id)}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Here" value="{{$service->title}}">
                            @if ($errors->has('title'))
                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="50" rows="6"
                                class="form-control">
                                {{$service->description}}
                            </textarea>
                            @if ($errors->has('description'))
                            <p class="text-danger"> {{ $errors->first('description') }} </p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="order_no" class="col-sm-2 col-form-label">Order No</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="order_no" name="order_no" value="{{$service->order_no}}"
                                placeholder="Enter Order Here">
                            @if ($errors->has('order_no'))
                            <p class="text-danger"> {{ $errors->first('order_no') }} </p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select id="status" name="status" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <option selected="">Select Status</option>
                                <option value="0" {{ $service->status == '0' ? 'selected' : '' }}> Pending</option>
                                <option value="1" {{ $service->status == '1' ? 'selected' : '' }} >Published</option>
                            </select>
                            @if ($errors->has('status'))
                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Upload Image </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image">
                            <div>
                                <img class="img-thumbnail" style="width: 60px; height:60px;"
                                    src="{{asset('assets/images/service/'.$service->image)}}" alt="Image title">
                            </div>
                            @if ($errors->has('image'))
                            <p class="text-danger"> {{ $errors->first('image') }} </p>
                            @endif
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Update Service</button>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection