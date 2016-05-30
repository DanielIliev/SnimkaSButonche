@extends('layouts.Master')
@section('title', 'Контакт')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Данни от разговор</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="comment">Коментар:</label>
								<textarea class="form-control" rows="5" id="comment" required></textarea>
							</div>
							<label class="radio-inline"><input type="radio" name="available">Наличен</label>
							<label class="radio-inline"><input type="radio" name="unsure">Колебаещ</label>
							<label class="radio-inline"><input type="radio" name="unavailable">Неналичен</label>
							<br />
							<br />
							<input style="width: 100%;" type="submit" class="btn btn-primary" value="Публикувай" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
