@extends('main', ["title" => "laczenie - Edycja"])

@section('menu')
<div class="col s12">
                    <a href="/laczenie/nowy" class="btn waves-effect waves-light">Nowy
                        <i class="material-icons right">add</i>
                    </a>
                    <a href="/laczenie" class="btn waves-effect waves-light">Wszystkie
                        <i class="material-icons right">list</i>
                        </a>
            </div>
@endsection


@section('content')
<div class ="container">
    <div class = "row">
    <form class="col s12" method="post" action="/laczenie/aktualizacja/{{$laczenia->id}}">
    @csrf
	<div class="input-field col s4">
                
				
                
               
				<select name = "internalevents">
				@foreach ($internalEvents as $internalEvent)
					<option {{$internalEvent->Id==$laczenia->internalevents?"SELECTED":""}} value="{{$internalEvent->Id}}">
						{{$internalEvent -> Title }}
					</option>
				@endforeach 
				
				</select><label>Wydarzenie wewnętrzne</label>
            </div>
            <div class="input-field col s4">
                
                
                
				<select name = "posts">
				@foreach ($posts as $post)
					<option {{$post->Id==$laczenia->posts?"SELECTED":""}} value="{{$post->Id}}">
						{{$post -> Title }}
					</option>
				@endforeach
				</select>
				<label>Id Postu</label>
            </div>

                <div class="col s12">
                    <div class="submit-field input-field">
                        <button class="btn waves-effect waves-light" type="submit" name="akcja" value="edycja">Zapisz
                            <i class="material-icons right">edit</i>
                        </button>
                    </div>
                </div>
            </form>
    </div>
</div>

            @endsection