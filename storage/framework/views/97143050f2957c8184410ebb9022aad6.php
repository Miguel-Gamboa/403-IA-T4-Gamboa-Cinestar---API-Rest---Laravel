

<?php $__env->startSection('contenido_interno'); ?>
    <br/><h1>Cartelera</h1><br/>
    <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="contenido-pelicula">
        <div class="datos-pelicula">
            <h2><?php echo e($pelicula->Titulo); ?></h2><br/>
            <p><?php echo e($pelicula->Sinopsis); ?></p>
            <br/>
            <div class="boton-pelicula"> 
                <a href="<?php echo e(route('pelicula', $pelicula->id)); ?>">
                    <img src="<?php echo e(asset('img/varios/btn-mas-info.jpg')); ?>" width="120" height="30" alt="Ver info"/>
                </a>
            </div>
            <div class="boton-pelicula"> 
                <a href="https://www.youtube.com/v/<?php echo e($pelicula->Link); ?>" target="_blank" onclick="return hs.htmlExpand(this, {objectType: 'iframe'})" >
                    <img src="<?php echo e(asset('img/varios/btn-trailer.jpg')); ?>" width="120" height="30" alt="Ver trailer"/>
                </a>
            </div> 
        </div>
        <img src="<?php echo e(asset('img/pelicula/' . $pelicula->id . '.jpg')); ?>" width="160" height="226"/><br/><br/>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_cinestar\resources\views/peliculas.blade.php ENDPATH**/ ?>