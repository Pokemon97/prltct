<?php $__env->startSection('content'); ?>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Tìm kiếm</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy <?php echo e(count($product)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="<?php echo e(route('productDetail', $new->id)); ?>"><img src="source/image/product/<?php echo e($new->image); ?>" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($new->name); ?></i></b></p>
										<p class="single-item-price">
											<?php if($new->promotion_price != 0): ?>
												<span class="flash-del"><?php echo e($new->unit_price); ?>đ</span>
												<span class="flash-sale"><?php echo e($new->promotion_price); ?>đ</span>
											<?php else: ?>
												<span class="flash-sale"><?php echo e($new->unit_price); ?>đ</span>
											<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="<?php echo e(route('productDetail', $new->id)); ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>