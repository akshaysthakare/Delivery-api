<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Addresses

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
                  <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address3') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($addresses as $address): ?>
                <tr>
                  <td><?= $this->Number->format($address->id) ?></td>
                  <td><?= h($address->name) ?></td>
                  <td><?= h($address->address1) ?></td>
                  <td><?= h($address->address2) ?></td>
                  <td><?= h($address->address3) ?></td>
                  <td><?= h($address->city) ?></td>
                  <td><?= h($address->state) ?></td>
                  <td><?= h($address->mobile) ?></td>
                  <td><?= $this->Number->format($address->latitude) ?></td>
                  <td><?= $this->Number->format($address->longitude) ?></td>
                  <td><?= h($address->created) ?></td>
                  <td><?= h($address->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $address->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id), 'class'=>'btn btn-danger btn-xs']) ?>
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