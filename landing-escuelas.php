<?php include_once 'functions.php'; ?>

<!doctype html>
<html lang="es-AR">

<?php include_once "./componentes/head.php"; ?>

<style>
  /* Landing page specific overrides */
  .hero-schools {
    background-image: url('./img/cesped-jm.jpg');
    height: 65vh;
    min-height: 500px;
  }
  
  @media (max-width: 768px) {
    .hero-schools {
        height: 50vh;
    }
  }
  
  .landing-badge {
    display: inline-block;
    background-color: var(--secondary-color);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1rem;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
</style>

<body>
  <div class="container-fluid p-0">

    <!-- Header -->
    <?php include_once 'componentes/header.php'; ?>

    <!-- Hero Section -->
    <div class="img-slide hero-schools w-100 d-flex align-items-center justify-content-center text-center">
      <div style="z-index: 10; padding: 0 20px;">
        <span class="landing-badge">Servicio Especializado</span>
        <h1 class="title-slide text-white" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">Mantenimiento de Jardines para <br><strong>Escuelas e Instituciones Educativas</strong></h1>
        <div class="subline my-3"></div>
        <img src="./img/trebol.png" style="width: 2.5rem; filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.5)); margin-bottom: 20px;">
        <p class="description-slide text-white mt-2">
            Entornos verdes, seguros y limpios para el desarrollo y esparcimiento de los alumnos. Nos adaptamos a los horarios institucionales.
        </p>
        <button type="button" 
            class="btn btn-premium mt-4" 
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal" 
            data-consulta="Landing Escuelas - Solicitud de Consulta General">
                Solicitar Visita Técnica
        </button>
      </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5 py-4">
      <div class="row text-center mb-5">
        <div class="col-12">
            <h2 class="text-banner" style="font-size: 2.5rem;">¿Por qué elegir JM para su Institución?</h2>
            <div class="subline mx-auto" style="width: 100px;"></div>
        </div>
      </div>
      
      <div class="row align-items-stretch">
        
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
            <div class="card premium-card">
                <img src="./img/riego_1.jpg" class="card-img-top" alt="Mantenimiento integral">
                <div class="sello-trebol"></div>
                <div class="card-body card-back text-center">
                    <h5 class="text-banner my-2">Mantenimiento <strong>Integral</strong></h5>
                    <div class="subline my-2"></div>
                    <p class="text-start mt-3">
                        <ul class="text-start">
                           <li>Corte de césped en grandes extensiones.</li>
                           <li>Manejo de malezas en patios y campos deportivos.</li>
                           <li>Riego y cuidado de plantas ornamentales.</li>
                           <li>Personal capacitado y maquinaria adecuada.</li>
                        </ul>
                    </p>
                    <button type="button" 
                        class="btn btn-premium mt-auto" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal" 
                        data-consulta="Landing Escuelas - Mantenimiento Integral">
                            Consultar
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card premium-card">
                <img src="./img/casa-jm.jpg" class="card-img-top" alt="Poda segura">
                <div class="sello-trebol"></div>
                <div class="card-body card-back text-center">
                    <h5 class="text-banner my-2"><strong>Poda</strong> y Seguridad</h5>
                    <div class="subline my-2"></div>
                    <p class="text-start mt-3">
                        <ul class="text-start">
                           <li>Poda de árboles de gran porte y ligustrinas.</li>
                           <li>Despeje de luminarias y techos.</li>
                           <li>Extracción de ramas peligrosas preventivamente.</li>
                           <li>Retiro inmediato de escombros y recortes.</li>
                        </ul>
                    </p>
                    <button type="button" 
                        class="btn btn-premium mt-auto" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal" 
                        data-consulta="Landing Escuelas - Poda y Prevecion">
                            Consultar
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card premium-card">
                <img src="./img/cesped2-jm.jpg" class="card-img-top" alt="Instalación de césped">
                <div class="sello-trebol"></div>
                <div class="card-body card-back text-center">
                    <h5 class="text-banner my-2"><strong>Renovación</strong> de Espacios</h5>
                    <div class="subline my-2"></div>
                    <p class="text-start mt-3">
                        <ul class="text-start">
                           <li>Instalación de césped natural en panes (grama bahiana).</li>
                           <li>Colocación de césped sintético para patios de juego.</li>
                           <li>Diseño de canteros y jardines de acceso.</li>
                           <li>Nivelación para áreas deportivas colegiales.</li>
                        </ul>
                    </p>
                    <button type="button" 
                        class="btn btn-premium mt-auto" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal" 
                        data-consulta="Landing Escuelas - Renovación de espacios">
                            Consultar
                    </button>
                </div>
            </div>
        </div>
        
      </div>
    </div>
    
  </div>

  <!-- footer.php -->
  <?php include_once 'footer.php'; ?>

  <!-- hidden input addition specifically for landing escuelas -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Enforce an origin identifier to any form submit coming from this page
        const modalElement = document.getElementById('exampleModal');
        if(modalElement) {
            modalElement.addEventListener('show.bs.modal', function() {
                setTimeout(() => {
                    const form = this.querySelector('form');
                    if(form && !form.querySelector('input[name="origen_landing"]')) {
                        const originInput = document.createElement('input');
                        originInput.type = 'hidden';
                        originInput.name = 'origen_landing';
                        originInput.value = 'landing_escuelas';
                        form.appendChild(originInput);
                    }
                }, 50); // small timeout to let the footer.php script run first
            });
        }
    });
  </script>

  <!-- boostrap script js -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
