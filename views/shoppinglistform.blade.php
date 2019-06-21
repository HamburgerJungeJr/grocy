@extends('layout.default')

@if($mode == 'edit')
	@section('title', $__t('Edit shopping list'))
@else
	@section('title', $__t('Create shopping list'))
@endif

@section('viewJsName', 'shoppinglistform')

@section('content')
<div class="row">
	<div class="col-lg-6 col-xs-12">
		<h1>@yield('title')</h1>

		<script>Grocy.EditMode = '{{ $mode }}';</script>

		@if($mode == 'edit')
			<script>Grocy.EditObjectId = {{ $shoppingList->id }};</script>
		@endif

		<form id="shopping-list-form" novalidate>

			<div class="form-group">
				<label for="name">{{ $__t('Name') }}</label>
				<input type="text" class="form-control" required id="name" name="name" value="@if($mode == 'edit'){{ $shoppingList->name }}@endif">
				<div class="invalid-feedback">{{ $__t('A name is required') }}</div>
			</div>

			<div class="form-group">
				<label for="description">{{ $__t('Description') }}</label>
				<textarea class="form-control" rows="2" id="description" name="description">@if($mode == 'edit'){{ $shoppingList->description }}@endif</textarea>
			</div>

			<button id="save-shopping-list-button" class="btn btn-success">{{ $__t('Save') }}</button>

		</form>
	</div>
</div>
@stop
