@extends('main')

@section('title', 'Home')

@section('content')

<main role="main">
   
   <div class="row">
      <div class="col-md-12">
         <div class="jumbotron">
            <h1 class="display-3">Welcome to my blog!</h1>
            <p class="lead">Hello there! This blog is built with Laravel 5.5!</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Popular Post</a></p>
         </div>
      </div> <!-- /jumbotron -->
   </div> <!-- /row -->
   

   <div class="row marketing">
   	

      <div class="col-lg-6">
      	@foreach ($posts as $post)
         <h4>{{ $post->title }}</h4>
         <p> {{ substr($post->body, 0, 300) }}{{ (strlen($post->body) > 300 ? "..." : "") }}</p>
         <p><a class="btn btn-md btn-primary" href="#" role="button">Read More</a></p>
          @endforeach
      </div>

     

      <div class="col-lg-6">
         <div class="sidebar-module">
            <h4>Sidebar</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         </div>
      </div>
   </div> <!-- /row -->

</main> <!-- /main -->

@endsection