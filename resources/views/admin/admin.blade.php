@extends('partials.main')

@section('content')
@if ($message = Session::get('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">Success!</strong>
<span class="block sm:inline">{{ $message }}</span>
</div>
<br>
@endif

@livewire('admin.users-index')

@endsection