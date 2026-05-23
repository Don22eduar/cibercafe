<?= $this->extend('plantilla') ?>
<?= $this->section('content') ?>

<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
            <div class="card p-0" style="width: 22rem; border-radius: 12px;overflow: hidden; border: none;">
                <img src="<?= base_url('imagenes/hogar.jpg') ?>" class="card-img-top" alt="Para el hogar" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Montserrat; font-weight: bold;">PARA EL HOGAR</h5>
                    <p class="card-text">"El alma de tu casa empieza aquí."
                        Transforma cada habitación con detalles que inspiran. Contamos con una selección premium de cojines ergonómicos, cuadros de diseño contemporáneo y cortinas que gradúan la luz a tu gusto. Organiza con estilo usando nuestros cestos decorativos y dale un toque de elegancia a tus cenas con candelabros y copas de cristal fino. Porque un hogar acogedor es un hogar feliz.</p>
                    <a href="<?= base_url('/hogar') ?>" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 22rem; border-radius: 12px;overflow: hidden; border: none;">
                <img src="<?= base_url('imagenes/electronico.jpg') ?>" class="card-img-top w-100%" alt="Electronicos" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Montserrat; font-weight: bold;">ELECTRONICOS</h5>
                    <p class="card-text">"Tecnología que impulsa tu mundo."
                        Mantente a la vanguardia con lo último en innovación digital. Encuentra computadores de alto rendimiento, celulares con cámaras de alta resolución y las consolas de videojuegos más buscadas. Además, optimiza tu día a día con cargadores de carga rápida, cascos con cancelación de ruido y cámaras de seguridad inteligentes para proteger lo que más quieres.</p>
                    <a href="<?= base_url('/electro') ?>" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 22rem; border-radius: 12px;overflow: hidden; border: none;">
                <img src="<?= base_url('imagenes/limpieza.jpg') ?>" class="card-img-top w-100%" alt="Limpieza" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Montserrat; font-weight: bold;">LIMPIEZA</h5>
                    <p class="card-text">"Claridad y frescura en cada rincón."
                        La solución definitiva para un ambiente impecable. Nuestra línea incluye cloro de máxima concentración para desinfectar profundamente, ceras que devuelven el brillo a tus pisos y cepillos de cerdas ultra-resistentes para cualquier superficie. Equípate con cubetas de alta durabilidad y champú especializado para alfombras que elimina hasta la mancha más difícil. Eficiencia pura para tu tranquilidad.</p>
                    <a href="<?= base_url('/limpieza') ?>" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
    </div>
</div>














<?= $this->endSection() ?>