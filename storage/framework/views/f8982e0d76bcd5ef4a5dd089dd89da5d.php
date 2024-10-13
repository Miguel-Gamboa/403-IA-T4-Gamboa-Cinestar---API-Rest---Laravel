

<?php $__env->startSection('contenido_interno'); ?>
    <br/><h1>Nuestros Cines</h1><br/>
    
    <?php $__currentLoopData = $cines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="contenido-cine">
        <img src="<?php echo e(asset('img/cine/' . $cine->id . '.1.jpg')); ?>" width="227" height="170"/>
        <div class="datos-cine">
            <h4><?php echo e($cine->RazonSocial); ?></h4><br/>
            <span><?php echo e($cine->Direccion); ?> - <?php echo e($cine->Distrito); ?><br/><br/>Teléfono: <?php echo e($cine->Telefonos); ?></span>
        </div>
        <br/>
        <a href="<?php echo e(route('cine', $cine->slug)); ?>">
            <img src="<?php echo e(asset('img/varios/ico-info2.png')); ?>" width="150" height="40"/>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_cinestar\resources\views/cines.blade.php ENDPATH**/ ?>