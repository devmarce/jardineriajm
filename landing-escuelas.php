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
  
  /* Accordion Premium Styles */
  .accordion-button:not(.collapsed) {
    color: var(--primary-color) !important;
    background-color: rgba(13, 57, 21, 0.05);
    box-shadow: none;
  }
  .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
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

    <!-- Features Section - Banners & Accordion -->
    <div class="container my-5">
      
      <!-- Banner 1 -->
      <div class="row align-items-center mb-5 premium-card p-0 overflow-hidden" style="border-radius: 16px;">
        <div class="col-md-6 p-0">
          <img src="./img/escuela1.jpg" alt="Mantenimiento de grandes extensiones" class="img-fluid w-100" style="object-fit: cover; min-height: 350px;">
        </div>
        <div class="col-md-6 p-5">
          <h3 class="text-banner" style="font-size: 2rem;color: yellow;">Entornos de aprendizaje <br><strong>Seguros</strong></h3>
          <div class="subline my-3" style="width: 80px;"></div>
          <p style="font-size: 1.1rem; color: #e8fc7f;">Sabemos que la seguridad de los alumnos es primordial. Nuestro servicio especializado en escuelas garantiza el retiro inmediato de ramas peligrosas, despeje de luminarias y un terreno libre de malezas para evitar accidentes durante los recreos y actividades deportivas.</p>
          <button type="button" class="btn btn-premium mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Escuelas - Banner Seguridad">
              Consultar Disponibilidad
          </button>
        </div>
      </div>

      <!-- Banner 2 -->
      <div class="row align-items-center mb-5 premium-card p-0 overflow-hidden" style="border-radius: 16px; flex-direction: row-reverse;">
        <div class="col-md-6 p-0">
          <img src="./img/poda-jm.jpg" alt="Poda segura escolar" class="img-fluid w-100" style="object-fit: cover; min-height: 350px;">
        </div>
        <div class="col-md-6 p-5">
          <h3 class="text-banner" style="font-size: 2rem;color: yellow;">Horarios <strong>Flexibles</strong> <br>para Instituciones</h3>
          <div class="subline my-3" style="width: 80px;"></div>
          <p style="font-size: 1.1rem; color: #e8fc7f;">Nuestros equipos de paisajistas y jardineros operan sin interrumpir el dictado de clases. Coordinamos visitas en contraturno, fines de semana o durante el ciclo de receso escolar de verano e invierno para mantener las instalaciones en estado impecable durante todo el año escolar.</p>
          <button type="button" class="btn btn-premium mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Escuelas - Banner Horarios">
              Agendar Visita
          </button>
        </div>
      </div>

      <!-- Accordion Services -->
      <div class="row mt-5 pt-4">
        <div class="col-12 text-center mb-4">
            <h2 class="text-banner" style="font-size: 2.5rem;">Nuestros Servicios Especiales</h2>
            <div class="subline mx-auto" style="width: 100px;"></div>
        </div>

        <div class="col-lg-10 mx-auto">
          <div class="accordion premium-accordion" id="accordionServices">
            
            <!-- Item 1 -->
            <div class="accordion-item mb-3" style="border: 1px solid rgba(13, 57, 21, 0.2); border-radius: 12px; overflow: hidden;">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size: 1.3rem; color: var(--primary-color);">
                  <i class="me-3">&#127808;</i> Mantenimiento Integral de Campus
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionServices">
                <div class="accordion-body">
                  <div class="row align-items-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                      <img src="./img/riego_1.jpg" alt="Césped verde" class="img-fluid rounded" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-8">
                        <ul style="font-size: 1.1rem; color: #444;">
                           <li class="mb-2">Corte de césped en campos deportivos perimetrales.</li>
                           <li class="mb-2">Manejo y erradicación de malezas para terrenos seguros.</li>
                           <li class="mb-2">Riego optimizado y cuidado de plantas ornamentales.</li>
                        </ul>
                        <button type="button" class="btn btn-premium mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Escuelas - Acordeon Integral">Contactar por Mantenimiento</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item mb-3" style="border: 1px solid rgba(13, 57, 21, 0.2); border-radius: 12px; overflow: hidden;">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 1.3rem; color: var(--primary-color);">
                  <i class="me-3">&#127808;</i> Poda Segura y Prevención
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionServices">
                <div class="accordion-body">
                  <div class="row align-items-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                      <img src="./img/mant-j1.jpg" alt="Poda segura" class="img-fluid rounded" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-8">
                        <ul style="font-size: 1.1rem; color: #444;">
                           <li class="mb-2">Poda de árboles de gran porte y ligustrinas fronterizas.</li>
                           <li class="mb-2">Despeje de techos de pabellones y pasillos.</li>
                           <li class="mb-2">Retiro inmediato de recortes en vehículos propios para mayor seguridad.</li>
                        </ul>
                        <button type="button" class="btn btn-premium mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Escuelas - Acordeon Poda">Contactar por Poda</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item mb-3" style="border: 1px solid rgba(13, 57, 21, 0.2); border-radius: 12px; overflow: hidden;">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 1.3rem; color: var(--primary-color);">
                  <i class="me-3">&#127808;</i> Renovación y Diseño de Espacios
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionServices">
                <div class="accordion-body">
                  <div class="row align-items-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                      <img src="./img/jardineria-j1.jpg" alt="Diseño de espacios" class="img-fluid rounded" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-8">
                        <ul style="font-size: 1.1rem; color: #444;">
                           <li class="mb-2">Instalación rápida de césped natural en panes durante recesos.</li>
                           <li class="mb-2">Diseño y embellecimiento de canteros en zonas de acceso.</li>
                           <li class="mb-2">Nivelación de tierra en áreas de recreación y deporte.</li>
                        </ul>
                        <button type="button" class="btn btn-premium mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Escuelas - Acordeon Renovacion">Contactar por Renovación</button>
                    </div>
                  </div>
                </div>
              </div>
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
