function comprobar_refresco() {
  $.ajax({
    type: 'POST',
    url: 'comprobar_refresco.php'
  }).success(function(resultado) {
    if (resultado.indexOf('REFRESCAR') > -1) {
      location.reload();
    }
  });
}

session_start();
/* Hacer aquí las comprobaciones oportunas en la base de datos
 para saber si el usuario necesita refresco o no */
if ($necesita_refresco === true) {
  die('REFRESCAR');
} else {
  die('NO');
}

