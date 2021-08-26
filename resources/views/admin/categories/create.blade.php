@extends('admin.master')
@section('contect')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add Categories</h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                    @include('admin.includes.errors')
                                    <form action="{{route('admin.categories.store')}}"method="Post" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="name" name="name">
                                        </div>

                                        <button class="btn btn-success px-5 btn-lg">Save</button>
                            
                                    </form>
                            </div>
                        </div>
                 </div>
                <!-- /.container-fluid -->

           
            <!-- End of Main Content -->

           

@stop