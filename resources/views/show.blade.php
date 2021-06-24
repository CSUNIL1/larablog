@extends('layouts.app')

@section('read')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$blog->title}}</h2></div>

                <div class="card-body">
                    <p>{{$blog->content}}</p>
                </div>

                @if(Auth::user()->id == $blog->user_id)
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="/blogs/{{$blog->id}}/edit">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('edit') }}
                                </button>
                            </a>
                        </div>
                    </div>
                @else
                    <h5 style="text-align:center;">please <a href="/login">login</a> to edit your blog.</h5>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
