<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">marts.id</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"> <i class="fa fa-repeat"></i> </a> </li>
            <li> <a href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a> </li>
          </ul>
        </div>
      </div>
      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
<!--            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">8</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 7 pending tasks</p>
                  </li>
                  <li> <a href="task.html" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right green_label">80%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="yellow_status task_height" style="width:50%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right yellow_label">50%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="blue_status task_height" style="width:70%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right blue_label">70%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="red_status task_height" style="width:85%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right red_label">85%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <span class="new"> <a href="task.html" class="pull_left">Create New</a> <a href="task.html" class="pull-right">View All</a> </span> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">4</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 4 mails</p>
                  </li>
                      <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail red_color"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
              
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="inbox.html"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="calendar.html"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="maps.html"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="todo.html"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="task.html"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="timeline.html"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
              
            </ul>-->
            
          </div>
        </div>
        <?php
          if (Yii::$app->user->isGuest) {
                 Html::a('Login', ['Login'], ['class' => 'user_adminname']);
                
            } 
            else {
        ?>
        <div class="user_admin dropdown"> 
          
          <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname"><?php  echo Yii::$app->user->identity->username ?></span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li><?= Html::a('<i class="fa fa-user"></i> Profile',array('employee/view')); ?></li>
            <li><?= Html::a('<i class="fa fa-question-circle"></i> Help',array('employee/view')); ?></li>
            <li><?= Html::a('<i class="fa fa-cog"></i> Setting',array('site/setting')); ?></li>
            <li><?= Html::a('<i class="fa fa-power-off"></i> Logout',array('site/logout'),['data-method' => 'post']); ?></li>
          </ul>
        </div>
                
        <?php        
            }
        ?>            
          
        
        <!--<a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>-->
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li>
              <?= Html::a('<i class="fa fa-home"></i> Dashboard <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span>',array('site/index')); ?>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Product Catalog <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Products</b>',array('products/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Categories</b>',array('category/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tag</b>',array('tag/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Package</b>',array('product-group/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manufacturer</b>',array('manufacturer/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Supplier</b>',array('supplier/index')); ?></li>
            </ul>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Customers <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Customers</b>',array('customer/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Address</b>',array('address/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Payment Channel</b>',array('payment/index')); ?></li>
            </ul>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Transaction <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Order</b>',array('order/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Purchase</b>',array('purchase/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tracking</b>',array('tracking/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Return</b>',array('return/index')); ?></li>
            </ul>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Post <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Post</b>',array('order/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Post Tag</b>',array('purchase/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Categories</b>',array('tracking/index')); ?></li>
            </ul>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Administration <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Employee</b>',array('employee/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Position Tag</b>',array('position/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>User</b>',array('user/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Delivery Time</b>',array('delivery-time/index')); ?></li>
              <li><?= Html::a('<span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Province</b>',array('province/index')); ?></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
         
                <?= $content ?>
            
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>    
    
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
