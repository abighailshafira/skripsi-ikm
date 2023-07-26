<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<!--begin::Content-->
<!-- <div class="login-form login-signup"> -->
<div class="login-form">
	<div class="text-center mb-10">
		<h2 class="font-weight-bold"><?=lang('Auth.register')?></h2>
		<p class="text-muted font-weight-bold">Enter your details to create your account</p>
	</div>
	<?= view('Myth\Auth\Views\_message_block') ?>
	<!--begin::Form-->
	<!-- <form class="form" novalidate="novalidate" id="kt_login_signup_form"> -->
	<form class="form" novalidate="novalidate" action="<?= url_to('register') ?>" method="post">
	<?= csrf_field() ?>

		<div class="form-group pb-3 m-0">
			<label for="username"><?=lang('Auth.username')?></label>
			<input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> h-auto" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>"/>
			<div class="invalid-feedback">
				<?= session('errors.email') ?>
			</div>
		</div>
		<div class="form-group pb-3 m-0">
			<label for="email"><?=lang('Auth.email')?></label>
			<input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> h-auto" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>"/>
			<small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
		</div>
		<div class="form-group pb-3 m-0">
			<label><?=lang('Auth.password')?></label>
			<input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> h-auto" name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off" />
			<span class="form-text text-muted">We'll never share your email with anyone else.</span>
		</div>
		<div class="form-group m-0">
			<label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
			<input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> h-auto" name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" />
		</div>

		<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-7">
			<div class="my-3 mr-2">
				<!-- <a href="javascript:;" id="kt_login_signup_cancel" class="font-weight-bold">Login</a> -->
				<span class="text-muted mr-2"><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>" class="font-weight-bold"><?=lang('Auth.signIn')?></a></span>				
			</div>
			<button type="submit" class="btn btn-primary font-weight-bold px-9 py-3 my-3"><?=lang('Auth.register')?></button>
			<!-- id="kt_login_signup_submit" -->
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Content-->

<?= $this->endSection(); ?>