<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="login-form">
	<div class="text-center mb-10">
		<h3 class=""><?=lang('Auth.forgotPassword')?></h3>
		<!-- <p class="text-muted font-weight-bold"></p> -->
	</div>
	<?= view('Myth\Auth\Views\_message_block') ?>
	<!--begin::Alert-->
	<div class="alert alert-custom alert-light fade show mb-5" role="alert">
		<div class="alert-icon">
			<span class="svg-icon svg-icon-2x svg-icon-primary">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
						<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
						<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
					</g>
				</svg>
			</span>
		</div>
		<div class="alert-text"><?=lang('Auth.enterEmailForInstructions')?></div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
					<i class="ki ki-close"></i>
				</span>
			</button>
		</div>
	</div>
	<!--end::Alert-->

	<form class="form" novalidate="novalidate" action="<?= url_to('forgot') ?>" method="post">
		<?= csrf_field(); ?>
		<div class="form-group pb-3 m-0">
			<label for="email"><?=lang('Auth.emailAddress')?></label>
			<input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> h-auto" type="email" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>"/>
			<span class="form-text text-muted">Pastikan emailmu sudah benar sebelum melanjutkan.</span>
			<div class="invalid-feedback">
				<?= session('errors.email') ?>
			</div>
		</div>

		<div class="form-group d-flex flex-wrap flex-center">
			<button type="submit" class="btn btn-primary font-weight-bold px-9 py-3 my-3 mx-2"><?=lang('Auth.sendInstructions')?></button>
			<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-3 my-3 mx-2">Cancel</button>
		</div>
	</form>
</div>
<!--end::Content-->

<?= $this->endSection(); ?>