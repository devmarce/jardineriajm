<?php include_once 'functions.php'; ?>

<!doctype html>
<html lang="es-AR">

<?php include_once "./componentes/head.php"; ?>

<style>
  /* Landing page specific overrides for Healthcare */
  .hero-health {
    background: linear-gradient(rgba(10, 50, 30, 0.4), rgba(15, 60, 40, 0.7)), url('./img/jardineria-j1.jpg');
    background-size: cover;
    background-position: center;
    height: 65vh;
    min-height: 500px;
  }
  
  @media (max-width: 768px) {
    .hero-health {
        height: 55vh;
    }
  }
  
  .landing-badge-health {
    display: inline-block;
    background-color: #e8fc7f;
    color: var(--primary-color);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.95rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  }

  /* Accordion Premium Styles - Health variation */
  .accordion-health .accordion-button:not(.collapsed) {
    color: var(--primary-color) !important;
    background-color: rgba(232, 252, 127, 0.2); /* Soft green/yellow */
    box-shadow: none;
  }
  .accordion-health .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
  }
  .accordion-health .accordion-item {
      border: 1px solid rgba(13, 57, 21, 0.15) !important;
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  }

  .whatsapp-btn-float {
    position: fixed;
    bottom: 25px;
    left: 25px;
    background-color: #25d366;
    color: white;
    border-radius: 50%;
    width: 65px;
    height: 65px;
    text-align: center;
    font-size: 35px;
    line-height: 65px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
    z-index: 1000;
    transition: all 0.3s ease;
  }
  .whatsapp-btn-float:hover {
    transform: scale(1.1);
    color: white;
    box-shadow: 0px 6px 15px rgba(0,0,0,0.4);
  }
</style>

