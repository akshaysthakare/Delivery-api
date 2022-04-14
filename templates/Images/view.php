<section class="content-header">
  <h1>
    Image
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
            <dd><?= h($image->name) ?></dd>
            <dt scope="row"><?= __('File Name') ?></dt>
            <dd><?= h($image->file_name) ?></dd>
            <dt scope="row"><?= __('Mime Type') ?></dt>
            <dd><?= h($image->mime_type) ?></dd>
            <dt scope="row"><?= __('Extension') ?></dt>
            <dd><?= h($image->extension) ?></dd>
            <dt scope="row"><?= __('Path') ?></dt>
            <dd><?= h($image->path) ?></dd>
            <dt scope="row"><?= __('Url') ?></dt>
            <dd><?= h($image->url) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($image->id) ?></dd>
            <dt scope="row"><?= __('Size') ?></dt>
            <dd><?= $this->Number->format($image->size) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($image->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($image->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Orders') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($image->orders)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Sku') ?></th>
                    <th scope="col"><?= __('Pickup Address Id') ?></th>
                    <th scope="col"><?= __('Dropoff Address Id') ?></th>
                    <th scope="col"><?= __('Product Name') ?></th>
                    <th scope="col"><?= __('Product Weight') ?></th>
                    <th scope="col"><?= __('Product Price') ?></th>
                    <th scope="col"><?= __('Pickup Date') ?></th>
                    <th scope="col"><?= __('Dropoff Date') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Delivery Boy Id') ?></th>
                    <th scope="col"><?= __('Order Type Id') ?></th>
                    <th scope="col"><?= __('Vendor Id') ?></th>
                    <th scope="col"><?= __('Order Status Id') ?></th>
                    <th scope="col"><?= __('Delivery Boy Rating') ?></th>
                    <th scope="col"><?= __('Customer Comments') ?></th>
                    <th scope="col"><?= __('Delivery Comments') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($image->orders as $orders): ?>
              <tr>
                    <td><?= h($orders->id) ?></td>
                    <td><?= h($orders->sku) ?></td>
                    <td><?= h($orders->pickup_address_id) ?></td>
                    <td><?= h($orders->dropoff_address_id) ?></td>
                    <td><?= h($orders->product_name) ?></td>
                    <td><?= h($orders->product_weight) ?></td>
                    <td><?= h($orders->product_price) ?></td>
                    <td><?= h($orders->pickup_date) ?></td>
                    <td><?= h($orders->dropoff_date) ?></td>
                    <td><?= h($orders->customer_id) ?></td>
                    <td><?= h($orders->delivery_boy_id) ?></td>
                    <td><?= h($orders->order_type_id) ?></td>
                    <td><?= h($orders->vendor_id) ?></td>
                    <td><?= h($orders->order_status_id) ?></td>
                    <td><?= h($orders->delivery_boy_rating) ?></td>
                    <td><?= h($orders->customer_comments) ?></td>
                    <td><?= h($orders->delivery_comments) ?></td>
                    <td><?= h($orders->created) ?></td>
                    <td><?= h($orders->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
          <?php if (!empty($image->thumbnails)): ?>
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
              <?php foreach ($image->thumbnails as $thumbnails): ?>
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
