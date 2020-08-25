@extends('layouts.app')

@section('content')
    <div class="container">
    <a  class="btn btn-success Add-Blog" data-toggle="modal"
                    data-target="#modal-AddBlog">New Blog</a>

                <div id="blog-content">
                    {!! $table !!}
                </div>
    </div>
    {{-- Add BLog --}}
    <div class="modal fade" id="modal-AddBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New BLog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-error btn-danger">

                </div>
                <form action="{{route('blog.store')}}" method="POST">
                    @csrf
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Blog</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- show Blog --}}
    <div class="modal fade" id="modal-showBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-error btn-danger">

                </div>
              
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Blog --}}
    <div class="modal fade" id="modal-editBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit that Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-error btn-danger">
                </div>
                <form action="" id="updateBlog"  method="post">
                    @csrf
                    @method('PUT')
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection