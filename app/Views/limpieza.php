<?= $this->extend('plantilla') ?>
<?= $this->section('content') ?>


<div class="container py-5">
    <h1 class="text-center mb-5 text-primary fw-bold">Limpieza del Hogar</h1>
    
    <div class="row justify-content-center">
        <?php foreach ($productos as $articulo) { ?>
            
            <div class="col-md-8 mb-5">
                <div class="card border-primary shadow" style="border-radius: 15px; overflow: hidden;">
                    <img src="<?php echo base_url('imagenes/' . $articulo['imagen']); ?>" 
                        class="card-img-top" 
                        style="height: 300px; object-fit: cover;">
                    <div class="card-body bg-light text-center">
                        
                        <h2 class="fw-bold"><?php echo $articulo['nombre']; ?></h2>
                        
                        <p class="text-secondary">
                            <?php echo $articulo['descripcion']; ?>
                        </p>
                        <div class="py-2 mb-3 bg-white border rounded-pill mx-auto" style="max-width: 250px;">
                            <span class="h3 fw-bold text-primary">
                                $<?php echo number_format($articulo['precio'], 2); ?>
                            </span>
                        </div>
                        <a href="#" class="btn btn-primary btn-lg" style="border-radius: 50px; padding: 10px 40px;">Comprar</a>                      
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>










<?= $this->endSection() ?>