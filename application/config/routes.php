<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['servicios'] = 'services/index';
$route['servicios/administracion-de-naves'] = 'services/administracionNaves';
$route['servicios/servicio-de-logistica'] = 'services/servicioLogistica';
$route['servicios/auditorias-seguridad'] = 'services/auditoriasSeguridad';
$route['servicios/arriendo-de-generadores'] = 'services/arriendoGeneradores';
$route['servicios/instruccion-capacitacion'] = 'services/instruccionCapacitacion';
$route['servicios/sistema-de-gestion'] = 'services/sistemaGestion';
$route['servicios/todos-servicios-ingenieria'] = 'services/todoServiciosIngenieria';
$route['servicios/todos-servicios-ingenieria/asistencia-en-muelles'] = 'services/asistenciaMuelles';
$route['servicios/todos-servicios-ingenieria/servicios-de-ingenieria'] = 'services/serviciosIngenieria';
$route['servicios/todos-servicios-ingenieria/nuevas-naves'] = 'services/nuevasNaves';
$route['servicios/todos-servicios-ingenieria/accidentes'] = 'services/accidentes';
$route['servicios/todos-servicios-ingenieria/sgs'] = 'services/sgs';
$route['servicios/todos-servicios-ingenieria/otros'] = 'services/otros';

$route['nuestros-clientes'] = 'ourclients';
$route['politica-de-privacidad'] = 'privacity/index';
$route['contacto'] = 'contact';
$route['sendmail'] = 'contact/sendMail';

$route['sobre-nosotros'] = 'aboutus';
$route['sobre-nosotros/certificado-de-aprobacion-iso'] = 'aboutus/certificadoAprobacionIso';
$route['sobre-nosotros/politica'] = 'aboutus/politica';
$route['sobre-nosotros/medioambiente-prestadores-subcontratistas'] = 'aboutus/medioambientePrestadores';
$route['sobre-nosotros/aspectos-medioambientales-significativos'] = 'aboutus/aspectosMedioambientales';
$route['sobre-nosotros/metas-medioambiente'] = 'aboutus/metasMedioambiente';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
