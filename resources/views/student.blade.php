@extends('_layout.dashboard')
@section('content')

@if($layout=='index')
<div class="container-fluid">
@include('stud.index')
</div>
@elseif($layout=='create')
<div class="container-fluid">
@include('stud.create')
</div>
@elseif($layout=='show')
<div class="container-fluid">
@include('stud.show')
</div>
@elseif($layout=='edit')
<div class="container-fluid">
@include('stud.edit')
</div>
@endif

@endsection