<?php
//llenado de los datos 
$semestre1 = array(
    $curso1 = array(
        "curso" => "Matematica Basica ",
        "creditos" => 5,
        "nota" => 13,
    ),
    $curso2 = array(
        "curso" => "Ingles",
        "creditos" => 3,
        "nota" => 18,
    ),
    $curso3 = array(
        "curso" => "Eprecion Artistica",
        "creditos" => 4,
        "nota" => 15,
    ),
);
$semestre2 = array(
    $curso1 = array(
        "curso" => "matematica Basica 2",
        "creditos" => 4,
        "nota" => 17,
    ),
    $curso2 = array(
        "curso" => "Ingles Tecnico",
        "creditos" => 3,
        "nota" => 17,
    ),
    $curso3 = array(
        "curso" => "Calculo 1",
        "creditos" => 4,
        "nota" => 13,
    ),
);
$semestre3 = array(
    $curso1 = array(
        "curso" => "Calculo Multivariable ",
        "creditos" => 5,
        "nota" => 13,
    ),
    $curso2 = array(
        "curso" => "Costa y Presupuesto",
        "creditos" => 3,
        "nota" => 17,
    ),
    $curso3 = array(
        "curso" => "Fisica 1",
        "creditos" => 4,
        "nota" => 14,
    ),
);
$semestre4 = array(
    $curso1 = array(
        "curso" => "Base de Datos",
        "creditos" => 3,
        "nota" => 16,
    ),
    $curso2 = array(
        "curso" => "Ecuaciones Diferencial",
        "creditos" => 3,
        "nota" => 15,
    ),
    $curso3 = array(
        "curso" => "fisica 2",
        "creditos" => 4,
        "nota" => 14,
    ),
);

$semestre5 = array(
    $curso1 = array(
        "curso" => "Base de Datos 2",
        "creditos" => 4,
        "nota" => 17,
    ),
    $curso2 = array(
        "curso" => "redes 1",
        "creditos" => 3,
        "nota" => 14,
    ),
    $curso3 = array(
        "curso" => "Programacion web",
        "creditos" => 4,
        "nota" => 17,
    ),
);

//curso- credito - nota
function cuerpo(){
    echo "<tr>";
    echo "<th> Curso </th>";
    echo "<th> credito </th>";
    echo "<th> nota </th>";
    echo "</tr>";
}

//pormedio nota
function promedio($arri){
    $n1 = $arri[0]["nota"];
    $n2 = $arri[1]["nota"];
    $n3 = $arri[2]["nota"];
    $pro=($n1+$n2+$n3)/3;

    $prore=round($pro,2);
    echo "<tr>";
    echo "<th> Promedio </th>";
    echo "<th>  </th>";
    echo "<th> $prore </th>";
    echo "</tr>";
}

//pormedio general
function pro($arri) {
    $n1 = $arri[0]["nota"];
    $n2 = $arri[1]["nota"];
    $n3 = $arri[2]["nota"];
    $pro=($n1+$n2+$n3)/3;

    $prore=round($pro,2);
    return $prore;
}

function promedioponderado(){
    global $semestre1, $semestre2, $semestre3, $semestre4, $semestre5;

    $p1=pro($semestre1);
    $p2=pro($semestre2);
    $p3=pro($semestre3);
    $p4=pro($semestre4);
    $p5=pro($semestre5);
    $progeral=($p1+$p2+$p3+$p4+$p5)/5;
    echo "<table>";
    echo "<tr>";
    echo "<th> Promedio General </th>";
    echo "<th>--------------</th>";
    echo "<th> $progeral </th>";
    echo "</tr>";
    echo "</table>";
}

echo "certificado de estudios <br>";

//semestre 1
echo "<table>";
echo "<th class:'ola'> semenestere I_2021-II</th>";
cuerpo();
foreach ($semestre1 as $dato => $valor) {
    echo "<tr>";
    foreach($valor as $clave => $iten){
        
        echo "<td>$iten</td>";
       
    }

    echo "</tr>";
}
promedio($semestre1);
echo "</table>";

//semestre 2
echo "<table>";
echo "<th class:'ola'> semenestere II_2022-I</th>";
cuerpo();
foreach ($semestre2 as $dato => $valor) {
    echo "<tr>";
    foreach($valor as $clave => $iten){
        
        echo "<td>$iten</td>";
        
    }
    echo "</tr>";
}
promedio($semestre2);
echo "</table>";

//semestre 3
echo "<table>";
echo "<th class:'ola'> semenestere III_2022-II</th>";
cuerpo();
foreach ($semestre3 as $dato => $valor) {
    echo "<tr>";
    foreach($valor as $clave => $iten){
        
        echo "<td>$iten</td>";
        
    }
    echo "</tr>";
}
promedio($semestre3);
echo "</table>";

//semestre 4
echo "<table>";
echo "<th class:'ola'> semenestere IV_2023-I</th>";
cuerpo();
foreach ($semestre4 as $dato => $valor) {
    echo "<tr>";
    foreach($valor as $clave => $iten){
        
        echo "<td>$iten</td>";
        
    }
    echo "</tr>";
}
promedio($semestre4);
echo "</table>";
//semestre 5
echo "<table>";
echo "<th class:'ola'> semenestere V_2023-II</th>";
cuerpo();
foreach ($semestre5 as $dato => $valor) {
    echo "<tr>";
    foreach($valor as $clave => $iten){
        
        echo "<td>$iten</td>";
        
    }
    echo "</tr>";
}
promedio($semestre5);

echo "</table>";
// promedio general

promedioponderado();
echo "Tabla de multiplicar" . "\n";
//se genera la tabla
echo "<table>";
for ($i = 1; $i <= 9; $i++) {

    echo "<tr>";
    for ($k = 1; $k <= 9; $k++) {
        //aca se multica
        $a = $i * $k;
        echo  "<th> $a </th>";
        //echo "$i";
        //echo "<br>";

    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
?>


<!-- estilos  -->

<style>
table {
    width: 90%;
    border-collapse: collapse;
    margin: 20px 40px;
    font-size: 16px;
    border: 2px solid #333;
}

th, td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

td{
    background-color: #008080;
    color: #fff;
}
th{
    background-color: #F5F5DC;

}

</style>