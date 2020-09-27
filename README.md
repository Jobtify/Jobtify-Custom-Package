# Jobtify Custom Package

_Empaquetado semi personalizable para bolsas de empleo propias. Esta herramienta te ayuda a crear una página especializada para mostrar todas tus ofertas publicadas desde jobtify.com.mx_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas o ambienes de producción._

Mira **Instalación** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Requisitos mínimos_
* Cuenta como reclutador en jobtify.com.mx
* Contar con clave TOKEN y KEY
* Servidor web Apache 5.6 o Superior
* mod_rewrite
* Dominio y subdominio propio
* Conocimiento básicos HTML (En caso de querer personalizar o crear tus propias plantillas).

```
También puedes solicitar al equipo de Jobtify México hacer la instalación por ti.
```

### Instalación 🔧

_Sigue estos breves pasos para realizar tu instalación correctamente_

1. Descarga el proyecto en .zip y descromprímelo. Si utilizas git puedes clonar el proyecto.

```
git clone https://gitlab.com/jobtifymexicosas/jobtify-custom-package.git
```

2. Sube tus archivos a tu hosting y configura el archivo config.php ubicado en la raíz del proyecto (no elimines ninguna variable definida). Primero debes de agregar las claves __TOKENBB__ y __KEYBB__.
```
	define('__TOKENBB__', 'AQUI TU TOKENBB', true);
	define('__KEYBB__', 'AQUI TU KEYBB', true);
```

3. Personaliza tu instalación agregando un logo principal, favicon e imagen personalizada para la sección en la que se muestran las ofertas (Esta última es opcional, el sistema cuenta con una imagen predeterminada).
```
    define('__LOGO__', "AQUI LA URL DE T ULOGO", true);
	define('__FAVICON__', "AQUI LA URL DE TU FAVICON");
	define('__VVACANTE__', 'AQUI LA URL DE TU IMAGEN DE FONDO 1600px x 636px', true);
```

4. Personaliza el menú de tu instalación. Agrega o elimina elementos del menú principal. Para ocultar un ítem sin eliminarlo, agrega una almohadilla al inicio. Ejemplo: ítem "contacto".
```
$menu = [
			array("NOMBRE" => "Inicio", "URL"=> __PATH__),
			array("NOMBRE" => "Nosotros", "URL"=> __PATH__.'nosotros'),
		    #array("NOMBRE" => "Contacto", "URL"=>  __PATH__.'contacto'),
			array("NOMBRE" => "EJEMPLO", "URL"=> 'URL DE LA PÁGINA'),
		];
```

5.- Por último, si agregaste en el menú páginas propias, para **maquetar** su contenido debes agregar un archivo en la carpeta raíz **"pages"** con terminación **.php**. Por ejemplo:

![Pages folder](https://i.ibb.co/k4ZYYgH/pages.png)

## Ejecutando las pruebas ⚙️

_Si algo anda mal, la instalación arrojará un mensaje con un código de error. Puedes tomar una captura de pantalla y solicitar ayuda al correo soporte@jobtify.mx_
![Api Mensaje](https://i.ibb.co/zHtDdLm/api-faild.png)


### Analice las pruebas end-to-end 🔩

_Las URL's que deben funcionar correctamente son:_

```
http://tuwebempleo.com/
http://tuwebempleo.com/cualquier_pagina_creada
http://tuwebempleo.com/oferta/abcabcabc123
```

## Construido con 🛠️

_El paquete es muy simple para su implementación fácil y rápida. Esperamos mejorarlo con el paso del tiempo. De momento esto es lo que utilizamos:_

* [Jobtify](https://empresas.jobtify.com.mx/planes) - Portal de reclutadores
* [PHP](https://www.php.net/manual/es/migration56.php) - 5.6 o Superior
* [Bootstrap](https://getbootstrap.com/docs/3.3/) - Versión 3.3


## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://gitlab.com/jobtifymexicosas/jobtify-custom-package/wikis/Jobtify-Custom-Package-WIKI)


## Autores ✒️

_Personas que han hecho realizad este proyecto_

* **Neftalí Acosta** - *Trabajo Inicial* - [neftaliacosta LinkedIn](https://www.linkedin.com/in/neftaliacosta/)


## Licencia 📄

Este proyecto está bajo la Licencia *Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional.* - mira el archivo: [LICENSE](https://creativecommons.org/licenses/by-nc-sa/4.0/) para detalles

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Adquiere un plan de pago en nuestra plataforma.
* Da las gracias en algunas de nuestras redes🤓.
* Envíanos un correo con tus comentarios: hola@jobtify.mx

## Soporte
_Si tienes dudas o inconveniente envía un mensaje al correo soporte@jobtify.mx_


