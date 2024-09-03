<?php
  $style = ' style="background-image: url(./img/trebol.png); height: 30px; background-repeat: no-repeat; background-position-x: center; background-position-y: bottom; background-size: 25px; background-color: transparent; border-top: 3px #fff solid;"';
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" <?php echo $style; ?>></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" <?php echo $style; ?>></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" <?php echo $style; ?>></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="img-slide" style="background-image: url('./img/libustrina.jpg');">
                <div class="carousel-caption" style="background-color: #12191d66;">
                    <h5 class="title-slide my-4">Sistema de <strong>Riego</strong></h5>
                    <div class="subline my-2"></div>
                    <img src="./img/trebol.png">
                    <p>JM</p>
                    <p class="description-slide my-4">Diseñamos e instalamos los sistemas. Descubre el poder del riego eficiente con nuestros servicios especializados.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img-slide" style="background-image: url('./img/cotingpasto.jpg');">
                <div class="carousel-caption" style="background-color: #12191d66;">
                    <h5 class="title-slide my-4"><strong>Mantenimiento</strong> de Jardines o Terrenos</h5>
                    <div class="subline my-2"></div>
                    <img src="./img/trebol.png">
                    <p>JM</p>
                    <p class="description-slide my-4">
                        Nos encargamos del mantenimiento de espacios verdes, corte e instalación de césped, diseño y mantenimiento de jardines. Limpieza de terrenos, tala y poda de árboles.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img-slide" style="background-image: url('./img/instalar_cesped.jpg');">
                <div class="carousel-caption" style="background-color: #12191d66;">
                    <h5 class="title-slide my-4">Colocación de <strong>Césped Natural o Sintético</strong></h5>
                    <div class="subline my-2"></div>
                    <img src="./img/trebol.png">
                    <p>JM</p>
                    <p class="description-slide my-4">Tu <strong>Césped</strong> lucirá con un perfecto manto verde, libre de calvas y malas hierbas. Con gran resistencia, suavidad al tacto y una perfecta coloración.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end slider ⟪▤⟫ -->