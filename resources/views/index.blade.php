@extends('main')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l3">
                <a href="/wydarzenia-wewnetrzne">
                    <div class="card-panel hoverable center">
                        <h5>Wydarzenia wewnetrzne</h5>
                    </div>
                </a>
            </div>
			 <div class="col s12 m4 l3">
                <a href="/posty">
                    <div class="card-panel hoverable center">
                        <h5>Posty</h5>
                    </div>
                </a>
            </div>
			<div class="col s12 m4 l3">
                <a href="/laczenie">
                    <div class="card-panel hoverable center">
                        <h5>Łączenie</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection