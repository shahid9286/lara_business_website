@extends('admin.layout.master')

@section('content')
   

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
       
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Slide</h6>
                <form method="POST" action="{{route('admin.update.slider',1)}}">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Here" value="Promote your business">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="50" rows="6" class="form-control"> Promote your business</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="order_no" class="col-sm-2 col-form-label">Order No</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="order_no" name="order_no" placeholder="Enter Order Here" value="1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select id="status" name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option>Select Status</option>
                                <option value="1" selected=''>Pending</option>
                                <option value="2">Published</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Upload Image </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>
                    </div>


                   
                    <button type="submit" class="btn btn-primary">Save Slide</button>
                </form>
            </div>
        </div>
       
    </div>
</div>



@endsection