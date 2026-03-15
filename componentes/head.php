<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  
  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    $site_name = "JARDINERIA JM";
    $base_url = "https://jardineriajm.com.ar";
    $current_url = $base_url . ($_SERVER['PHP_SELF'] == '/index.php' ? '/' : '/' . $currentPage);
    
    // Default values
    $title = "JARDINERIA JM | Mantenimiento de Jardines, Poda y Paisajismo";
    $description = "Expertos en jardinería integral: colocación de césped natural y sintético, poda, tala de árboles y mantenimiento de espacios verdes. Calidad y dedicación para tu jardín.";
    $keywords = "jardinería, mantenimiento de jardines, poda de árboles, tala, colocación de césped, paisajismo, limpieza de terrenos, JM jardinería";
    $og_image = $base_url . "/img/logosvg/trebol.svg";

    if ($currentPage == 'landing-escuelas.php') {
        $title = "Mantenimiento de Jardines para Escuelas e Instituciones | JARDINERIA JM";
        $description = "Servicio especializado en jardinería, poda segura y mantenimiento de grandes extensiones verdes para colegios e instituciones educativas.";
        $keywords .= ", jardinería para escuelas, mantenimiento colegios, poda segura instituciones";
    } elseif ($currentPage == 'landing-instituciones.php') {
        $title = "Jardinería para Hospitales y Centros de Salud | JARDINERIA JM";
        $description = "Diseñamos y mantenemos espacios verdes silenciosos, higiénicos y terapéuticos para el bienestar de pacientes y personal de salud.";
        $keywords .= ", jardinería para hospitales, espacios verdes terapéuticos, mantenimiento centros de salud";
    }
  ?>

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <link rel="canonical" href="<?php echo $current_url; ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $current_url; ?>">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="<?php echo $og_image; ?>">
  <meta property="og:image:secure_url" content="<?php echo $og_image; ?>">
  <meta property="og:site_name" content="<?php echo $site_name; ?>">
  <meta property="og:locale" content="es_AR">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo $current_url; ?>">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="<?php echo $og_image; ?>">

  <!-- favicons -->
  <?php include_once "./componentes/favicon-files.php"; ?>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  
  <!-- styles css -->
  <link rel="stylesheet" href="/css/style.css?v=<?php echo versiontema(); ?>">
  <meta name="google-site-verification" content="wCP-EzA6XdkUyPtFipE3TJvSWim5Iu8704QcHbZ_TQ0" />

  <meta name="msapplication-TileColor" content="#03e71f">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#03e71f">

  <!-- Boostrap scripts -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>