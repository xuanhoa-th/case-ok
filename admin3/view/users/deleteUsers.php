<h1>Bạn chắc chắn muốn xóa khách hàng này?</h1>
<h3><?php echo $user->name; ?></h3>
<form action="./index.php?page=deleteUsers" method="post">
  <input type="hidden" name="id" value="<?php echo $user->id; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="index.php">Cancel</a>
  </div>
</form>