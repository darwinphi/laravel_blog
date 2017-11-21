@extends('main')

@section('title', 'All Posts')

@section('content')
	
	<div class="row">
		<div class="col-md-9">
			<div class="card border-light mb-3">
			  	<div class="card-body">
			    	<h4 class="card-title">All Posts</h4>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
			  <div class="card-body">
				  	<a href="{{ route('posts.create') }}" class="btn btn-primary btn-block">Create New Post</a>
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
						  <thead>
						    <tr class="bg-primary text-white">
						      <th scope="col">#</th>
						      <th scope="col">Title</th>
						      <th scope="col">Body</th>
						      <th scope="col">Created At</th>
						      <th scope="col">Updated At</th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>
						  		@foreach ($posts as $post)

							    <tr>
							      <th scope="row">{{ $post->id }}</th>
							      <td>{{ $post->title }}</td>
							      <td>{{ substr($post->body, 0, 15) }}{{ (strlen($post->body) > 15 ? "...": "") }}</td>
							      <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							      <td>{{ date('M j, Y', strtotime($post->updated_at)) }}</td>
							      <td>
							      	<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
							      	<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
							      </td>
							    </tr>

							    @endforeach
						  </tbody>
					</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="pagination">
				 {!! $posts->links(); !!}
			</div>
			   
		</div>
	</div>


@endsection