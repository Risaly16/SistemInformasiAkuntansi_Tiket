
<?php $__env->startSection('title', __('500')); ?>
<?php $__env->startSection('content'); ?>
  <div class="text-center">
    <div class="error mx-auto" data-text="500">500</div>
    <p class="lead text-gray-800 mb-4">Page Server Error</p>
    <a href="<?php echo e(url('/')); ?>">&larr; Back to Home</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\SIA Risaly\Ticket-Laravel\resources\views/errors/500.blade.php ENDPATH**/ ?>