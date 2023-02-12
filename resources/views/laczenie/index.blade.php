@extends('main', ["title" => "Laczenie"])

@section('menu')
<div class="col s12">
    <a href="/laczenie/nowy" class="btn waves-effect waves-light">Nowe łączenie
        <i class="material-icons right">add</i>
    </a>
    <a href="/laczenie" class="btn waves-effect waves-light">Wszystkie
        <i class="material-icons right">list</i>
    </a>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($laczenia as $laczenie)
        <div class="col s12 m4 l3">
            <div class="card">
                
                <div class="card-action">
                    <a href="{{ url()->current() }}/edycja/{{$laczenie->id}}" class="btn-floating btn-small waves-effect waves-teal"><i class="material-icons">edit</i></a>
                    <a href="{{ url()->current() }}/usun/{{$laczenie->id}}" class="btn-floating btn-small waves-effect waves-teal red"><i class="material-icons">delete</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection