
<section class="content" style="margin-left: 15%">
    <div class="row">
        <div class="col-md-10">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Danh sách đặt hàng online</h3>
<!--                    <a href=" --><?php //echo 'index.php?page=addUsers' ?><!-- " class="btn btn-success btn-xl" style="color: white ; margin-left:82%; " ;>Thêm tài khoản</a>-->
                </div><!-- /.box-header -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Phone</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                       <!--  <?php var_dump($users)?> -->
                    <?php foreach ($users as $key => $value): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><?php echo $value->phone ?></td>
                            <td> <?php echo $value->address ?> </td>
                            <td> <?php echo $value->email ?> </td>
                            <?php $check = ($value->status == 1) ? 'Hiện' : 'Ẩn' ?>
                            <td> <?php echo $check ?></td>

                            <td> <a href="./index.php?page=deleteUsers&id=<?php echo $value->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                            <td> <a href="./index.php?page=editUsers&id=<?php echo $value->id; ?>" class="btn btn-sm btn-success">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->