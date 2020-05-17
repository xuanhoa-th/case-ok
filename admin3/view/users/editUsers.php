
<section class="content" style="margin-left: 25%">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> Sữa tài khoản</h3>
                </div>

              
                <form method="post" enctype="multipart/form-data" action="./index.php?page=editUsers">
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $users->id; ?>"/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên tài khoản</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="<?php echo $users->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="phone"  value="<?php echo $users->phone; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="address"  value="<?php echo $users->address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="<?php echo $users->email; ?>">
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status" checked>Hiện
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">Ẩn
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>



        </div>


    </div>   <!-- /.row -->
</section><!-- /.content -->
