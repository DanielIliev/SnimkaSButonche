@extends('layouts.Master')
@section('title', 'Продажби')
@section('content')
	<div class="table-responsive">
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>ID</th>
					<th>Собственик</th>
					<th>Контакти</th>
					<th>Допълнителна информация</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<a href="{{ route('contact') }}">
							Покажи
						</a>
					</td>
					<td>
						<a href="{{ route('more_info') }}">
							Покажи
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
