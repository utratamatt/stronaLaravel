@extends('main', ["title" => "laczenie"])

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
<div class="container">
    <div class="row">
        <form class="col s12 validator-submit" method="post" action="/laczenie/dodawanie">
            @csrf
            <div class="input-field col s4">
                
				
                
               
				<select name = "internalevents">
				@foreach ($internalEvents as $internalEvent)
					<option value="{{$internalEvent->Id}}">
						{{$internalEvent -> Title }}
					</option>
				@endforeach 
				
				</select><label>Wydarzenie wewnętrzne</label>
            </div>
            <div class="input-field col s4">
                
                
                
				<select name = "posts">
				@foreach ($posts as $post)
					<option value="{{$post->Id}}">
						{{$post -> Title }}
					</option>
				@endforeach
				</select>
				<label>Id Postu</label>
            </div>

            <div class="col s12">
                <div class="submit-field input-field">
                    <button class="btn waves-effect waves-light" type="submit">Dodaj
                        <i class="material-icons right">add</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="/js/validator.js"></script>
<script>
initializeValidatorRequired();
initializeValidatorSubmit();
</script>

@endsection