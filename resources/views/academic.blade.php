@extends('app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="card-body">
                @foreach($structures as $structure)
                <div class="col-md-12">
                    <h3>{{$structure->title }}</h3>
                    <hr />
                    <div class="row">
                        @foreach($structure->children as $cats)
                        <div class="col-md-4">
                            <h4>{{ $cats->title }}</h4>
                            <hr />
                            @foreach($cats->children as $cat)
                            <h5>{{$cat->title}}</h5>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
