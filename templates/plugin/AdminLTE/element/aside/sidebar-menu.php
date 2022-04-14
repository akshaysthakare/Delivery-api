<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Users</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/users/add'); ?>"><i class="fa fa-circle-o"></i> New User</a></li>
      <li><a href="<?php echo $this->Url->build('/users'); ?>"><i class="fa fa-circle-o"></i>List of Users</a></li>
    </ul>
  </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>User Statuses</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/user-statuses/add'); ?>"><i class="fa fa-circle-o"></i> New User Statuses</a></li>
            <li><a href="<?php echo $this->Url->build('/user-statuses'); ?>"><i class="fa fa-circle-o"></i>List of User Statuses</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Orders</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/orders/add'); ?>"><i class="fa fa-circle-o"></i> New Orders</a></li>
            <li><a href="<?php echo $this->Url->build('/orders'); ?>"><i class="fa fa-circle-o"></i>List of Orders</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Order Statuses</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/order-statuses/add'); ?>"><i class="fa fa-circle-o"></i> New Order Statuses</a></li>
            <li><a href="<?php echo $this->Url->build('/order-statuses'); ?>"><i class="fa fa-circle-o"></i>List of Order Statuses</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Order Types</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/order-types/add'); ?>"><i class="fa fa-circle-o"></i> New Order Types</a></li>
            <li><a href="<?php echo $this->Url->build('/order-types'); ?>"><i class="fa fa-circle-o"></i>List of Order Types</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Addresses</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/addresses/add'); ?>"><i class="fa fa-circle-o"></i> New Addresses</a></li>
            <li><a href="<?php echo $this->Url->build('/addresses'); ?>"><i class="fa fa-circle-o"></i>List of Addresses</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Types</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/types/add'); ?>"><i class="fa fa-circle-o"></i> New Types</a></li>
            <li><a href="<?php echo $this->Url->build('/types'); ?>"><i class="fa fa-circle-o"></i>List of Types</a></li>
        </ul>
    </li>
</ul>
