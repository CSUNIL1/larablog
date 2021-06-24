@extends('layouts.app')

@section('read')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Read all Blogs') }}</h1></div>

                <div class="card-body">
                <ul>
                    @foreach ($blogs as $blog)
                        <li><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
