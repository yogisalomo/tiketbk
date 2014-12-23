@extends ('layouts.master')

@section ('content')
	<a class="btn btn-primary btn-md" href="{{url('blogposts/write')}}">Write New Post</a>
	<h2>Blog Posts</h2>
	<table id="post" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Title</b></td>
		  	<td><b>Description</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($posts as $post)
		  <tr>
			<td>{{$post->id}}</td>
		  	<td>{{$post->title}}</td>
		  	<td>{{$post->description}}</td>
		  	<td>{{$post->content}}</td>
		  	<td><a href="{{url('admin/post/update/'.$post->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/post/delete/'.$post->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop


@section('page_script')
<script>	
	$(document).ready(function() {
    $('#post').dataTable();
} );
</script>
@stop
@stop