@extends('layouts.app')

@section('title', ' | Avatar')

@section('content')

<!-- Begin Avatar: The avatar model begin's here -->

<!-- Image trigger modal -->
<ul style="list-style:none;">
    @foreach(Auth::user()->Avatar as $avatar)
    <li>
      <a type="button" data-toggle="modal" data-target="#myModal">
              <img src="{{url($avatar->avatar)}}" height="80px" width="80px" 
              style="margin-left:30px;padding:0;border-radius:50%;float:left;">
      </a>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
        <div class="row">
          <div class="container">
            <div class="col-md-6 col-md-offset-3">
              <img src="{{url($avatar->avatar)}}" style="border-radius:50%;margin-left:35px;" alt="avatar">
            </div>
          </div>
        </div>
    
      </div>
    </li>

    @endforeach
</ul>

            <!-- End Avatar: This is where the avatar model ends -->
@endsection