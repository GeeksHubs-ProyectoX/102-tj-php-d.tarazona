
<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>


    Considere el siguiente problema:

    Escriba un programa corto que permita calcular los números primos dado un input de entrada.
    
     N = 13 
  
     Resultado :
	 
     [2,3,5,7,11,13]


    Observe que su resultado es una array de una dimensión.
    El valor mínimo de entrada será 1, en este caso el resultado devolverá -1.    
    
    Se atiente al siguiente ejemplo:
   
    N = 1     N = 2      N = 5         N = 8         N = 14     ...    N
                
    Resultado:

	-1	   [2]	     [2,3,5]      [2,3,5,7]     [2,3,5,7,11]   



    En la carpeta 'src/Numbers.php' se encuentra el fichero con la definición de nuestro método vacío.
    En la carpeta 'test/NumbersTest.php' se encuentra el fichero con la suite de test.

    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    A continuación se muestran los resultado que se tienen que obtener tras desarrollar el algoritmo.
    
    [Suite Tests]

    PHPUnit 7.2.3 by Sebastian Bergmann and contributors.

    Runtime:       PHP 7.2
    Configuration: ./102-tj-php/phpunit.xml

    Time: 00:00.447, Memory: 3.30 MB

    OK (10 tests, 10 assertions)
    Process finished with exit code 0



## Referencias

* [Tutorial - Testing Automatizado](https://github.com/GeeksHubsAcademy/2020-js-vanilla-testing-FFFF/blob/master/README.md)