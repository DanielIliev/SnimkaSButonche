@extends('layouts.Master')
@section('title', 'Наематели')
@section('content')
	<div class="table-responsive">
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>ID</th>
					<th>Име</th>
					<th>Адрес</th>
					<th>Опции</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td class="options">
						<a href="#infoModal" class="btn btn-default btn-lg" data-toggle="modal" title="Подробна информация">
							<span class="glyphicon glyphicon-tags"></span>
						</a>
						<a href="#historyModal" class="btn btn-default btn-lg" data-toggle="modal" title="История">
							<span class="glyphicon glyphicon-book"></span>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- Info Modal -->
	<div id="infoModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Подробна информация</h4>
				</div>
				<div class="modal-body">
					<table class='table table-bordered table-reflow'>
						<tbody>
							<tr>
								<th class="scope">
									ID
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Име
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Ценови диапазон
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Брой огледи
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Други агенции
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Брой наематели
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Вид наематели
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Превозно средство
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Домашен любимец
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Вредни навици
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Предишен адрес
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Дата на преместване
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Огледи
								</th>
								<td>
									<a href="#">Линк</a><br />
									<a href="#">Линк</a><br />
								</td>
							</tr>
							<tr>
								<th class="scope">
									Коментар на брокера
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
					</table>
				</div>
				<div class="modal-footer">
					&nbsp;
				</div>
			</div>
		</div>
	</div>
	<!-- History Modal -->
	<div id="historyModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">История на разговори</h4>
				</div>
				<div class="modal-body">
					<h3>50 разговора</h3>
				</div>
				<div class="modal-footer">
					&nbsp;
				</div>
			</div>
		</div>
	</div>
@endsection
