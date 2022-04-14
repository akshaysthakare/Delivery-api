<section class="content-header">
  <h1>
    Address
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
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($address->name) ?></dd>
            <dt scope="row"><?= __('Address1') ?></dt>
            <dd><?= h($address->address1) ?></dd>
            <dt scope="row"><?= __('Address2') ?></dt>
            <dd><?= h($address->address2) ?></dd>
            <dt scope="row"><?= __('Address3') ?></dt>
            <dd><?= h($address->address3) ?></dd>
            <dt scope="row"><?= __('City') ?></dt>
            <dd><?= h($address->city) ?></dd>
            <dt scope="row"><?= __('State') ?></dt>
            <dd><?= h($address->state) ?></dd>
            <dt scope="row"><?= __('Mobile') ?></dt>
            <dd><?= h($address->mobile) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($address->id) ?></dd>
            <dt scope="row"><?= __('Latitude') ?></dt>
            <dd><?= $this->Number->format($address->latitude) ?></dd>
            <dt scope="row"><?= __('Longitude') ?></dt>
            <dd><?= $this->Number->format($address->longitude) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($address->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($address->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
