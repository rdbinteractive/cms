@section('title', $publication->title)
@extends('rdbi-cms::layouts.app')

@section('content')
{{$publication->title}}
@endsection
