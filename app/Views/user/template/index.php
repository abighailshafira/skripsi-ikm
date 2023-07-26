<?= $this->include('template/header'); ?>

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
<!-- header-fixed header-mobile-fixed sidebar-enabled page-loading -->

<?= $this->include('user/template/header'); ?>

<?= $this->renderSection('content'); ?>

<?= $this->include('template/scrolltotop'); ?>
<?= $this->include('template/footer'); ?>