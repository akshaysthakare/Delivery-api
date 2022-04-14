<section class="content-header">
  <h1>
    Order Status
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
            <dd><?= h($orderStatus->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($orderStatus->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($orderStatus->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($orderStatus->modified) ?></dd>
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
          <?php if (!empty($orderStatus->orders)): ?>
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
              <?php foreach ($orderStatus->orders as $orders): ?>
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
</section>
