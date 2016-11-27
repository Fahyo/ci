<!-- Page Content -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มหมวดหมู่</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="col-lg-12">
    <form action="<?php echo base_url('admin/create_categort')?>" method="post">
        <div class="form-group">
            <input class="form-control"
                   name="name"
                   type="text"
                   placeholder="โปรดกรอกชื่อหมวดหมู่"
                   required>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-plus"></i> บันทึก
        </button>
    </form>

</div>
<!-- /#page-wrapper -->