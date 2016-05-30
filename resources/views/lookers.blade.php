@extends('layouts.Master')
@section('title', 'Наеми')
@section('content')
	<div class="table-responsive">
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>ID</th>
					<th>Име</th>
					<th>Търсещ</th>
					<th>Контакт</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						Колиба
					</td>
					<td>
						<a href="{{ route('contact') }}">
							Покажи
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
