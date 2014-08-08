@extends('layouts.master')

@section('content')

The random number is : {{{ $rand_num }}}
<br>
Your guess was : {{{ $guess }}}
<br>

@if($guess == $rand_num)
	Good guess!
@else
	Guess again.
@endif

@stop
