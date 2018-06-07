@extends('frontend.knight.layout.master')

@section('section')

	@include('frontend.knight.section.service')

	@include('frontend.knight.section.featured')
	
	@if(count($portfolios) > 0)
		@include('frontend.knight.section.portfolio')
	@endif

	@include('frontend.knight.section.client')

	@include('frontend.knight.section.logo')

	@if(count($members) >0)
		@include('frontend.knight.section.team')
	@endif
	
	@include('frontend.knight.section.business')

	@include('frontend.knight.section.contact')

@endsection

@section('script')
	@include('frontend.knight.script._mainpage')
@endsection