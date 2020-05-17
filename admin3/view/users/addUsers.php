
<section class="content" style="margin-left: 25%">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Thêm mới tài khoản</h3>
                                </div>
                                <?php
                                if(isset($message)){
                                    echo "<p class='alert-info'>$message</p>"; 
                                }
                                ?>
                                <form method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên tài khoản</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mật khẩu</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status" checked>Hiện
                                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">Ẩn
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                                    </div>
                                </form>
                            </div>
                           
                           

                        </div>
                       
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->