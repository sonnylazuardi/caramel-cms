@extends('app')

@section('content')

<a href="{{url('admin/posts/create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Add New Post</a> 

<hr>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Timestamp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->timestamp}}</td>
                <td>
                    <a href="{{url('admin/posts/update/'.$post->id)}}" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="{{url('admin/posts/delete/'.$post->id)}}" class="btn btn-default btn-sm"><i class="fa fa-times"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop