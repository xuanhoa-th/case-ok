
<section class="content" style="margin-left: 25%">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> Sữa sản phẩm</h3>
                </div>

<!--                --><?php //echo print_r($product); die();?>
                <form method="post" enctype="multipart/form-data" action="./index.php?page=editProduct">
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="<?php echo $product->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh</label>
                            <img width="90px" src="<?php echo 'uploads/product/'. $product->image ?>" alt="">
                            <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="price"  value="<?php echo $product->price; ?>">
                        </div>

                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="category_id"  >

                                <?php foreach ($category as $item) {?>
                                    <option value="<?php echo $item->id?>" <?php if ($product->category_id == $item->id){?>
                                        selected
                                    <?php }?> > <?php echo $item->name?> </option>
                                <?php }?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status" checked>Còn hàng
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">Hết hàng
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
                    </div>
                </form>
            </div>



        </div>


    </div>   <!-- /.row -->
</section><!-- /.content -->
