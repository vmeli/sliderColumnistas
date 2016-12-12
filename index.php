<?php 
// phpinfo();

	// echo 'Hola mundo<br><br>';

	// echo 6 + 2 ."<br><br>";

	// var_dump(4+2);//más información sobre el resultado

	// echo "<br><br>";

	// echo 6 + 2;

	// echo "<br><br>";

	// $verdad = true;
	// var_dump($verdad);

	// echo "<br><br>";
	
	// $Array1 = [1 , 2 , 3];
	// $Array2 = array(1, 6 ,78);

	// var_dump($Array1);
	// echo "<br><br>";
	// var_dump($Array2);
	// echo "<br><br>";

	// $count = 3;
	// echo $count+=5;


// var_dump($Array1[2]);
// echo '<br><br>';

// $numer = [
// 	'uno'         => 1,
// 	'dos'         => 2,
// 	'tres'        => 3,
// 	'cuatro'      => 4,
// ];

// var_dump($numer['dos']);


// $count = 0;

// while ($count <= 10) {
// 	echo "$count línea<br><br>";
// 	$count++;
// }


// $array = array(
//     "foo" => "bar",
//     42    => 24,
//     "multi" => array(
//          "dimensional" => array(
//              "array" => "foo"
//          )
//     )
// );



  // $data = array();
  // while($f=$rs->fetchObject()) {
  //   $columnista_url = '#';
  //   $imagen  = base_path()."sites/all/modules/custom/glr_columnistas/theme/personaje_interno.jpg";
  //   if(!empty($f->tid_columnista)) $columnista_url = base_path().drupal_get_path_alias('taxonomy/term/'.$f->tid_columnista);
  //   if(!empty($f->img_columnista)) $imagen = image_style_url('img_56x56', $f->img_columnista);
  //   $data[] = array(
  //       'fecha'         => format_date($f->fecha, "custom", 'l, j \d\e F \d\e Y'),
  //       'url_nota'      => url('node/'.$f->nid),
  //       'titulo'        => glr_columnistas_truncate(trim($f->title), 50),
  //       'columnista_url'=> $columnista_url,
  //       'imagen'        => $imagen,
  //       'columnista'    => $f->name_columnista,
  //       'columna_url'   => base_path().drupal_get_path_alias('taxonomy/term/'.$f->tid_columna),
  //       'columna'       => $f->name_columna,
  //     );
  // }

$polos = ['HTML','CSS','HTML','PHP',['HTML','CSS','HTML','PHP']];

// print_r($polos); exit();
// var_dump($polos);

// for ($i=0; $i <=1 ; $i++) { 
// 	echo $polos[$i];
// }

foreach ($polos as $key => $value) {
	// if ($key == 2 ) {
	// 	break;
	// }

	if ($key >=2 ) {
	echo $value;
	}
}


























?>