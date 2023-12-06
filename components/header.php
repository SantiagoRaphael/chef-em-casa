<?php
function isActivePage($currentPage, $pageName){
    if($currentPage = $pageName){
        return 'active';
    }else{
        return '';
    }
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="src/css/main.css">

    <title>
        <?= $currentPage == 'index' ? 'Chef em casa - Pagina Inicial =' : '';?>
        <?= $currentPage == 'about' ? 'Chef em casa - Pagina about =' : '';?>
        <?= $currentPage == 'contact' ? 'Chef em casa - Pagina contact =' : '';?>
    </title>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container">

<div class="container-fluid">
    <a class="navbar-brand" href="index.php">Xadrez em casa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?= isActivePage($currentPage, 'index')?>">
          <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item <?= isActivePage($currentPage, 'about')?>">
          <a class="nav-link" href="about.php">Sobre</a>
        </li>
        <li class="nav-item <?= isActivePage($currentPage, 'contact')?>">
          <a class="nav-link" href="contact.php">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
