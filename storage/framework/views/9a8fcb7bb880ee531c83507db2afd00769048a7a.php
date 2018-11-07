<?php $__env->startSection('content'); ?>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="row" style="align-items: center; padding-left: 40px">
            <div class="col-sm-4">
                <img src="source/image/product/<?php echo e($product->image); ?>"/>
            </div>
            <div class="col-sm-8">
                <div class="single-item-body">
                    <p class="single-item-title"><h2><?php echo e($product->name); ?></h2></p>
                    <br/>
                    <p class="single-item-price">
                        <span>Giá:</span>
                        <?php if($product->promotion_price != 0): ?>
                            <span class="flash-del"><?php echo e($product->unit_price); ?>đ</span>
                            <span class="flash-sale"><?php echo e($product->promotion_price); ?>đ</span>
                        <?php else: ?>
                            <span class="flash-sale"><?php echo e($product->unit_price); ?>đ</span>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="space20">&nbsp;</div>
                <div style="padding-bottom: 20px; font-size: 20px">
                    <?php if($product->quantity > 0): ?>
                        <span style="color: green">Còn hàng</span>
                    <?php else: ?>
                        <span style="color: red">Hết hàng</span>
                    <?php endif; ?>
                </div>
                <div class="single-item-desc">
                    <span style="font-size: 20px">Mô tả:</span><span style="font-size: 16px"><?php echo $product->description; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>