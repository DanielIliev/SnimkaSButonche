<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>


		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Change Password</h3>
					</div>
					<div class="panel-body">
						<ul>
							<?php foreach($errors->all() as $error): ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; ?>
						</ul>

						<?php echo e(Form::open(['action' => 'User@StoreNewPassword'])); ?>

						<fieldset>
							<?php if(session()->has('flash_message')): ?>
									<div class="form-group">
										<p><?php echo e(session()->get('flash_message')); ?></p>
									</div>
							<?php endif; ?>
							<div class="form-group">
							  <?php echo e(Form::password('old_password', array('placeholder'=>'current password', 'required'=>'required'))); ?>

							</div>
							<div class="form-group">
							  <?php echo e(Form::password('password', array('placeholder'=>'new password', 'required'=>'required'))); ?>

							</div>
							<div class="form-group">
							  <?php echo e(Form::password('password_confirmation', array('placeholder'=>'new password confirmation', 'required'=>'required'))); ?>

							</div>
							<div class="form-group">
							  <?php echo e(Form::submit('Reset Password', array('class' => 'btn'))); ?>

							</div>
						</fieldset>
						<?php echo e(Form::close()); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>