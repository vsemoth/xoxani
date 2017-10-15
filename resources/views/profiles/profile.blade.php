@extends('layouts.app')

@section('title', ' | Profile')

@section('content')

	<div class="container">
		<div class="col-md-4">
			<div class="panel panel-bare">

				<div class="panel-heading">
					<h1 class="text-center">{{Auth::user()->name}}'s</h1> <p class="pull-right">Profile</p>
				</div>
				<div class="panel-body">
					<center>

					<!-- Begin Avatar: The avatar model begin's here -->

						<div class="navbar">
						@if(!empty($avatar))
							<a href="{{route('profile.avatar', ['slug' => Auth::user()->slug])}}" class="navbar-brand">List Avatars</a>
							<br><hr>
						@endif

						<!-- Image trigger modal -->
					    <a href="" type="button" data-toggle="modal" data-target="#myModal">
					      <img src="{{Storage::url('avatar/'.Auth::user()->avatar)}}" width="150px" height="150px" style="border-radius:50%;" alt="avatar">
					    </a>

					    <!-- Modal -->
					    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					      <div class="modal-dialog" role="document">

					        <form action="{{route('profile.avatar.update', ['slug' => Auth::user()->slug])}}" method="POST" id="upload" enctype="multipart/form-data">
					        <div class="modal-content">
					          <div class="modal-header">
					            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					            <h4 class="modal-title" id="myModalLabel">Upload Avatar</h4>
					          </div>
					          <img src="{{Storage::url('avatar/'.Auth::user()->avatar)}}" style="border-radius:50%;margin-left:35px;" alt="avatar">
					          <div class="modal-body">
					          	{{csrf_field()}}
									    <div class="form-group">
									        <label for="avatar">Upload Avatar:</label>
									        <input type="file" name="avatar">
									    </div>
					          </div>
					          <div class="modal-footer">
					            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					            <button type="submit" class="btn btn-primary">Save changes</button>
					          </div>
					        </div>
					        </form>

					      </div>
					    </div>

						</div>

						  @if(!empty($avatars))
						  <section>
						      <h3>Products</h3>
						      
						      <table>
						        
						          <thead>
						              <tr>
						                  <th>Products</th>
						              </tr>
						          </thead>

						          <tbody>
						                  @forelse($avatars as $avatar)
						                  <tr>
						                    <td>{{$avatar->name}}</td>
						                  </tr>
						                  @empty
						                  <tr><td>No Data</td></tr>
						                  @endforelse
						          </tbody>

						      </table>

						  </section>
						  @endif

						<!-- End Avatar: This is where the avatar model ends -->

					</center>
					<p class="text-center">
						@if(Auth::id() == $user['id'])
							<a href="{{route('profile.edit', ['slug' => Auth::user()->slug])}}" class="btn btn-large btn-danger">Profile Edit</a>
						@endif
					</p>
				</div>
				
				<div class="panel panel-bare">
					<div class="panel-heading">
					<h3 class="text-center">Location:</h3>
					</div>
					<div class="panel-body">
						<p class="text-center">
							{{$user->profile['location']}}
						</p>
					</div>
				</div>
			</div>
				<hr>

				<div class="panel panel-default">
					<div class="body">
						<friend :profile_user_id="{{Auth::user()->id}}"></friend>		
					</div>
				</div>

				<div class="panel panel-bare">
					<div class="panel-heading">
					<h3 class="text-center">About {{Auth::user()->name}}</h3>
					</div>
					<div class="panel-body">
						<p class="text-center">
							{{$user['profile'][nl2br('about')]}}
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@stop