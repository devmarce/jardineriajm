<footer>
    <div style="background-color: black; display: flex;">
        <div class="p-1">
            <img src="./img/logosvg/trebol.svg" alt="" style="width: 100px;">
        </div>
        <div class="p-1" style="width: 90%; margin-top: 6px;">
            <p style="color: #1efa079e;text-align: center;">&copy; JARDINERIA JM - <?php echo date('Y') ?> &#127808;</p>
        </div>
      </div>
      <?php include "./componentes/formulario-contacto.php"; ?>
    <script>
    // Esperar a que el DOM cargue
    document.addEventListener("DOMContentLoaded", function () {
    // Seleccionamos todos los botones que abren el modal
    const botones = document.querySelectorAll("[data-bs-toggle='modal'][data-consulta]");
    const modal = document.getElementById("exampleModal");

    // Escuchar el evento cuando se abre el modal
    modal.addEventListener("show.bs.modal", function (event) {
        // El botón que disparó el modal
        const boton = event.relatedTarget;
        const consulta = boton.getAttribute("data-consulta");

        // Buscar si ya existe el input hidden
        let hiddenInput = modal.querySelector("input[name='consulta']");

        if (!hiddenInput) {
        // Crear el input hidden si no existe
        hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "consulta";
        
        motivoModal = document.createElement("p");
        motivoModal.textContent = consulta;

        // Insertarlo dentro del formulario
        const form = modal.querySelector("form");
        form.appendChild(hiddenInput);
        }

        // Asignar el valor desde el data-consulta del botón
        hiddenInput.value = consulta;
    });
    });
    </script>
</footer>