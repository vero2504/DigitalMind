<?php
$A= 1.0;
$B=3.0;
$C=4.0;

// NO --> ! 
// O --> or ||
// Y --> and &&
// verdadero --> true
// falso --> false

$resultado = false and true;
var_dump ($resultado);

echo 'ejercicio 1:'.PHP_EOL;

$F =($A*$B/sqrt($C))/($C-1/$B)-(2*$C/$A);
echo $F;
echo PHP_EOL;
$G =(2*$A-$B/sqrt($C))/($C+1/$B)*($B/4);
echo $G;
echo PHP_EOL;

/* EJERCICIO 2*/

$A2=10;
$B2=20;

echo 'ejercicio 2:'.PHP_EOL;

var_dump (!(!($A2 <> 10) or(20> $B2) and($A2 = 10)and false))and true;
echo PHP_EOL;

/* EJERCICIO 3*/   

$A3=33;
echo 'ejercicio 3:'.PHP_EOL;

var_dump(!($A3 > 10) and ($A3 < 20));
echo PHP_EOL;
var_dump (!($A3 > 10) or !($A3 < 20));
echo PHP_EOL;
/* EJERCICIO 4*/

$A4=20;
$B4=20;
$C4=15;
$D4=10;
echo 'ejercicio 4:'.PHP_EOL;

var_dump((($A4 ==$B4)or($B4>$C4))or($C4<$D4));
echo PHP_EOL;

/* EJERCICIO 5*/

echo 'ejercicio 5:'.PHP_EOL;

$A5=10;
$B5=12;
$C5=13;
$D5=10; 
//((A>B) O (A>C) Y ((A=C) O (A >= B))
echo 'a: ';

var_dump (($A5 > $B5) || ($A5 < $C5) && (($A5=$C5) || ($A5 >= $B5)));
//((A >= B) O (A<D) Y ((A>= D) Y (C>D))
echo 'b:';
var_dump (($A5 >= $B5) || ($A5 < $D5) && (($A5 >= $D5) && ($C5 > $D5)));

//NO (a = c ) Y ( c > b )
echo 'c:';
var_dump (!($A5 == $C5) && ($C5 > $$B5));

//EJERCICIO 6*/

$M=8;
$N=9;
$R=5;
$S=5;
$T=4;
$V=77;
echo PHP_EOL;

echo 'ejercicio 6:'.PHP_EOL;
//NO ((M > N Y R > S ) O ( NO ( T < V Y S > M ) ) )

echo PHP_EOL;
var_dump(!(($M > $N && $R > $S) or (!($T < $V && $S > $M))));
echo PHP_EOL;

//EJERCICIO 7*/
echo 'ejercicio 7:'.PHP_EOL;
$resultadoA = (3 * 2 - 4 / 2 * 1) > (3 * 2 + 2 * 1) and (5 > 11 % 4);
$resultadoB = (3 >= 3 || 5 <> 5) and ! (15 / 5 + 2 <> 5);
$resultadoC = !(! ((3 * (- 3)) * 2 > ( 3 -(- 3 ) * 2 ) || 1 ^ 3 * 2 > 6 ));
$resultadoD = (3 >= 4 and 5 > 3 && 3 > 3) or ! (4 <= 4 or 5 > 4 or 6 >= 7);

var_dump ($resultadoA);
var_dump ($resultadoB);
var_dump ($resultadoC);
var_dump ($resultadoD);

//EJERCICIO 8*/
echo 'ejercicio 8:'.PHP_EOL;

/*Dadas A, B, C, D, E y F variables de tipo numérico escribir las expresiones lógicas correspondientes a los
siguientes enunciados:
a. A es positivo y B es negativo.
b. A, B y C son diferentes.
c. E es no nulo y F no es mayor que G.
d. B está estrictamente entre A y C.
e. F es negativo o E es no negativo, pero no ambos a la vez.*/
 
$A = readline('ingrese el valor de A:');//1
$B = readline('ingrese el valor de B:');//2
$C = readline('ingrese el valor de C:');//1
$expresionA =($A>0)&&($B<0);
$expresionB =($A<>$B and $B != $C && $A<>$C);
$expresionC =($E != 0) and !($F>$G);
$expresionD =($B >$A)&&($B<$C)or($B>$C)and ($B<$A);
$expresionE =($F < 0)xor ! ($E<0);