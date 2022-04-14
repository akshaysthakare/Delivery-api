<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Orders

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('sku') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('pickup_address_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('dropoff_address_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_weight') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_price') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('pickup_date') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('dropoff_date') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('delivery_boy_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('order_type_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('order_status_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('delivery_boy_rating') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('customer_comments') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('delivery_comments') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($orders as $order): ?>
                <tr>
                  <td><?= $this->Number->format($order->id) ?></td>
                  <td><?= h($order->sku) ?></td>
                  <td><?= $this->Number->format($order->pickup_address_id) ?></td>
                  <td><?= $this->Number->format($order->dropoff_address_id) ?></td>
                  <td><?= h($order->product_name) ?></td>
                  <td><?= $this->Number->format($order->product_weight) ?></td>
                  <td><?= $this->Number->format($order->product_price) ?></td>
                  <td><?= h($order->pickup_date) ?></td>
                  <td><?= h($order->dropoff_date) ?></td>
                  <td><?= $this->Number->format($order->customer_id) ?></td>
                  <td><?= $this->Number->format($order->delivery_boy_id) ?></td>
                  <td><?= $this->Number->format($order->order_type_id) ?></td>
                  <td><?= $this->Number->format($order->vendor_id) ?></td>
                  <td><?= $this->Number->format($order->order_status_id) ?></td>
                  <td><?= $this->Number->format($order->delivery_boy_rating) ?></td>
                  <td><?= h($order->customer_comments) ?></td>
                  <td><?= h($order->delivery_comments) ?></td>
                  <td><?= h($order->created) ?></td>
                  <td><?= h($order->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $order->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>