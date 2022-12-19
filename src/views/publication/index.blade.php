@extends('layouts.app')
@section('title', 'Archive')
@section('content')
@foreach($publications as $publication)
    <ul>
        <li>
            <a href="/{{$publication->publicationType->slug}}/{{$publication->slug}}">
                {{$publication->title}}
            </a>
        </li>
    </ul>
@endforeach
<div>
    {{$publications->links()}}
</div>
@endsection
