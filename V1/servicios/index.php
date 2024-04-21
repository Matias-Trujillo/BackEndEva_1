<?php
include_once '../version1.php';


//parametros
$existeId = false;
$valorId = 0;

if (count($_parametros)>0){
    foreach ($_parametros as $p){
        if(strpos($p ,'id') !== false){
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if($_version == 'v1'){
    if ($_servicios == 'servicios'){
        switch ($_metodo){
            case 'GET';
                if($_header == $_token_get){
                    /*include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    http_response_code(200);
                    echo json_encode(['data' => $lista]);
                    */

                    $retorno = [
                        [
                            "id" => 1,
                            "titulo" => 'Consultoría digital',
                            "texto" => 'Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.',
                            "activo" => true
                        ],
                        [
                            "id" => 2,
                            "titulo" => 'Soluciones multiexperiencia',
                            "texto" => 'Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización.',
                            "activo" => true
                        ],
                        [
                            "id" => 3,
                            "titulo" => 'Evolución de ecosistemas',
                            "texto" => 'Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia.',
                            "activo" => true
                        ],
                        [
                            "id" => 4,
                            "titulo" => 'Soluciones Low-Code',
                            "texto" => 'Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.',
                            "activo" => true
                        ],
                    ];
                    http_response_code(200);
                    echo json_encode(['data' => $retorno]);
                }else{
                    http_response_code(401);
                    echo json_encode(['error' => 'no tiene autorizacion get']);
                }
            break;
        default;
            break;    
        }
    }
}