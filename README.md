Klik & Learn
============

***

## Contexto del proyecto

Un colectivo de desarrollo de software quiere crear una aplicación web para gestionar sus eventos online como talleres, masterclass o webinars.

Los usuarios podrán ver la descripción de un evento, apuntarse y desapuntarse. Podrán ver la lista de los eventos a los que se han apuntado. El administrador debe tener las herramientas para la gestión (CRUD) de los eventos.


## Requisitos funcionales


<ul>
<li>En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.</li>
<li>En portada habrá una lista paginada con todos los eventos ordenados del más cercano al más lejano.</li>
<li>Los eventos incluirán como mínimo: título, fecha/hora, número máximo de participantes, descripción y una imagen.</li>
<li>Los eventos pasados se deben mantener en la lista pero identificables como no disponibles.</li>
<li>Los usuarios deberán registrarse para apuntarse a un evento. Una vez apuntados no podran volver a hacerlo.</li>
<li>Al apuntarse a un evento recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el título del evento, la hora y el día.</li>
<li>Los usuarios podrán ver en una página la lista de los eventos a los que están registrados.</li>
<li>El administrador podrá hacer CRUD de los eventos.</li>
<li>Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.</li>
</ul>


## Requisitos no funcionales:


<ul>
<li>La web deberá estar ‘deployed’ aunque esté en desarrollo.</li>
<li>Todos los requisitos y casos de usuario deberán estar testeados (tests de aceptación)</li>
<li>Se deberá usar Laravel.</li>
<li>El envío de el email se deberá hacer usando un sistema de colas.</li>
<li>Para el frontend se deben usar componentes de blade.</li>
</ul>

## Entrega:

<ul>
<li>Un link a un repositorio de github</li>
<li>Readme del repositorio con:</li>
    <ul>
        <li>Briefing y explicación del proyecto</li>
        <li>Diagramas</li>
        <li>Sketch - mockup</li>
    </ul>
<li>Url en ‘deploy’.</li>
<li>Presentación en diapositivas</li>
<li>Demo y code review</li>

</ul>

***
***


## Required

- PHP 7.4 min
- Composer installed


## Install Project

1. Clone git https://github.com/Equipo-Proton/justplay-crud-laravel.git
2. Crear una base de datos en phpMyAdmin en local, con los credenciales - user : root, password : ""
3. Nombre de base de datos : justplay
4. Ejecutar Migracion "php artisant migration:fresh --seed"
5. La migracion creara 1 root como admin y 3 users.


## Install

- composer install and/or composer update
- npm run watch

## Run tests

Para ejecutar los tests hay que descomentar 2 lineas en el "phpunit.xml"
```php
    <server name="DB_CONNECTION" value="sqlite"/>
    <server name="DB_DATABASE" value=":memory:"/>
```
        
- vendor/bin/phpunit 
- OK (8 tests, 13 assertions)
<img src="./public/img/Readme.MD/test/test.jpg?raw=true" width=60%>

***
***

