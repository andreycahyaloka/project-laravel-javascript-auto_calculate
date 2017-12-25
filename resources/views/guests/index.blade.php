@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-sm-offset-2">
			<div class="card border-dark">
				<div class="card-header border-dark text-center">
					Title
				</div>

				<div class="card-body">
					<div class="form-row">
						<div class="col-md-6">
							<h4 class="card-title">Subtitle</h4>
							<h6 class="card-subtitle mb-2 text-muted">
								Javascript Auto_Calculate
							</h6>
						</div>
					</div>

					<p class="card-text">
						{!! Form::open([
								'route' => ['guest.index'],
								'method' => 'GET',
								'name' => 'autoSumForm',
							])
						!!}
						<div class="form-row">
							<div class="form-group col-md-6">
							{{ Form::label('first_value', 'First Value:') }}
							{{ Form::text('first_value', null, [
									'class' => 'form-control',
									'placeholder' => '(ex: 00.00, 75.50, 100.00)',
									'autocomplete' => 'off',
									'required',
									'pattern' => '([0-9]?[0-9]{2}).([0-9]{2})|100.00',
									'title' => 'number only',
									'onFocus' => 'startCalc();',
									'onBlur' => 'stopCalc();',
								])
							}}
							</div>

							<div class="form-group col-md-6">
							{{ Form::label('second_value', 'Second Value:') }}
							{{ Form::text('second_value', null, [
									'class' => 'form-control',
									'placeholder' => '(ex: 00.00, 75.50, 100.00)',
									'autocomplete' => 'off',
									'required',
									'pattern' => '([0-9]?[0-9]{2}).([0-9]{2})|100.00',
									'title' => 'number only',
									'onFocus' => 'startCalc();',
									'onBlur' => 'stopCalc();',
								])
							}}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('result_value', 'Result:') }}
							{{ Form::text('result_value', null, [
									'class' => 'form-control',
									'required',
									'readonly',
									'value' => '0',
								])
							}}
						</div>
						{!! Form::close() !!}
					</p>
				</div>

				<!-- <div class="card-footer border-dark bg-transparent mb-0 mt-0 pb-0 pt-0"> -->
					<!--  -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<hr class="border-dark" />
</div>

@endsection