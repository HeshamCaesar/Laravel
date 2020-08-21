<table id="blog-table" class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($blogs as $blog)
            <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
            <td>{{$blog->users->name}}</td>
            <td><a href="{{route('blog.destroy',$blog)}}" class="btn btn-danger">Delete</a>
            <button blog_id="{{$blog->id}}" url="{{route('blog.update',$blog)}}" data-toggle="modal" data-target="#modal-editBlog" class="btn btn-info editBlog">Edit</button>
            <button class="btn btn-warning" data-toggle="modal" data-target="#modal-showBlog" id="show-Blog" blog_id={{$blog->id}}>Show</button></td>
            </tr>
        @endforeach
    </tbody>
</table>