<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="login-form login-signin">
	<div class="text-center mb-10">
		<h2 class="font-weight-bold"><?=lang('Auth.loginTitle')?></h2>
		<p class="text-muted font-weight-bold">Enter your username and password</p>
	</div>

	<?= view('Myth\Auth\Views\_message_block') ?>

	<!-- <form class="form" novalidate="novalidate" method="post" id="kt_login_signin_form"> -->
	<form class="form" action="<?= url_to('login') ?>" method="post">
		<?= csrf_field() ?>

		<?php if ($config->validFields === ['email']): ?>
		<div class="form-group pb-3 m-0">
			<label for="login"><?=lang('Auth.email')?></label>
			<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> h-auto" name="login" placeholder="<?=lang('Auth.email')?>"/>
			<span class="form-text text-muted">Pastikan emailmu sudah benar sebelum melanjutkan.</span>
			<div class="invalid-feedback">
				<?= session('errors.login') ?>
			</div>
		</div>

		<?php else: ?>
		<div class="form-group pb-3 m-0">
			<label for="login"><?=lang('Auth.emailOrUsername')?></label>
			<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> h-auto" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>"/>
			<div class="invalid-feedback">
				<?= session('errors.login') ?>
			</div>
		</div>

		<?php endif; ?>
		<div class="form-group pb-3 m-0">
			<label for="password"><?=lang('Auth.password')?></label>
			<input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> h-auto" name="password" placeholder="<?=lang('Auth.password')?>"/>
			<div class="invalid-feedback">
				<?= session('errors.password') ?>
			</div>
		</div>

		<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
			<?php if ($config->allowRemembering): ?>	
			<div class="checkbox-inline">
				<label class="checkbox checkbox-primary m-0 text-muted">
				<input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>/>
				<span></span><?=lang('Auth.rememberMe')?></label>
			</div>
			<?php endif; ?>
			
			<?php if ($config->activeResetter): ?>
			<a href="<?= url_to('forgot') ?>" class="text-muted text-hover-primary"><?=lang('Auth.forgotYourPassword')?></a>
			<?php endif; ?>
		</div>

		<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
			<div class="my-3 mr-2">
				<?php if ($config->allowRegistration) : ?>
				<span class="text-muted mr-2"><?=lang('Auth.needAnAccount')?></span>
				<a href="<?= url_to('register') ?>" class="font-weight-bold">Sign Up</a>
				<!-- <a href="/register" id="kt_login_signup" class="font-weight-bold">Register</a> -->
				<?php endif; ?>
			</div>
			<button type="submit" class="btn btn-primary font-weight-bold px-9 py-3 my-3 button-login"><?=lang('Auth.loginAction')?></button>
		</div>
	</form>
</div>
<!--end::Content-->

<?= $this->endSection(); ?>