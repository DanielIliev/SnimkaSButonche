@extends('layouts.Master')
@section('title', 'Допълнителна Информация')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3 thumbnail" style="height:200px">
				<img src="http://i.imgur.com/JpBL7ai.png" alt="No Image" height="200px" />
			</div>
			<div class="col-md-1">
				&nbsp;
			</div>
			<div class="col-md-8">
				<table class='table table-bordered table-reflow'>
					<tbody>
						<tr>
							<th class="scope">
								Собственик
							</th>
							<td>
								Тошо
							</td>
						</tr>
						<tr>
							<th class="scope">
								Квадратура
							</th>
							<td>
								200 квадрата
							</td>
						</tr>
						<tr>
							<th class="scope">
								Вафли
							</th>
							<td>
								Боровец
							</td>
						</tr>
						<tr>
							<th class="scope">
								Телефон
							</th>
							<td>
								20-15
							</td>
						</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Снимки</h1>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<a class="thumbnail gallery_img" href="#imageModal" data-toggle="modal" data-img-url="https://upload.wikimedia.org/wikipedia/commons/c/cd/Panda_Cub_from_Wolong,_Sichuan,_China.JPG">
					<img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Panda_Cub_from_Wolong,_Sichuan,_China.JPG" alt="No Image">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<a class="thumbnail gallery_img" href="#imageModal" data-toggle="modal" data-img-url="http://i.imgur.com/JpBL7ai.png">
					<img class="img-responsive" src="http://i.imgur.com/JpBL7ai.png" alt="No Image">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<a class="thumbnail gallery_img" href="#imageModal" data-toggle="modal" data-img-url="http://i.imgur.com/JpBL7ai.png">
					<img class="img-responsive" src="http://i.imgur.com/JpBL7ai.png" alt="No Image">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<a class="thumbnail gallery_img" href="#imageModal" data-toggle="modal" data-img-url="http://i.imgur.com/JpBL7ai.png">
					<img class="img-responsive" src="http://i.imgur.com/JpBL7ai.png" alt="No Image">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6">
				<a class="thumbnail gallery_img" href="#imageModal" data-toggle="modal" data-img-url="http://i.imgur.com/JpBL7ai.png">
					<img class="img-responsive" src="http://i.imgur.com/JpBL7ai.png" alt="No Image">
				</a>
			</div>
		</div>
		<!-- Modal -->
		<div id="imageModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<img class="img-responsive modal-img" src="" alt="No Image" />
					</div>
					<div class="modal-footer">
						&nbsp;
					</div>
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
