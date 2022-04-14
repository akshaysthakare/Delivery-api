<section class="content-header">
  <h1>
    Order
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
            <dt scope="row"><?= __('Sku') ?></dt>
            <dd><?= h($order->sku) ?></dd>
            <dt scope="row"><?= __('Pickup Address') ?></dt>
            <dd><?= $order->has('pickup_address') ? $this->Html->link($order->pickup_address->id, ['controller' => 'Users', 'action' => 'view', $order->pickup_address->id]) : '' ?></dd>
            <dt scope="row"><?= __('Dropoff Address') ?></dt>
            <dd><?= $order->has('dropoff_address') ? $this->Html->link($order->dropoff_address->id, ['controller' => 'Users', 'action' => 'view', $order->dropoff_address->id]) : '' ?></dd>
            <dt scope="row"><?= __('Product Name') ?></dt>
            <dd><?= h($order->product_name) ?></dd>
            <dt scope="row"><?= __('Customer') ?></dt>
            <dd><?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Users', 'action' => 'view', $order->customer->id]) : '' ?></dd>
            <dt scope="row"><?= __('Delivery Boy') ?></dt>
            <dd><?= $order->has('delivery_boy') ? $this->Html->link($order->delivery_boy->id, ['controller' => 'Users', 'action' => 'view', $order->delivery_boy->id]) : '' ?></dd>
            <dt scope="row"><?= __('Order Type') ?></dt>
            <dd><?= $order->has('order_type') ? $this->Html->link($order->order_type->name, ['controller' => 'OrderTypes', 'action' => 'view', $order->order_type->id]) : '' ?></dd>
            <dt scope="row"><?= __('Vendor') ?></dt>
            <dd><?= $order->has('vendor') ? $this->Html->link($order->vendor->id, ['controller' => 'Users', 'action' => 'view', $order->vendor->id]) : '' ?></dd>
            <dt scope="row"><?= __('Order Status') ?></dt>
            <dd><?= $order->has('order_status') ? $this->Html->link($order->order_status->name, ['controller' => 'OrderStatuses', 'action' => 'view', $order->order_status->id]) : '' ?></dd>
            <dt scope="row"><?= __('Customer Comments') ?></dt>
            <dd><?= h($order->customer_comments) ?></dd>
            <dt scope="row"><?= __('Delivery Comments') ?></dt>
            <dd><?= h($order->delivery_comments) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($order->id) ?></dd>
            <dt scope="row"><?= __('Product Weight') ?></dt>
            <dd><?= $this->Number->format($order->product_weight) ?></dd>
            <dt scope="row"><?= __('Product Price') ?></dt>
            <dd><?= $this->Number->format($order->product_price) ?></dd>
            <dt scope="row"><?= __('Delivery Boy Rating') ?></dt>
            <dd><?= $this->Number->format($order->delivery_boy_rating) ?></dd>
            <dt scope="row"><?= __('Pickup Date') ?></dt>
            <dd><?= h($order->pickup_date) ?></dd>
            <dt scope="row"><?= __('Dropoff Date') ?></dt>
            <dd><?= h($order->dropoff_date) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($order->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($order->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Images') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($order->images)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('File Name') ?></th>
                    <th scope="col"><?= __('Mime Type') ?></th>
                    <th scope="col"><?= __('Extension') ?></th>
                    <th scope="col"><?= __('Size') ?></th>
                    <th scope="col"><?= __('Path') ?></th>
                    <th scope="col"><?= __('Url') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($order->images as $images): ?>
              <tr>
                    <td><?= h($images->id) ?></td>
                    <td><?= h($images->name) ?></td>
                    <td><?= h($images->file_name) ?></td>
                    <td><?= h($images->mime_type) ?></td>
                    <td><?= h($images->extension) ?></td>
                    <td><?= h($images->size) ?></td>
                    <td><?= h($images->path) ?></td>
                    <td><?= h($images->url) ?></td>
                    <td><?= h($images->created) ?></td>
                    <td><?= h($images->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Thumbnails') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($order->thumbnails)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('File Name') ?></th>
                    <th scope="col"><?= __('Mime Type') ?></th>
                    <th scope="col"><?= __('Extension') ?></th>
                    <th scope="col"><?= __('Size') ?></th>
                    <th scope="col"><?= __('Path') ?></th>
                    <th scope="col"><?= __('Url') ?></th>
                    <th scope="col"><?= __('Image Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($order->thumbnails as $thumbnails): ?>
              <tr>
                    <td><?= h($thumbnails->id) ?></td>
                    <td><?= h($thumbnails->name) ?></td>
                    <td><?= h($thumbnails->file_name) ?></td>
                    <td><?= h($thumbnails->mime_type) ?></td>
                    <td><?= h($thumbnails->extension) ?></td>
                    <td><?= h($thumbnails->size) ?></td>
                    <td><?= h($thumbnails->path) ?></td>
                    <td><?= h($thumbnails->url) ?></td>
                    <td><?= h($thumbnails->image_id) ?></td>
                    <td><?= h($thumbnails->created) ?></td>
                    <td><?= h($thumbnails->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Thumbnails', 'action' => 'view', $thumbnails->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Thumbnails', 'action' => 'edit', $thumbnails->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Thumbnails', 'action' => 'delete', $thumbnails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thumbnails->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
