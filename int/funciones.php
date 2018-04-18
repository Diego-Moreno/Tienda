<?php
include 'config.php';
function portada($oferta_id, $oferta){

	$salida= "";

$salida =$salida. '<div class="col-lg-4">';
$salida =$salida. '<h2>'.$oferta["nombre"].'</h2>';
$salida =$salida. '<img src="'.$oferta["imagen"].'" alt="'.$oferta["nombre"].              '"class="img-rounded">';
$salida =$salida. '<p>'.$oferta["introdescipcion"].'</p>';
$salida =$salida. '<p><a class="btn btn-danger" href="oferta.php?id='.$oferta_id .'">Antes'                  .$oferta["precio"].'<strong> <br> Ahora'.$oferta["precio_oferta"].              '</strong></a></p> </div>';
    

        return $salida;
}



$ofertas = array();


$ofertas[001] = array(
"nombre"=>"MOTO G5",
"introdescipcion"=>"El Moto G5 vuelve a los orígenes con un tamaño más compacto (5 pulgadas) y estrena dos novedades importantes: diseño de aluminio y lector de huellas.",
"imagen"=>"img/motog5.jpg",
"precio"=>"$ 100.00",
"precio_oferta"=> " $80.000"
);

$ofertas[002] = array(
"nombre"=>"SAMSUNG J7",
"introdescipcion"=>"El Samsung Galaxy J7 (2017) cuenta con una pantalla Super AMOLED de 5.5 pulgadas, con resolución 1920x1080. Alcanza una densidad de píxeles de 401 ppp.",
"imagen"=>"img/samsungj7.jpg",
"precio"=>"$ 100.000",
"precio_oferta"=> " $80.000"
);

$ofertas[003] = array(
"nombre"=>"vivo X7",
"introdescipcion"=>"Pantalla con una amplia gama de colores (P3)
Brillo máximo de 625 cd/m2 (normal)
Pixeles dual-domain para ángulos de visualización amplios
Revestimiento oleofóbico resistente a huellas dactilares
Soporte para mostrar varios idiomas y caracteres simultáneamente
Zoom de pantalla
Alcance fácil",
"imagen"=>"img/vivox7.jpg",
"precio"=>"$ 100.000",
"precio_oferta"=> "$ 80.000"
);

$ofertas[004] = array(
"nombre"=>"SAMSUNG S8",
"introdescipcion"=>" El Galaxy S8 Plus ofrece la hermosa pantalla y cuerpo, excelente rendimiento y cámaras del Galaxy S8 que lo colocan en el grupo de los mejores celulares. Sin embargo, es más grande, pesado y hace más difícil alcanzar ese lector de huellas, pero tiene una mejor duración de batería.",
"imagen"=>"img/galaxys8.jpg",
"precio"=>"$ 100.000",
"precio_oferta"=> "$ 80.000"
);

$ofertas[005] = array(
"nombre"=>"HUAWEI p8",
"introdescipcion"=>"es el nuevo smartphone insignia de Huawei, que se concentra en una cámara de alta performance y una calidad de construcción superior. En cuanto a características, cuenta con una pantalla 1080p de 5.2 pulgadas, procesador octa-core Kirin 930 a 2GHz, 3GB de RAM, 16GB de almacenamiento interno, cámara trasera de 13 megapixels con OIS, cámara frontal de 8 MP, y corre Android 5.0 Lollipop.",
"imagen"=>"img/huaweip8.jpg",
"precio"=>"$ 100.000",
"precio_oferta"=> "$ 80.000"
);



?>