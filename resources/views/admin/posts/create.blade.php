@extends('admin.master')
@section('contect')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add Posts</h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                    @include('admin.includes.errors')
                                    <form action="{{route('admin.posts.store')}}"method="Post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="title">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control"  name="image">
                                        </div>

                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category_id">
                                                <option disabled selected>
                                                    Choose Category
                                                </option>
                                                    @foreach ($categories as $category)
                                                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach

                                            </select>
                                                
                                        </div>

                                        <div class="form-group">
                                            <label>Excerpt</label>
                                            <input type="text" class="form-control" placeholder="Excerpt" name="excerpt">
                                        </div>

                                             <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" rows="5"  name="body">Body</textarea>
                                         
                                        </div>

                                        <button class="btn btn-success px-5 btn-lg">Save</button>
                            
                                    </form>
                            </div>
                        </div>
                 </div>
                <!-- /.container-fluid -->

           
            <!-- End of Main Content -->

           

@stop