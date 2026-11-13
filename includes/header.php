<?php
/* Racine relative : '' depuis index.php, '../' depuis /pages/*.php */
if (!isset($root)) { $root = ''; }
if (!isset($pageTitle)) { $pageTitle = 'Accueil'; }
if (!isset($pageDescription)) {
    $pageDescription = "Éclat Beauté Studio - Révélez votre beauté naturelle avec des soins d'exception. Salon de coiffure et institut de beauté haut de gamme.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Éclat Beauté Studio</title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="salon de coiffure, institut de beauté, coiffure, maquillage, spa, manucure, pédicure, balayage, coloration, Éclat Beauté Studio">
    <meta name="author" content="Éclat Beauté Studio">
    <meta property="og:title" content="Éclat Beauté Studio">
    <meta property="og:description" content="Révélez votre beauté naturelle avec des soins d'exception.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://api.iconify.design/ph:sparkle-fill.svg?color=%23D4AF37">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- AOS (animations au scroll) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
</head>
<body>
