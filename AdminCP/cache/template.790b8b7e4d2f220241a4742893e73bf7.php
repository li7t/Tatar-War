<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>لوحة تحكم حرب التتار</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo add_style('bootstrap.min.css', ASSETS_DIR.'/bootstrap/'); ?>">
        <link rel="stylesheet" href="<?php echo add_style('bootstrap-responsive.min.css', ASSETS_DIR.'/bootstrap/'); ?>" >
        <link rel="stylesheet" href="<?php echo add_style('font-awesome.min.css', ASSETS_DIR.'/font-awesome/css/'); ?>" >
        <link rel="stylesheet" href="<?php echo add_style('normalize.css', ASSETS_DIR.'/normalize/'); ?>" >

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo add_style('flaty.css', ASSETS_DIR.'/css/'); ?>">
        <link rel="stylesheet" href="<?php echo add_style('flaty-responsive.css', ASSETS_DIR.'/css/'); ?>">

        <script src="<?php echo add_style('modernizr-2.6.2.min.js', ASSETS_DIR.'/modernizr/'); ?>"></script>
    </head>
    <body>

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                            حرب التتار
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-left">
                        <!-- BEGIN Button User -->
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                                <span class="hidden-phone" id="user_info">
                                    <?php echo $sessioninfo["username"];?>

                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu" style="min-width: 125px !important;">
                                <li>
                                    <a href="index.php?page=logout">
                                        <i class="icon-off"></i>
                                        تسجيل خروج
                                    </a>
                                </li>
                            </ul>
                            <!-- BEGIN User Dropdown -->
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li>
                        <form action="index.php" method="POST" class="search-form" >
                            <div class="control-group">
                                   <div class="controls" style="text-align:center;">
                                       
                                      <select class="input-medium" name="change_server" onchange="form.submit()">
                                        <?php $counter1=-1; if( isset($servers_list) && is_array($servers_list) && sizeof($servers_list) ) foreach( $servers_list as $key1 => $value1 ){ $counter1++; ?>

                                            <option <?php if( $_COOKIE['server_selected'] == $value1 ){ ?>selected="selected"<?php } ?> value="<?php echo $value1;?>"><?php echo $value1;?></option>
                                        <?php } ?>

                                      </select>
                                   </div>
                            </div>
                        </form>
                    </li>
                    <li <?php if( $controllers == 'index' ){ ?>class="active"<?php } ?>>
                        <a href="index.php">
                            <i class="icon-dashboard"></i>
                            <span>الصفحة الرئيسية</span>
                        </a>
                    </li>


                    <!-- configurations -->
                    <?php if( $quicktasks_allow ){ ?>

                    <li <?php if( $controllers == 'quicktasks' ){ ?>class="active"<?php } ?>>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span>عمليات سريعة</span>
                                <b class="arrow icon-angle-left"></b>
                            </a>

                            <!-- BEGIN Submenu -->
                            <ul class="submenu">
                                <li><a href="quicktasks?page=configurations">اعدادات عامة</a></li>
                                <li><a href="quicktasks?page=game_config">اعدادات اللعبة</a></li>
                                <li><a href="quicktasks?page=troop">قوات المعجزة</a></li>
                                <li><a href="quicktasks?page=news">اخبار الموقع</a></li>
                                <li><a href="quicktasks?page=general_message">خبر للاعضاء</a></li>
                                <li><a href="quicktasks?page=stats">الاحصائيات</a></li>
                                <li><a href="quicktasks?page=stop_attack">ايقاف الهجوم</a></li>
                                <li><a href="quicktasks?page=send_gold">ذهب لكل اللاعبين</a></li>
                                <li><a href="quicktasks?page=send_email">ارسال رسالة بريدية</a></li>
                                <li><a href="quicktasks?page=block_email">حظر بريد من التسجيل</a></li>
                                <li><a href="quicktasks?page=bad_words">فلترة الكلمات</a></li>
                            </ul>
                            <!-- END Submenu -->
                    </li>
                    <!-- plus -->
                    <li <?php if( $controllers == 'plus' ){ ?>class="active"<?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span>البلس</span>
                            <b class="arrow icon-angle-left"></b>
                        </a>

                            <!-- BEGIN Submenu -->
                            <ul class="submenu">
                                <li><a href="plus?page=config">اعدادات البلس</a></li>
                                <li><a href="plus?page=offers">عروض البلس</a></li>
                                <li><a href="plus?page=payment">طرق الدفع</a></li>
                            </ul>
                            <!-- END Submenu -->
                    </li>
                    <!-- news -->
                    <li <?php if( $controllers == 'news' ){ ?>class="active"<?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>الاخبار </span>
                            <b class="arrow icon-angle-left"></b>
                        </a>

                            <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="news?page=add"> اضافة خبر </a></li>
                            <li><a href="news?page=show"> عرض الاخبار</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <?php } ?>


                    <?php if( $supervisors_allow ){ ?>

                    <!-- supervisors -->
                    <li <?php if( $controllers == 'supervisors' ){ ?>class="active"<?php } ?>>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span>المشرفين</span>
                                <b class="arrow icon-angle-left"></b>
                            </a>

                            <!-- BEGIN Submenu -->
                            <ul class="submenu">
                                <li><a href="supervisors?page=register">اضافة مشرف</a></li>
                                <li><a href="supervisors?page=show">عرض المشرفين</a></li>
                            </ul>
                            <!-- END Submenu -->
                    </li>
                     <li <?php if( $controllers == 'servers' ){ ?>class="active"<?php } ?>>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span>السيرفرات </span>
                                <b class="arrow icon-angle-left"></b>
                            </a>

                            <!-- BEGIN Submenu -->
                            <ul class="submenu">
                                <li><a href="servers?page=add">اضافة سيرفر </a></li>
                                <li><a href="servers?page=show">عرض السيرفرات</a></li>
                                <li><a href="servers?page=edit">اعادة السيرفر </a></li>
                            </ul>
                            <!-- END Submenu -->
                    </li>
                    <?php } ?>


                    <?php if( $players_allow ){ ?>

                    <!-- players -->
                    <li <?php if( $controllers == 'players' ){ ?>class="active"<?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-text-width"></i>
                            <span>اللاعبين</span>
                            <b class="arrow icon-angle-left"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="players?page=gold">ارسال ذهب للاعب</a></li>
							<li><a href="players?page=activate">ارسال رسالة تفعيل</a></li>
                            <li><a href="players?page=search">البحث عن اللاعبين</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <?php } ?>


                    <?php if( $villages_allow ){ ?>

                    <!-- villages -->
                    <li <?php if( $controllers == 'villages' ){ ?>class="active"<?php } ?>>
                        <a href="villages" >
                            <i class="icon-edit"></i>
                            <span>القرى</span>
                        </a>
                    </li>
                    <?php } ?>



                    <?php if( $alliances_allow ){ ?>

                    <!-- alliances -->
                    <li <?php if( $controllers == 'alliances' ){ ?>class="active"<?php } ?>>
                        <a href="alliances?page=show">
                            <i class="icon-list"></i>
                            <span>التحالفات</span>
                        </a>
                    </li>
                    <?php } ?>


                    <?php if( $block_allow ){ ?>

                    <!-- block -->
                    <li <?php if( $controllers == 'block' ){ ?>class="active"<?php } ?>>
                        <a href="block">
                            <i class="icon-calendar"></i>
                            <span>الحظر</span>
                        </a>
                    </li>
                    <!-- messages -->
                    <li <?php if( $controllers == 'messages' ){ ?>class="active"<?php } ?>>
                        <a href="messages">
                            <i class="icon-list-alt"></i>
                            <span>الرسائل</span>
                        </a>
                    </li>
                    <?php } ?>


                    <?php if( $payment_allow ){ ?>

                    <!-- payment -->
                    <li <?php if( $controllers == 'payment' ){ ?>class="active"<?php } ?>>
                        <a href="payment">
                            <i class="icon-picture"></i>
                            <span>العمليات الشرائية</span>
                        </a>
                    </li>
                    <?php } ?>



                    <?php if( $support_allow ){ ?>

                    <!-- support -->
                    <li <?php if( $controllers == 'support' ){ ?>class="active"<?php } ?>>
                        <a href="support?page=show" >
                            <i class="icon-file"></i>
                            <span>الدعم الفنى</span>
                        </a>
                    </li>
                    <?php } ?>


                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> لوحة التحكم</h1>
                        <h4>من هنا يمكنك استعراض والتحكم بكل محتويات الموقع !</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <?php if( isset($flash_message) ){ ?>

                    <div class="alert alert-<?php echo $flash_message["0"];?>">
                        <strong><?php echo $flash_message["1"];?></strong>
                    </div>
                    <?php if( !isset($flash_message["2"]) ){ ?>

                        <?php echo $content;?>

                    <?php } ?>

                <?php }else{ ?>

                    <?php echo $content;?>

                <?php } ?>



                <footer>
                    <p>2013 © جميع الحقول محفوظة حرب التتار</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="<?php echo add_style('jquery-1.10.1.min.js', ASSETS_DIR.'/jquery/'); ?>"><\/script>')</script>
        <script src="<?php echo add_style('bootstrap.min.js', ASSETS_DIR.'/bootstrap/'); ?>"></script>
        <script src="<?php echo add_style('jquery.nicescroll.min.js', ASSETS_DIR.'/nicescroll/'); ?>"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="<?php echo add_style('jquery.validate.min.js', ASSETS_DIR.'/jquery-validation/dist/'); ?>"></script>
        <script type="text/javascript" src="<?php echo add_style('additional-methods.min.js', ASSETS_DIR.'/jquery-validation/dist/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.resize.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.pie.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.stack.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.crosshair.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.flot.tooltip.min.js', ASSETS_DIR.'/flot/'); ?>"></script>
        <script src="<?php echo add_style('jquery.sparkline.min.js', ASSETS_DIR.'/sparkline/'); ?>"></script>

        <!--flaty scripts-->
        <script src="<?php echo add_style('flaty.js', ASSETS_DIR.'/js/'); ?>"></script>

    </body>
</html>
