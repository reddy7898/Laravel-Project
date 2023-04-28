@extends('pages.app')
@section('content')
    @if (count($data)>0)
        @foreach ($data as $item)
            <ul>
                <li>
                    {{$item}}
                </li>
            </ul>
        @endforeach    
    @endif    
@endsection