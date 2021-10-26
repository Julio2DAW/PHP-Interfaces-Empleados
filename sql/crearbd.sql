/**
  crearbd.sql
  Script para crear la base de datos
  @author Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>
  @license GPL v3 2021
**/

CREATE DATABASE empresa;

CREATE TABLE Empleados(
  idEmpleado tinyint UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  dni char(9) NOT NULL UNIQUE,
  nombre varchar(60) NOT NULL,
  correo varchar(100) NULL,
  telefono char(9) NOT NULL
)
