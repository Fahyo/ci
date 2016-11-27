

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> หน้าหลัก </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs , fa-spin"></i> จัดการ <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('admin/category')?>">จัดการ หมวดหมู่</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/news')?>">จัดการข่าว</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/comment')?>">จจัดการความคิดเห็น</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/user')?>">จจัดการผู้ใช้งาน</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

</nav>