<body>
  <div class="container-fluid p-0" style="background-color: #f4f9f5;">

    <!-- Header -->
    <?php include_once 'componentes/header.php'; ?>

    <!-- Hero Section -->
    <div class="img-slide hero-health w-100 d-flex align-items-center justify-content-center text-center">
      <div style="z-index: 10; padding: 0 20px;">
        <span class="landing-badge-health">Entornos que Sanan</span>
        <h1 class="title-slide text-white" style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 10px rgba(0,0,0,0.9);">
            Jardinería para Hospitales,<br>
            <strong>Clínicas y Centros de Salud</strong>
        </h1>
        <div class="subline mx-auto my-3" style="width: 100px; height: 3px; background-color: #e8fc7f;"></div>
        <p class="description-slide text-white mt-3 mx-auto" style="max-width: 800px; font-size: 1.25rem;">
            Diseñamos y mantenemos espacios verdes silenciosos, higiénicos y terapéuticos para el bienestar físico y emocional de los pacientes.
        </p>
        
        <div class="mt-4 gap-3 d-flex justify-content-center flex-wrap">
            <button type="button" class="btn btn-premium" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Contacto Principal">
                Presupuesto sin cargo
            </button>
            <a href="https://wa.me/5491122334455?text=Hola,%20me%20comunico%20desde%20un%20centro%20de%20salud%20para%20consultar%20por%20mantenimiento." target="_blank" class="btn btn-outline-light" style="border-radius: 30px; font-weight: 600; padding: 12px 30px; border-width: 2px;">
                Escribir por WhatsApp
            </a>
        </div>
      </div>
    </div>

    <!-- Features Section - Banners & Accordion -->
    <div class="container my-5 py-4">
      
      <!-- Banner 1: Tranquilidad -->
      <div class="row align-items-center mb-5 bg-white p-0 overflow-hidden" style="border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
        <div class="col-md-6 p-0">
          <img src="./img/riego_1.jpg" alt="Riego silencioso" class="img-fluid w-100" style="object-fit: cover; min-height: 400px; filter: contrast(1.1) brightness(0.9);">
        </div>
        <div class="col-md-6 p-5">
          <h3 class="text-banner" style="font-size: 2.2rem; color: var(--primary-color);">Operaciones <strong>Silenciosas</strong> y Respetuosas</h3>
          <div class="subline my-3" style="width: 80px; background-color: var(--secondary-color);"></div>
          <p style="font-size: 1.15rem; color: #555; line-height: 1.6;">En un centro de salud, el descanso es vital. Nuestro equipo de jardinería utiliza, donde es posible, equipos de baja emisión sonora y coordina horarios de mantenimiento estrictos para asegurar la <strong>absoluta tranquilidad</strong> de los pacientes y residentes.</p>
          <button type="button" class="btn btn-premium mt-3 bg-secondary-color text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Banner Silencio">
              Consultar Disponibilidad de Horarios
          </button>
        </div>
      </div>

      <!-- Banner 2: Entornos Sanitarios -->
      <div class="row align-items-center mb-5 bg-white p-0 overflow-hidden" style="border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); flex-direction: row-reverse;">
        <div class="col-md-6 p-0">
          <img src="./img/mant-j1.jpg" alt="Mantenimiento de jardines" class="img-fluid w-100" style="object-fit: cover; min-height: 400px;">
        </div>
        <div class="col-md-6 p-5">
          <h3 class="text-banner" style="font-size: 2.2rem; color: var(--primary-color);">Espacios de <strong>Paz y Recuperación</strong></h3>
          <div class="subline my-3" style="width: 80px; background-color: var(--secondary-color);"></div>
          <p style="font-size: 1.15rem; color: #555; line-height: 1.6;">Mantenemos los paseos exteriores, jardines terapéuticos y senderos para sillas de ruedas libres de obstáculos, hojas secas o ramas caídas. Garantizamos ambientes pulcros que contribuyen anímicamente a la mejora de la salud.</p>
          <button type="button" class="btn btn-premium mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Banner Entornos Paz">
              Agendar Visita de Evaluación
          </button>
        </div>
      </div>

      <!-- Accordion Services -->
      <div class="row mt-5 pt-5">
        <div class="col-12 text-center mb-5">
            <span style="color: var(--primary-color); font-weight: 700; letter-spacing: 2px;">ADAPTADO A SECTORES CLÍNICOS</span>
            <h2 class="text-banner mt-2" style="font-size: 2.8rem; font-family: 'Playfair Display', serif;">Especialidades para Centros de Salud</h2>
            <div class="subline mx-auto mt-3" style="width: 120px;"></div>
        </div>

        <div class="col-lg-10 mx-auto">
          <div class="accordion premium-accordion accordion-health" id="accordionServicesHealth">
            
            <!-- Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOneHealth">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneHealth" aria-expanded="false" aria-controls="collapseOneHealth" style="font-size: 1.4rem;">
                  <i class="me-3" style="color: var(--secondary-color);">&#10024;</i> Mantenimiento, riego y limpieza de jardines
                </button>
              </h2>
              <div id="collapseOneHealth" class="accordion-collapse collapse" aria-labelledby="headingOneHealth" data-bs-parent="#accordionServicesHealth">
                <div class="accordion-body p-4">
                  <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0">
                      <img src="./img/cesped-jm.jpg" alt="Campo pulcro" class="img-fluid rounded" style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-7">
                        <ul style="font-size: 1.15rem; color: #444; line-height: 1.8;">
                           <li>Corte de césped periódico manteniendo siempre una altura prolija e higiénica.</li>
                           <li>Limpieza exhaustiva de patios, recolección de hojas y acondicionamiento general.</li>
                           <li>Poda de árboles y arbustos para mantener el orden, la iluminación y la seguridad.</li>
                           <li>Riego programado que no interfiere con el tránsito de ambulancias y urgencias.</li>
                        </ul>
                        <button type="button" class="btn btn-premium w-100 mt-3 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Acordeon Mantenimiento">Contactar por Mantenimiento Especializado</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwoHealth">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoHealth" aria-expanded="false" aria-controls="collapseTwoHealth" style="font-size: 1.4rem;">
                  <i class="me-3" style="color: var(--secondary-color);">&#127795;</i> Poda Preventiva en Zonas de Acceso
                </button>
              </h2>
              <div id="collapseTwoHealth" class="accordion-collapse collapse" aria-labelledby="headingTwoHealth" data-bs-parent="#accordionServicesHealth">
                <div class="accordion-body p-4">
                  <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0">
                      <img src="./img/poda-jm.jpg" alt="Poda segura" class="img-fluid rounded" style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-7">
                        <ul style="font-size: 1.15rem; color: #444; line-height: 1.8;">
                           <li>Despeje de luminarias en parkings, helipuertos o entradas de emergencia.</li>
                           <li>Extirpación de flora invasiva y recolección 100% garantizada de todos los restos en el día.</li>
                           <li>Trato preferencial para asilos de ancianos (remoción de raíces expuestas en caminos).</li>
                        </ul>
                        <button type="button" class="btn btn-premium w-100 mt-3 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Acordeon Poda">Solicitar Evaluación de Seguridad Verde</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThreeHealth">
                <button class="accordion-button collapsed text-banner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeHealth" aria-expanded="false" aria-controls="collapseThreeHealth" style="font-size: 1.4rem;">
                  <i class="me-3" style="color: var(--secondary-color);">&#127799;</i> Creación de Senderos y Espacios Terapéuticos
                </button>
              </h2>
              <div id="collapseThreeHealth" class="accordion-collapse collapse" aria-labelledby="headingThreeHealth" data-bs-parent="#accordionServicesHealth">
                <div class="accordion-body p-4">
                  <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0">
                      <img src="./img/salud1.png" alt="Patios" class="img-fluid rounded" style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    </div>
                    <div class="col-md-7">
                        <ul style="font-size: 1.15rem; color: #444; line-height: 1.8;">
                           <li>Transformación de áreas muertas en patios internos amigables.</li>
                           <li>Colocación de césped natural y sintético para espacios de rehabilitación al aire libre.</li>
                           <li>Paisajismo con aromáticas y colores suaves que invitan a la calma y relajación.</li>
                        </ul>
                        <button type="button" class="btn btn-premium w-100 mt-3 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-consulta="Landing Instituciones - Acordeon Diseño">Cotizar Diseño Terapéutico</button>
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

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/5491122334455?text=Hola,%20me%20comunico%20desde%20un%20centro%20de%20salud%20para%20consultar%20por%20mantenimiento." target="_blank" class="whatsapp-btn-float" title="Contactar por WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="vertical-align: middle;">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
  </a>

  <!-- footer.php -->
  <?php include_once 'footer.php'; ?>

  <!-- hidden input addition specifically for landing instituciones -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const modalElement = document.getElementById('exampleModal');
        if(modalElement) {
            modalElement.addEventListener('show.bs.modal', function() {
                setTimeout(() => {
                    const form = this.querySelector('form');
                    if(form && !form.querySelector('input[name="origen_landing"]')) {
                        const originInput = document.createElement('input');
                        originInput.type = 'hidden';
                        originInput.name = 'origen_landing';
                        originInput.value = 'landing_instituciones';
                        form.appendChild(originInput);
                    }
                }, 50);
            });
        }
    });
  </script>

  <!-- boostrap script js -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
