<head>
  <meta charset="utf-8">
  <title>JARDINERIA JM | JARDINERIA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicons -->
  <?php include_once "./componentes/favicon-files.php"; ?>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  
  <!-- styles css -->
  <link rel="stylesheet" href="./css/style.css?v=<?php echo versiontema(); ?>">
  <meta name="google-site-verification" content="wCP-EzA6XdkUyPtFipE3TJvSWim5Iu8704QcHbZ_TQ0" />

  <meta name="msapplication-TileColor" content="#03e71f">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#03e71f">

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage == 'landing-escuelas.php') {
        $og_title = "JARDINERIA JM - Mantenimiento para Escuelas e Instituciones";
        $og_desc = "Servicio especializado en jardinería, poda segura y mantenimiento de grandes extensiones verdes para colegios e instituciones educativas.";
        $og_url = "https://jardineriajm.com.ar/landing-escuelas.php";
        $og_image = "https://jardineriajm.com.ar/img/logosvg/trebol.svg";
    } elseif ($currentPage == 'landing-instituciones.php') {
        $og_title = "JARDINERIA JM - Jardinería para Hospitales y Centros de Salud";
        $og_desc = "Diseñamos y mantenemos espacios verdes silenciosos, higiénicos y terapéuticos para el bienestar físico y emocional de los pacientes.";
        $og_url = "https://jardineriajm.com.ar/landing-instituciones.php";
        $og_image = "https://jardineriajm.com.ar/img/logosvg/trebol.svg";
    } else {
        $og_title = "JARDINERIA JM - TRABAJOS DE JARDINERIA";
        $og_desc = "Hacemos Jardineria en general, colocación de cesped, poda y tala de árboles, mantenimiento de jardines";
        $og_url = "https://jardineriajm.com.ar/";
        $og_image = "https://jardineriajm.com.ar/img/logosvg/trebol.svg";
    }
  ?>
  <meta property="og:locale" content="es_AR">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $og_title; ?>">
  <meta property="og:description" content="<?php echo $og_desc; ?>">
  <meta property="og:url" content="<?php echo $og_url; ?>">
  <meta property="og:image" content="<?php echo $og_image; ?>">
  <meta property="og:image:secure_url" content="<?php echo $og_image; ?>">
  <meta property="og:site_name" content="JARDINERIA JM">

  <!-- Boostrap scripts -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>