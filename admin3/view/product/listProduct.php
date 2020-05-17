
<section class="content" style="margin-left: 15%">
    <div class="row">
        <div class="col-md-10">
            <div class="box box-warning">
                <div class="box-header">
                   <div class="col-md-12">
                       <h2 class="text-center" >Danh sách Sản Phẩm</h2>
                   </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href=" <?php echo 'index.php?page=addProduct' ?> " class="btn btn-success btn-xl" style="color: white; " ;>Thêm sản phẩm</a>
                        </div>
                        <div class="col-md-9">
                             <form action="#" method="GET" >
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach'  class="btn btn-success"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>

                    </div>
                    
                </div><!-- /.box-header -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($product as $key => $value): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $value->name ?></td>
                            <td><img width="80px" src="<?php echo 'uploads/product/'. $value->image ?>" alt=""></td>
                            <td><?php echo $value->price ?>.đ</td>
                            <td> <?php echo $value->category_id ?> </td>
                            <?php $check = ($value->status == 1) ? '<h5 class="text-warning">Còn</h5>' : '<h5 class="text-warning">Hết</h5>' ?>
                            <td> <?php echo $check ?></td>

                            <td> <a href="./index.php?page=deleteProduct&id=<?php echo $value->id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                            <td> <a href="./index.php?page=editProduct&id=<?php echo $value->id; ?>" class="btn btn-sm btn-success">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->