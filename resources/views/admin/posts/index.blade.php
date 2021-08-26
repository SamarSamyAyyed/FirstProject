@extends('admin.master')
@section('contect')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">All Posts</h1>
                        </div>

                        <style>
                            .table td, .table th {vertical-align: middle}
                        </style>

                        <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->id}}</td>
                                                <td>{{ ($post->category)?$post->category->name: 'uncategory' }}</td>
                                                {{-- <td>{{ $post->Image }}</td> --}}

                                                 <td><img width="100" src="{{ asset('uploads/'. $post->image) }}" alt=""></td>
                                                <td> 
                                                    <a href="{{ route('admin.posts.edit',$post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form  class="d-inline" action="{{ route('admin.posts.destroy',$post->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        
                                                        <button  onclick="return confirm('are you sure?')"class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{$posts->links()}}
                                </div>
                            </div>
                </div>
                <!-- /.container-fluid -->

           
            <!-- End of Main Content -->

           

@stop