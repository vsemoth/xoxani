

				<script type="text/javascript">
					var form = document.getElementById("upload");
					var request = new XMLHttpRequest();

					form.addEventListener('submit', function (e) {
						e.preventDefault();
						var formdata = new FormData(form);

						request.open('post', "/upload");
						request.addEventListener("load", transferComplete)
						request.send(formdata);
					})

					function transferComplete(data) {
						console.log(data.currentTarget.response);
					}
				</script>



				
            {!! Form::open(['route' => ['avatar.destroy', $avatar->avatar], 'method' => 'DELETE']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}