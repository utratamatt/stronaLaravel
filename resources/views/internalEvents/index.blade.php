@extends('main', ["title" => "Wydarzenia wewnętrzne"])

@section('menu')
<div class="col s12">
    <a href="/wydarzenia-wewnetrzne/nowy" class="btn waves-effect waves-light">Nowy
        <i class="material-icons right">add</i>
    </a>
    <a href="/wydarzenia-wewnetrzne" class="btn waves-effect waves-light">Wszystkie
        <i class="material-icons right">list</i>
    </a>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($internalEvents as $internalEvent)
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{$internalEvent->Title}}</span>
                    <blockquote>{{$internalEvent->ShortDescription}}</blockquote>
                    {!! $internalEvent->ContentHTML !!}
                </div>
                <div class="card-action">
                    <a href="{{ url()->current() }}/edycja/{{$internalEvent->Id}}" class="btn-floating btn-small waves-effect waves-teal"><i class="material-icons">edit</i></a>
                    <a href="{{ url()->current() }}/usun/{{$internalEvent->Id}}" class="btn-floating btn-small waves-effect waves-teal red"><i class="material-icons">delete</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection