<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>


		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<ul>
							<?php foreach($errors->all() as $error): ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; ?>
						</ul>

						 <?php echo Form::open(['action' => 'User@Authenticate']); ?>

						<fieldset>

							<?php if(session()->has('flash_message')): ?>
								<div class="form-group">
									<p><?php echo e(session()->get('flash_message')); ?></p>
								</div>
							<?php endif; ?>

							<!-- Email field -->
							<div class="form-group">
								<?php echo Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Password field -->
							<div class="form-group">
								<?php echo Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Submit field -->
							<div class="form-group">
								<?php echo Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']); ?>

							</div>

						</fieldset>
						<?php echo Form::close(); ?>


					</div>
				</div>


			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>