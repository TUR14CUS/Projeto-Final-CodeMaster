<?php

$ferias = getFerias();
function getferiasa()
{
  $result = selectUnicSQL("SELECT * FROM centroferias");
  return $result;
}

$ferias = getferiasa();

?>

<main>
  <div class="container-fluid">

    <div class="row mt-5">
      <div class="col-12">
        <div class="spacer mx-auto"></div>
      </div>
    </div>
    <div class="row mt-5 pt-1">
      <div class="col-12 text-center">
        <h1 class="title"><?= $ferias['titulo']; ?></h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-9 text mx-auto">

        <?= $ferias['texto']; ?>

      </div>
    </div>
</main>