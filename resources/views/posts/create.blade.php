@extends('main')

@section('title', 'Contact')

@section('stylesheets')
	
	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

<main role="main">  
   <div class="row">
      <div class="col-md-8 mx-auto">
         <div class="card">
            <div class="card-header">
               <div class="text-center">Create A Blog</div>
            </div>
            
            <div class="card-body">
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				    {{ Form::label('title', 'Title') }}
				    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

				    {{ Form::label('slug', 'Slug') }}
				    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}


				    {{ Form::label('body', "Post Body:") }}
				    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;')) }}
				{!! Form::close() !!}
           </div> <!-- /body -->
         </div> <!-- /card -->
      </div> <!-- /col -->
   </div> <!-- /row -->
</main> <!-- /main -->

@endsection

@section('scripts')
	
	{!! Html::script('js/parsley.min.js') !!}

@endsection


