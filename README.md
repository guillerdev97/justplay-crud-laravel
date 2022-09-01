JustPlay
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

***
***


![Logo](https://cdn.discordapp.com/attachments/977641039953293362/1001906283282190496/unknown.png)


# Description

Proton teacher is a management app for teachers, where they can check their upcoming classes and add or remove them.


## Demo

![](https://github.com/Equipo-Proton/Proyecto-PHP/blob/v1.4.2/documents/Gifs/DesktopDemo.gif)


<details><summary>Mobile version</summary>

![](https://github.com/Equipo-Proton/Proyecto-PHP/blob/v1.4.2/documents/Gifs/MobileDemo.gif)

</details>


## Run Locally

Clone the project

```bash
  git clone https://github.com/guillerdev97/proton-teacher-software-php.git
```

Go to the project directory

```bash
  cd proton-teacher-software-php
```

Install dependencies

```bash
  composer update
```

Import the following file in XAMPP

```bash
  teacherschedule.sql
```


Start the server

```bash
  run Apache and MySQL server in XAMPP
```


## Technical requirements

- PHP 8.1.6
- Composer 2.3.10


## Running Tests

To run tests, run the following command

```bash
  vendor/bin/phpunit tests
```


## Work methodology

- TDD
- Agile
- Scrum
- Pair programming

## Versions

- v1.0 Implementation of the Read and Delete with phpunit tests.
- v2.0  Implementation of the Read and Delete with phpunit tests.



#### Tools and technologies used

| Front End | Back End | Diseño y organización | 
| :---: | :---: | :---: |
| <img src="https://github.com/Yelose/Yelose/blob/main/img/vscode.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/html.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/bootstrap.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/css.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/php.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/mysql.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/figma.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/jira.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/google.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/gimp.png"> |

## Documentation

- [Dailys](https://docs.google.com/document/d/1liH84SXscXYY4BS_w1ZbWIWB2hXiuaR0V_ZfhH4nhOI/edit?usp=sharing)
- [Presentation PPTX](https://docs.google.com/presentation/d/1WG3VDgjtu7rGhp6XlRIhJ1REsa0lLra_JRs3nOtzyBU/edit?usp=sharing)
- [Prototype](https://www.figma.com/file/A0ehPhseESU4JUTbYYJYg5/Prototype?node-id=30%3A257)
- [UserFlow](https://www.figma.com/file/K8ZyGDBIQeuiWOiMmWCczJ/User-flow-Proyect_php?node-id=0%3A1)



## Authors

| Nombre | Roll | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :--- | :---: | :---: |
| David del Castillo | Web Developer| https://github.com/BigBen999 |
| JuanFBalseca | Web Developer| https://github.com/sudoBuda |
| SusanaMartínez | Web Developer | https://github.com/Susipro |
| Guillermo García | Scrum Master | https://github.com/guillerdev97 |
| Kerim Ozkan| Product Owner | https://github.com/ozknkrm |

## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


