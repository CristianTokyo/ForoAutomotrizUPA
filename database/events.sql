
-- -----------------------------------------------------
-- USERS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `idusr` INT NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100) NOT NULL,
  `sent` INT(1) NOT NULL,
  `form` INT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idusr`));

-- -----------------------------------------------------
-- TYPES (events)
-- -----------------------------------------------------
  CREATE TABLE IF NOT EXISTS `types` (
  `idtype` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idtype`));

-- -----------------------------------------------------
-- EVENTS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `events` (
  `idevent` INT NOT NULL AUTO_INCREMENT,
  `idtype` INT NULL,
  `ename` VARCHAR(100) NOT NULL,
  `manager` VARCHAR(100) NULL,
  `mcharge` VARCHAR(100) NULL,
  `beginhr` TIME NOT NULL,
  `finishhr` TIME NOT NULL,
  `day` INT(2) NOT NULL,
  `size` INT NOT NULL,
  CONSTRAINT `fk_types` 
    FOREIGN KEY (`idtype`) REFERENCES `types`(`idtype`),
  PRIMARY KEY (`idevent`));

-- -----------------------------------------------------
-- USERS_EVENTS
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users_events` (
  `idusrevent` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusr` INT NOT NULL,
  `idevent` INT NOT NULL,
  PRIMARY KEY (`idusrevent`),
  CONSTRAINT `fk_users_events_users` 
    FOREIGN KEY (`idusr`) REFERENCES `users`(`idusr`),
  CONSTRAINT `fk_users_events_events1`
    FOREIGN KEY (`idevent`) REFERENCES `events`(`idevent`));


SET FOREIGN_KEY_CHECKS = 0;

INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Conferencia Magistral');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Panel Magistral');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Recorrido');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Concurso');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Conferencia');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Taller');
INSERT INTO `types` (`idtype`, `type`) VALUES (null, 'Exposición');


INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 1,"Tendencias de la Industria Automotriz","Ing. Armando Ávila Moreno","Vicepresidente de Manufactura de Nissan Mexicana","10:00","11:00",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 2,"Tendencias del sector automotriz y la pertinencia del Sector Educativo","Dr. Herminio Baltazar Cisneros ","Coordinador General de las Universidades Tecnológicas y Politécnicas","11:00","12:30",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 4,"Concurso Modelado en Solid Works. Primera Etapa","-","-","12:30","13:00",26,25);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Industria 4.0","Ina Helena Ringk Seterbakken","Proyect Manager of Aguascalientes Continental","13:00","15:00",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Nuevo Lenguaje de Comunicación de la Calidad en las Empresas","Ing. Salvador Esparza del Pozo","Director General de Esportec SA de CV","13:15","14:15",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"El Impacto y Desarrollo de la Manufactura Automotriz","Ing. Sergio Luna Flores","Director CIATEQ en Aguascalientes","13:15","14:15",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 6,"Lean Manufacturing. Identifiación y Solución de Problemas en una Cadena de Valor","Dr. Julio Alberto Márquez Landa","Director Ejecutivo del Grupo Qualinet S.C.","16:15","18:00",26,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 6,"Diseño de Componentes Automotrices","M.C Juan Carlos Collazo Barrientos","-","16:15","18:00",26,25);

INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Oportunidades y retos de la industria de las TI en México y en el mundo","Ing. Guillermo Ortega","-","16:15","18:00",26,1000);

INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 7,"Exposición de Proyectos Tecnológicos Orientados al Ramo Automotriz ","-","-","12:00","19:00",26,30);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 1,"El desafío de la excelencia en la cadena de suministro","Frank Nalepa","Exdirector de Calidad de BMW","09:00","11:00",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Jóvenes Emprendedores en la Proveeduría Automotriz de Autopartes","-","-","11:00","12:30",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Importancia del Factor Humano en el Sector Automotriz","Ma de Lourdes Quijas Jiménez","Human Resources Director, BMW","11:00","12:30",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Desarrollo de las PYMES Para la Proveduría Automotriz","Ing. Armando Gómez de la Torre","Vicepresidente Tachi-s México","12:45","14:30",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 6,"Un México emprendedor","MDA Juan Camilo Mesa Jaramillo","Rector Universidad Cuahutémoc Aguascalientes","12:45","14:30",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 4,"Modelado en SolidWorks. Etapa Final y Premiación","-","-","16:00","19:00",27,25);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 6,"Inventarios estratégicos en la industria automotriz","Álvaro Salinas Figueroa","-","16:00","18:30",27,1000);
INSERT INTO `events` (`idtype`, `ename`, `manager`, `mcharge`, `beginhr`, `finishhr`, `day`, `size`) VALUES ( 5,"Es Tiempo de Crear","Ing. Cuitláhuac Pérez Cerros","Director de Maindsteel y Presidente de Grupo MAEN","16:00","18:30",27,1000);



-- select * from users_events inner join users using(idusr) inner join events using(idevent) inner join types using(idtype); 
