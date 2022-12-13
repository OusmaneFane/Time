@extends('app')

@section('title', 'Hello Bamako')
<img src="/images/sup.png" alt="Mali" class="rounded shadow-md h-15 mt-12" >
@section('content')

    <h1 class="text-5xl font-semibold mt-5 text-indigo-600 ">Welcome at Sup'Management</h1>
<p class="text-lg text-red-800 ">Il fait actuellement {{ date('H:i.') }}</p>

@endsection
