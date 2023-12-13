@extends('dashboard')

@section('view')
<h1>clients</h1>
<ul>
    @if($clients->isEmpty())
    <p>No clients added yet</p>
    @else
    @foreach($clients as $client)
        @component('components.clientCard')
            @slot('fullname', $client->first_name.' '.$client->last_name)
            @slot('edad', $client->age)
            @slot('status', $client->status)
        @endcomponent
    @endforeach
    @endif
    
</ul>
@endsection