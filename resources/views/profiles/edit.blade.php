@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile | Edit</div>

                <div class="panel-body">

                    <form action="{{route('profile.update', ['slug' => Auth::user()->slug])}}" method="patch">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" value="{{Auth::user()->profile['location']}}" class="form-control" required>  
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="location">About Me:</label>
                            <textarea name="about" id="about" cols="30" rows="10" required>{{$info[nl2br('about')]}}</textarea>                        
                        </div>
                        <div class="form-group">
                            <p class="text-center">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    Update
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
