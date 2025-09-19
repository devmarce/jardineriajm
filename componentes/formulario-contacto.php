<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-verde">
      <div class="modal-header border-bottom-white">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Envío de Consulta</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php if (!empty($resultado)): ?>
          <div class="alert alert-light text-dark">
            <?php echo "test $resultado"; ?>
          </div>
        <?php endif; ?>

        <form action="./phpmailer.php" method="POST" novalidate>
          <div class="mb-3">
            <label for="nombre" class="form-label text-white">*Nombre</label>
            <input
              type="text"
              class="form-control campo-verde"
              id="nombre"
              name="nombre"
              placeholder="Juan"
              required>
            <div class="invalid-feedback">Por favor, ingresá tu nombre.</div>
          </div>

          <div class="mb-3">
            <label for="telefono" class="form-label text-white">*Teléfono</label>
            <input
              type="tel"
              class="form-control campo-verde"
              id="telefono"
              name="telefono"
              placeholder="1523232323"
              required>
            <div class="invalid-feedback">Por favor, ingresá un número de teléfono válido.</div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label text-white">Email (opcional)</label>
            <input
              type="email"
              class="form-control campo-verde"
              id="email"
              name="email"
              placeholder="juan@gmail.com">
            <div class="invalid-feedback">Por favor, ingresá un email válido.</div>
          </div>

          <div class="mb-3">
            <label for="mensaje" class="form-label text-white">*Mensaje</label>
            <textarea
              class="form-control campo-verde"
              id="mensaje"
              name="mensaje"
              rows="4"
              placeholder="Escribí aquí tu consulta o comentario..."
              required></textarea>
            <div class="form-text text-white-50">Contanos en detalle cómo podemos ayudarte.</div>
            <div class="invalid-feedback">Por favor, escribí tu mensaje.</div>
          </div>

          <button type="submit" class="btn btn-verde">Enviar</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Estilos personalizados -->
<style>
  /* Fondo principal del modal con degradado de verdes */
  .modal-verde {
    background: linear-gradient(160deg, #0d3915e8, #43a047);
    color: #fff;
    border: 2px solid #fff;
    border-radius: 12px;
  }

  /* Línea divisoria blanca */
  .border-bottom-white {
    border-bottom: 1px solid #fff !important;
  }

  /* Campos de formulario */
  .campo-verde {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #fff;
    color: #fff;
  }
  .campo-verde::placeholder {
    color: #ddd;
  }
  .campo-verde:focus {
    background-color: rgba(255, 255, 255, 0.2);
    border-color: #a5d6a7;
    box-shadow: 0 0 0 0.2rem rgba(67, 160, 71, 0.5);
    color: #fff;
  }

  /* Botón personalizado */
  .btn-verde {
    background-color: #43a047;
    border: 1px solid #fff;
    color: #fff;
    font-weight: bold;
  }
  .btn-verde:hover {
    background-color: #2e7d32;
    color: #fff;
  }

  /* Cerrar modal en blanco */
  .btn-close-white {
    filter: invert(1);
  }
</style>
