# My PHP MVC Architecture Project

This project demonstrates a simple implementation of the Model-View-Controller (MVC) architecture using PHP. It provides a structured approach for building web applications by separating the application logic into distinct components.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Documentation](#documentation)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

This project showcases a basic PHP MVC architecture, enabling developers to build scalable and maintainable web applications. The MVC pattern divides the application into three interconnected components: the Model, the View, and the Controller. By separating concerns, the MVC architecture promotes code organization, reusability, and easier maintenance.

## Features

- Separation of concerns: Models for handling data, Views for user interface, and Controllers for business logic.
- Routing system to map URLs to Controllers and Actions.
- Database integration for storing and retrieving data.
- Basic user authentication system.
- Example CRUD operations (Create, Read, Update, Delete) with database records.

## Requirements

To run this project, ensure you have the following requirements met:

- PHP 7.4 or higher
- MySQL or another supported database system
- Web server (e.g., Apache, Nginx)

## Installation
1. Clone the repository:
   ```shell
   git clone https://github.com/your-username/php-mvc-project.git

2. install composer if you haven't yet
   you can use the composer.phar in the project,do the shell command 
   ```shell
   php composer.phar install


## Configuration
1. config your database:
   config your database in the file 'src/_configuration/config.php'


## Documentation
1. 
   create your ORM class like your Tables in the database in the folder 'src/Model'
   like in the example in .
   there herit all Model Method in the App\Model , like selectAll, find($id), ... and other 

2.
   you can cofigure and add new route in the class in 'src\_configuration\WebRoute' static method 'webroutes()'

3.
   For the controller, the architecture is by default based on the page-controller binding. This means that one page corresponds to one controller, which handles the page and all its actions. It is preferable to create services to handle repetitive tasks and then call them in each controller.

   