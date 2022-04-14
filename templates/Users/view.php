<section class="content-header">
  <h1>
    User
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Username') ?></dt>
            <dd><?= h($user->username) ?></dd>
            <dt scope="row"><?= __('Password') ?></dt>
            <dd><?= h($user->password) ?></dd>
            <dt scope="row"><?= __('First Name') ?></dt>
            <dd><?= h($user->first_name) ?></dd>
            <dt scope="row"><?= __('Last Name') ?></dt>
            <dd><?= h($user->last_name) ?></dd>
            <dt scope="row"><?= __('Mobile') ?></dt>
            <dd><?= h($user->mobile) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($user->email) ?></dd>
            <dt scope="row"><?= __('Employee Code') ?></dt>
            <dd><?= h($user->employee_code) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($user->id) ?></dd>
            <dt scope="row"><?= __('Active') ?></dt>
            <dd><?= $this->Number->format($user->active) ?></dd>
            <dt scope="row"><?= __('Thumbnail Id') ?></dt>
            <dd><?= $this->Number->format($user->thumbnail_id) ?></dd>
            <dt scope="row"><?= __('Image Id') ?></dt>
            <dd><?= $this->Number->format($user->image_id) ?></dd>
            <dt scope="row"><?= __('User Status Id') ?></dt>
            <dd><?= $this->Number->format($user->user_status_id) ?></dd>
            <dt scope="row"><?= __('Type Id') ?></dt>
            <dd><?= $this->Number->format($user->type_id) ?></dd>
            <dt scope="row"><?= __('Address Id') ?></dt>
            <dd><?= $this->Number->format($user->address_id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($user->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($user->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
