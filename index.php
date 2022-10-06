<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
      <!DOCTYPE html>
<html>
<head>
    <!--Jesús Ferney López Avendaño-->
    <!-- Desarrollo web con PHP-->
    <!-- Taller uso de funciones-->
    <!-- La lógica y la sintaxis que estamos logrando en el código 
         comienza creando un archivo "Biblioteca" que a mí modo de
         entender es como si fuese un componente que estamos
         importando en el archivo index. En "Biblioteca" trabajamos la lógica 
         en donde la función le da el método y el valor correspondiente de 
         números y operación, para crear el formulario, que será el medio para 
         que nuestra aplicación funcione. Con condicionales hacemos que cada 
         operación tenga su función, desde el "if", en donde sí la operación es 
         igual a "sumar", entonces la suma será entre el primer y segundo valor
         y con el echo imprimimos el resultado de ésta operación. Así procedo a
         hacer con cada operación usando el "elseif". Ya en el archivo Index, 
         hacemos el form y le pasamos el método POST y en el action importamos 
         nuestro archivo "biblioteca". En los input le ponemos number y en name
         los valores que llamamos para realizar la operación. En el select, el
         "name" será la tercera propiedad que pasamos en la "Biblioteca", y en 
         cada option, como value, la operación determinada, ésta vez, 
         asignándole una letra en vez de un operador. Y ya por último, en el
         button, el type será submit, asignándole el nombre "resultado".-->
    <title>Operaciones</title>
</head>
<body>
<form method= "POST" action="Biblioteca.php">
     <label>Primer numero</label><br>
     <input type="number" name="numero1"><br>
     <label>Segundo numero</label><br>
     <input type="number" name="numero2"><br>
 
     <select name="operacion">
         <option value="sumar">S</option>
         <option value="restar">R</option>
         <option value="multiplicar">M</option>
         <option value="dividir">D</option>
     </select>
         <button type="submit"> Resultado </button>
         </form>
        
   </body>
</html>
    </body>
</html>
