
<section class="content" style="margin-left: 25%">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> Sữa giới thiệu</h3>
                </div>

<!--                --><?php //echo print_r($about); die();?>
                <form method="post" enctype="multipart/form-data" action="./index.php?page=editAbout">
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $about->id; ?>"/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="<?php echo $about->name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh</label>
                            <img width="70px" src="<?php echo 'uploads/about/'.$about->image ?>" alt="">
                            <input type="file" class="form-control" id="exampleInputEmail1" name="image"  value="<?php echo $about->image; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <textarea name="content" rows="5" ><?php echo $about->content; ?></textarea>
                           
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="1" name="status" checked> giới thiệu tin tức
                            <input type="radio" class="form-control" id="exampleInputPassword1" value="0" name="status">giới thiệu đầu bếp
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
<?php
