
<?php include "header.php";
$about2 = mysqli_query($conn,"SELECT * FROM about WHERE status = 2 ");
$category = mysqli_query($conn,"SELECT * FROM category ");


?>


	<div class="tieudenews">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
							<div class="tdtintuchome">
								<span class="fontdancing">Lời khuyên cho món ăn mới</span>
								<h2 class="fontroboto">Tin mới nhất</h2>
							</div>
						
				</div>
			</div>
		</div>
 	</div>   <!-- HET TIEDE DE NEWS -->

	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php foreach ($about2 as $value): ?>
						<div class="mottinchuan mb-3  wow  fadeInUp">

						<a href="news_detail.html"><img src="<?php echo 'admin3/uploads/about/'.$value['image']  ?>" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld"><?php echo $value['name'] ?></a>
						<div class="ngaythang1">20-04-2020  by <span class="vang"> sukido</span></div>
						<p class="fontroboto"><?php echo $value['content'] ?></p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>
						
					<?php endforeach ?>
					
					
					
					<nav class="phantrang mb-3  wow  fadeInUp">
						<ul class="pagination">
							<li class="pre">
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo; Previous</span>
 								</a>
							</li>
							<li class="current">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next">
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">Next &raquo; </span>
 								</a>
							</li>
						</ul>
					</nav>

				</div> <!-- HET COT 9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow  fadeInUp">
							 <input type="text" class="form-control phansearchct"  placeholder="Search">
							 
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
						
					</div>

					<div class="khoilistlink my-2  wow  fadeInUp">
						<h3 class="fontoswarld">Category </h3>
						<ul class="fontroboto">
							<?php foreach ($category as $value): ?>
								
							
							<li><a href="product-detall.php"> <?php echo $value['name'] ?></a></li>
							
							<?php endforeach ?>
						</ul>
					</div><!--  	het listlink  -->



				</div>  <!-- HET COT 3 -->

			</div>
		</div>		

	</section><!--  het noidung tin -->








<?php include "footer.php"; ?>

</body>
</html>