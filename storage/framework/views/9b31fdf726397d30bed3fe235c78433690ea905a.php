<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>


		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Register</h3>
					</div>
					<div class="panel-body">
						<ul>
							<?php foreach($errors->all() as $error): ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; ?>
						</ul>

						 <?php echo Form::open(['action' => 'Registration@Store']); ?>

						<fieldset>

							<?php if(session()->has('flash_message')): ?>
								<div class="form-group">
									<p><?php echo e(session()->get('flash_message')); ?></p>
								</div>
							<?php endif; ?>

							<!-- Email field -->
							<div class="form-group">
								<?php echo Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Password field -->
							<div class="form-group">
								<?php echo Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Password Confirmation field -->
							<div class="form-group">
								<?php echo Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- First name field -->
							<div class="form-group">
								<?php echo Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Middle name field -->
							<div class="form-group">
								<?php echo Form::text('middle_name', null, ['placeholder' => 'Middle Name', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Last name field -->
							<div class="form-group">
								<?php echo Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control', 'required' => 'required']); ?>

							</div>

							<!-- Submit field -->
							<div class="form-group">
								<?php echo Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']); ?>

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