

<?php $__env->startSection('contenido_interno'); ?>
    <h2><?php echo e($cine->RazonSocial); ?></h2>
    <div class="cine-info">
        <div class="cine-info datos">
            <p><?php echo e($cine->Direccion); ?> - <?php echo e($cine->Ciudad); ?> - <?php echo e($cine->Distrito); ?></p>
            <p>Nº Salas: <?php echo e($cine->Salas); ?> - Formatos: <?php echo e($cine->Formatos); ?></p>
            <p>Teléfono: <?php echo e($cine->Telefonos); ?> anexo 865</p>
            <br/>

            <div class="tabla">
                <?php $__currentLoopData = $cine->tarifas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tarifa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="fila <?php echo e($index % 2 == 0 ? 'impar' : 'par'); ?>">
                        <div class="celda-titulo"><?php echo e($tarifa->DiasSemana); ?></div>
                        <div class="celda"><?php echo e($tarifa->Precio); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="aviso">
                <p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
            </div>
        </div>

        <img src="<?php echo e(asset('img/cine/' . $cine->id . '.2.jpg')); ?>"/>
        <br/><br/>
        <h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4>
        <br/>

        <div class="cine-info peliculas">
            <div class="tabla">
                <div class="fila">
                    <div class="celda-cabecera">Películas</div>
                    <div class="celda-cabecera">Horarios</div>
                </div>
                <?php $__currentLoopData = $cine->peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="fila <?php echo e($index % 2 == 0 ? 'impar' : 'par'); ?>">
                        <div class="celda-titulo"><?php echo e($pelicula->Titulo); ?></div>
                        <div class="celda"><?php echo e($pelicula->Horarios); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div>
        <img style="float:left;" src="<?php echo e(asset('img/cine/' . $cine->id . '.3.jpg')); ?>" alt="Imagen del cine"/>
        <span class="tx_gris">
            Precios de los juegos: desde S/1.00 en todos los Cine Star.<br/>
            Horario de atención de juegos es de 12:00 pm hasta las 10:30 pm.<br/><br/>
            Visitános y diviértete con nosotros.<br/><br/>
            <b>CINESTAR</b>, siempre pensando en ti.
        </span>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_cinestar\resources\views/cine.blade.php ENDPATH**/ ?>