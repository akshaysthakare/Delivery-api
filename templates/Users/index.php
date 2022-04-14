<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users

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
                  <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('thumbnail_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_status_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('employee_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= h($user->username) ?></td>
                  <td><?= h($user->password) ?></td>
                  <td><?= $this->Number->format($user->active) ?></td>
                  <td><?= h($user->first_name) ?></td>
                  <td><?= h($user->last_name) ?></td>
                  <td><?= h($user->mobile) ?></td>
                  <td><?= $this->Number->format($user->thumbnail_id) ?></td>
                  <td><?= $this->Number->format($user->image_id) ?></td>
                  <td><?= $this->Number->format($user->user_status_id) ?></td>
                  <td><?= $this->Number->format($user->type_id) ?></td>
                  <td><?= h($user->email) ?></td>
                  <td><?= h($user->employee_code) ?></td>
                  <td><?= $this->Number->format($user->address_id) ?></td>
                  <td><?= h($user->created) ?></td>
                  <td><?= h($user->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
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