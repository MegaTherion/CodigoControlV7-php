Codigo de Control V7 PHP para el Servicio Nacional de Impuestos de Bolivia
==========================================================================

Este proyecto es una implementación del algoritmo para obtener el código de control exigido por el [Servicio Nacional de Impuestos de Bolivia](http://www.impuestos.gob.bo) para ser impreso en cada factura que emita un sistema de facturación y ventas. *ESTÁ PROBADO con los 5000 casos de prueba que brinda la web del Servicio Nacional de Impuestos.* Codificado por *Christian Gómez Serapio* :-)

### Licencia

Esta implementación en PHP tiene licencia Apache (ver archivo LICENSE.txt) y puedes usarlo libremente en tus proyectos comerciales o de código abierto :-)

### Instalación

Simplemente descarga el repositorio y copia los siguientes archivos a tu proyecto: `AllegedRC4.php`, `CodigoControlV7.php` y `Verhoeff.php`.

### ¿Cómo se usa?

Incluye el archivo `CodigoControlV7.php` en cualquier script PHP y ejecuta el método estático **generar()** de la siguiente manera:

```php
require_once('CodigoControlV7.php');

$numero_autorizacion = '29040011007';
$numero_factura = '1503';
$nit_cliente = '4189179011';
$fecha_compra = '20070702';
$monto_compra = '2500';
$clave = '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';

echo CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
```

El método `generar()` recibe seis cadenas en el siguiente orden y correspondientes a los siguientes parámetros:

* Número de autorización
* Número de factura
* NIT de cliente
* Fecha de compra
* Monto de la compra *Es tu responsabilidad redondear este monto y convertirlo nuevamente a cadena ;)*
* Clave de dosificación de facturas

Y devuelve una cadena conteniendo el **codigo de control** :D

### ¿Tienes más dudas?

Si tienes alguna pregunta o deseas la integración del código a tu sistema, escríbeme a megatherion@tuxnir.com

### Codigo de Control V7 en Java

Estás buscando la implementación en Java?, tengo la solución, sólo escríbeme a megatherion@tuxnir.com

### Codigo de Control V7 en C#

Estás buscando la implementación en C#?, tengo la solución, sólo escríbeme a megatherion@tuxnir.com

Happy codding! :D
