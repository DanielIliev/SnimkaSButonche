<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
	<style>

	</style>

	<!-- Home page -->
	<div data-role="page" data-theme="d" data-dialog="true" data-close-btn="off">
		<div data-role="header">
			<h1>Избери действие</h1>
		</div>
		<div data-role="main" class="ui-content">
			<div class="ui-solo-grid">
				<a href="#purchases" data-role="button" data-transition="slide" title="Продажба">Преглед на продажби</a>
			</div>
			<div class="ui-solo-grid">
				<a href="#loans" data-role="button" data-transition="slide" title="Продажба">Преглед на наеми</a>
			</div>
			<div class="ui-solo-grid">
				<a href="#admin" data-role="button" data-transition="slide" title="Продажба">Администриране</a>
			</div>
		</div>
		<div data-role="footer">
			<h1>&nbsp;</h1>
		</div>
	</div>

	<!-- Current offer page -->
	<div data-role="page" data-theme="d" id="current_offer">
		<div data-role="header">
			<h1>Информация за обява</h1>
		</div>
		<div data-role="main" class="ui-content main-page">
			<h1>Инфо</h1>
		</div>
		<div data-role="footer">
			<h1>&nbsp;</h1>
		</div>
	</div>

	<!-- Current contact dialog -->
	<div data-role="dialog" data-theme="d" id="contact">
		<div data-role="header">
			<h1>Информация за обява</h1>
		</div>
		<div data-role="main" class="ui-content">
			<h1>Контакт</h1>
		</div>
		<div data-role="footer">
			<h1>&nbsp;</h1>
		</div>
	</div>

	<!-- Loan page -->
	<div data-role="page" data-theme="d" id="loans">
		<div data-role="header">
			<h1>Наемане</h1>
		</div>
		<div data-role="main" class="ui-content main-page">
			<div class="table-holder">
				<table>
					<thead>
					<tr>
						<th>ID</th>
						<th>Собственик</th>
						<th>Адрес на обявата</th>
						<th>Контакти</th>
						<th>Допълнителна информация</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td style="color: green;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: orange;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td style="color: red;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div><!-- ./table-holder -->
		</div>
		<div data-role="footer">
			<h1>&nbsp;</h1>
		</div>
	</div>


	<!-- Purchase page -->
	<div data-role="page" data-theme="d" id="purchases">
		<div data-role="header">
			<h1>Продажба</h1>
		</div>
		<div data-role="main" class="ui-content main-page">
			<div class="table-holder">
				<table>
					<thead>
					<tr>
						<th>ID</th>
						<th>Собственик</th>
						<th>Адрес на обявата</th>
						<th>Контакти</th>
						<th>Допълнителна информация</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td style="color: green;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: orange;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td style="color: red;">Петър Драганов</td>
						<td>ж.к. Овча Купел</td>
						<td>
							<a href="#contact" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
						<td>
							<a href="#current_offer" data-transition="slide" data-role="button">
								Покажи
							</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div><!-- ./table-holder -->
		</div>
		<div data-role="footer">
			<h1>&nbsp;</h1>
		</div>
	</div>

	<!-- Admin page -->
	<div data-role="page" data-theme="d" data-dialog="true" id="admin">
		<div data-role="header">
			<h1>Вход</h1>
		</div>
		<div data-role="main" class="ui-content">
			<form type="get" method="">
				<label for="username">Име:</label>
				<input type="text" id="username" data-mini="true" required/>
				<label for="password">Парола:</label>
				<input type="password" id="password" data-mini="true" required/>
				<br />
				<input type="submit" value="Влез" />
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>