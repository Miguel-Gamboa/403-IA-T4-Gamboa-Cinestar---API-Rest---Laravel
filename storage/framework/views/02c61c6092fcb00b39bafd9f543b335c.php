

<?php $__env->startSection('contenido_interno'); ?>
<?php $__currentLoopData = $pelicula; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="contenido-pelicula">
        <div class="datos-pelicula">
            <h2><?php echo e($movie->Titulo); ?></h2>
            <p><?php echo e($movie->Sinopsis); ?></p>
            <br/>
            <div class="tabla">
                <div class="fila">
                    <div class="celda-titulo">Título Original :</div>
                    <div class="celda"><?php echo e($movie->Titulo); ?></div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Estreno :</div>
                    <div class="celda"><?php echo e($movie->FechaEstreno); ?></div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Género :</div>
                    <div class="celda"><?php echo e($movie->Geneross); ?></div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Director :</div>
                    <div class="celda"><?php echo e($movie->Director); ?></div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Reparto :</div>
                    <div class="celda"><?php echo e($movie->Reparto); ?></div>
                </div>
            </div>
        </div>
        <img src="<?php echo e(asset('img/pelicula/' . $movie->id . '.jpg')); ?>" width="160" height="226"><br/><br/>
    </div>
    <div class="pelicula-video">
        <embed src="https://www.youtube.com/v/<?php echo e($movie->Link); ?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_cinestar\resources\views/pelicula.blade.php ENDPATH**/ ?>