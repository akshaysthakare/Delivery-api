<section class="content-header">
  <h1>
    Images Order
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
            <dt scope="row"><?= __('Image') ?></dt>
            <dd><?= $imagesOrder->has('image') ? $this->Html->link($imagesOrder->image->name, ['controller' => 'Images', 'action' => 'view', $imagesOrder->image->id]) : '' ?></dd>
            <dt scope="row"><?= __('Order') ?></dt>
            <dd><?= $imagesOrder->has('order') ? $this->Html->link($imagesOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $imagesOrder->order->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($imagesOrder->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($imagesOrder->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($imagesOrder->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
