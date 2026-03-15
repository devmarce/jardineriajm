<?php include_once 'functions.php'; ?>
<!doctype html>
<html lang="es-AR">

<?php include_once "./componentes/head.php"; ?>

<style>
    .error-404-container {
        min-height: 85vh;
        background-image: url('/img/cesped-jm.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 80px; /* Offset for sticky header */
    }

    .error-404-container::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to bottom, rgba(13, 57, 21, 0.85) 0%, rgba(10, 15, 12, 0.9) 100%);
    }

    .glass-card-404 {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 4rem 2rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        position: relative;
        z-index: 2;
        max-width: 800px;
        width: 90%;
        text-align: center;
        margin: 2rem auto;
    }

    .trebol-404 {
        width: 100px;
        height: auto;
        margin-bottom: 2.5rem;
        filter: drop-shadow(0 0 15px rgba(118, 214, 66, 0.4));
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }

    .error-code {
        font-family: var(--font-serif);
        font-size: clamp(6rem, 15vw, 10rem);
        font-weight: 700;
        color: var(--accent-color);
        line-height: 0.8;
        margin-bottom: 2rem;
        text-shadow: 0 10px 20px rgba(0,0,0,0.3);
        display: block;
    }

    .error-title {
        font-family: var(--font-serif);
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        color: #fff;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .error-text {
        font-family: var(--font-primary);
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.15rem;
        line-height: 1.6;
        margin-bottom: 3rem;
        max-width: 550px;
        margin-left: auto;
        margin-right: auto;
    }

    .back-home-btn {
        margin-top: 1rem;
    }

    @media (max-width: 768px) {
        .glass-card-404 {
            padding: 3rem 1.5rem;
        }
    }
</style>

<body>
    <div class="container-fluid p-0">
        <!-- Header -->
        <?php include_once 'componentes/header.php'; ?>

        <main class="error-404-container">
            <div class="glass-card-404">
                <img src="/img/logosvg/trebol.svg" alt="JM" class="trebol-404">
                <span class="error-code">404</span>
                <h1 class="error-title">¿Te has perdido en el jardín?</h1>
                <p class="error-text">
                    El rincón que buscas parece haber sido podado o nunca llegó a brotar. No te preocupes, el camino principal sigue abierto.
                </p>
                <div class="back-home-btn">
                    <a href="/" class="btn btn-premium">Volver al Inicio</a>
                </div>
            </div>
        </main>

        <!-- footer.php -->
        <?php include_once 'footer.php'; ?>
    </div>

    <!-- boostrap script js -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
