<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Order
      <small><?php echo __('Edit'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($order, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('sku');
                echo $this->Form->control('pickup_address_id', ['options' => $pickupAddresses]);
                echo $this->Form->control('dropoff_address_id', ['options' => $dropoffAddresses]);
                echo $this->Form->control('product_name');
                echo $this->Form->control('product_weight');
                echo $this->Form->control('product_price');
                echo $this->Form->control('pickup_date');
                echo $this->Form->control('dropoff_date');
                echo $this->Form->control('customer_id', ['options' => $customers]);
                echo $this->Form->control('delivery_boy_id', ['options' => $deliveryBoys]);
                echo $this->Form->control('order_type_id', ['options' => $orderTypes]);
                echo $this->Form->control('vendor_id', ['options' => $vendors]);
                echo $this->Form->control('order_status_id', ['options' => $orderStatuses]);
                echo $this->Form->control('delivery_boy_rating');
                echo $this->Form->control('customer_comments');
                echo $this->Form->control('delivery_comments');
                echo $this->Form->control('images._ids', ['options' => $images]);
                echo $this->Form->control('thumbnails._ids', ['options' => $thumbnails]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
