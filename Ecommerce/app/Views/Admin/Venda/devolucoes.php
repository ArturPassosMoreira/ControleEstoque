<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('content') ?>
<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('content') ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-cart icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>
                <?php echo $title; ?>
                <div class="page-title-subheading">
                    <?php echo $subtitle; ?>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="pe-7s-diskette"></i>
                    </span>
                    Nova Devolução
                </button>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>
<?php echo $this->endSection() ?>