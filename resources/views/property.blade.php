@extends('layouts.Master')
@section('title', 'Имоти')
@section('content')
	<div class="table-responsive">
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>ID</th>
					<th>Собственик</th>
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
						<a href="#imageModal" class="btn btn-default btn-lg" data-toggle="modal" title="Снимки">
							<span class="glyphicon glyphicon-picture"></span>
						</a>
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
	<!-- Image Modal -->
	<div id="imageModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Снимки към обява</h4>
				</div>
				<div class="modal-body">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img class="pic" src="http://i.imgur.com/JpBL7ai.png" alt="No Image" />
							</div>

							<div class="item">
								<img class="pic" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Panda_Cub_from_Wolong,_Sichuan,_China.JPG" alt="No Image" />
							</div>

							<div class="item">
								<img class="pic" src="http://i.imgur.com/JpBL7ai.png" alt="No Image" />
							</div>

							<div class="item">
								<img class="pic" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Panda_Cub_from_Wolong,_Sichuan,_China.JPG" alt="No Image" />
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="modal-footer">
					&nbsp;
				</div>
			</div>
		</div>
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
									Собственик
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Квадратура
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Адрес
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Район
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Вид имот
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Брокерска забележка
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Преход
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Обзавеждане
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Цена
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Коментар по цената
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Етаж
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Асансьор
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Коментар към етажа
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Описание на настилките
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Вид на строителство
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Комисионна
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Комисионна забележка
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Дата на оферта
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Квадратура
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Източник
								</th>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<th class="scope">
									Имота се продава
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
	<script>
		$(function() {
			$('.gallery_img').click(function (e) {
				$('#imageModal img').attr('src', $(this).attr('data-img-url'));
			});
		});
	</script>
@endsection
