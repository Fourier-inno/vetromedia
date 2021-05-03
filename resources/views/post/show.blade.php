@extends('dashboard')
@section('content')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Show Posts</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$post->title}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($post->published_at))}}</p>
                    <br>
                    <div>
                        {{$post->body}}
                    </div>
                    
                </div>
                
               
            </div><br>
            <a href="index" class="btn btn-primary mb-2">Back</a> 
        </div>
    </div>
</div>
@endsection