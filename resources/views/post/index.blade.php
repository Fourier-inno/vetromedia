@extends('dashboard')
@section('content')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blogs</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">
  
                <a href="create" class="btn btn-primary mb-2">Create new Blog</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>BLOG TITLE</th>
                            <th>BLOG DESCRIPTION</th>
                            <th>PUBLISHED</th>
                            <th>CREATED</th>
                            <th>RATING</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td>{{ $post->rate}}</td>
                            <td>
                            <a href="{{$post->id}}" class="btn btn-success">Show</a>
                            <a href="{{$post->id}}/edit" class="btn btn-warning" style="color:white;">Edit</a>
                            <a href="{{$post->id}}/rate" class="btn btn-info" style="color:white;">Rate</a>
                            <form action="{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection