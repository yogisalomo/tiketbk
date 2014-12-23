@extends ('layouts.master')

@section ('content')
<div class="container">
{{$post->post_id}}
{{$post->post_title}}
{{$post->post_description}}
{{$post->post_content}}
 <a id="modal-585549" href="#modal-container-585549" role="button" class="btn" data-toggle="modal">Give your feedback</a>
			
			<div class="modal fade" id="modal-container-585549" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							Give your Feedback about this post:
							<form>
								<input type="text" style="width:100%">
							</form>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Back</button> <button type="button" class="btn btn-primary">Submit</button>
						</div>
					</div>
					
				</div>
				
			</div>
</div>

@stop