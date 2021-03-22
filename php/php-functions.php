<?php
  // Función para calcular los años transcurridos entre una fecha
  function FunctionCalcularAnios($FechaInicio)
  {
    $data1 = new DateTime(date('Y-m-d'));
    $data2 = new DateTime($FechaInicio);
    $intervalo = $data1->diff($data2);
    echo "{$intervalo->y}";
  }
?>
