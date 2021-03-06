-- MySQL Script generated by MySQL Workbench
-- 04/19/15 21:15:58
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema nutrivital
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema nutrivital
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `nutrivital` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `nutrivital` ;

-- -----------------------------------------------------
-- Table `nutrivital`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nutrivital`.`roles` (
  `roles_id` INT NOT NULL COMMENT 'Llave foranea',
  `roles_nombre` VARCHAR(20) NOT NULL COMMENT 'Nombre del Rol',
  `roles_descripcion` VARCHAR(45) NULL COMMENT 'Descripcion del rol',
  PRIMARY KEY (`roles_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nutrivital`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nutrivital`.`usuarios` (
  `usuarios_nombre` VARCHAR(16) NOT NULL COMMENT 'Nombre del usuario, llave primaria',
  `usuarios_email` VARCHAR(45) NULL COMMENT 'correo electrónico del paciente',
  `usuarios_password` VARCHAR(255) NOT NULL COMMENT 'Contraseña para accesar el portal web',
  `roles_id` INT NOT NULL,
  PRIMARY KEY (`usuarios_nombre`),
  INDEX `fk_usuarios_roles1_idx` (`roles_id` ASC),
  CONSTRAINT `fk_usuarios_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `nutrivital`.`roles` (`roles_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nutrivital`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nutrivital`.`pacientes` (
  `pacientes_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria para cada paciente',
  `pacientes_nombre` VARCHAR(45) NOT NULL COMMENT 'Nombre del Paciente',
  `pacientes_apellidos` VARCHAR(45) NOT NULL COMMENT 'Apellidos del paciente',
  `pacientes_genero` CHAR(1) NULL,
  `pacientes_fecha` DATE NOT NULL COMMENT 'Fecha de creacion del expediente',
  `pacientes_fecha_nac` DATE NOT NULL COMMENT 'Fecha de Nacimiento del Paciente',
  `pacientes_talla` INT NOT NULL COMMENT 'Tamaño en Centímetros del paciente',
  `pacientes_peso_meta` FLOAT NULL COMMENT 'Peso meta al que se quiere llegar',
  `pacientes_circ_muneca` FLOAT NOT NULL COMMENT 'Tamaño de la circunferencia de la muñeca en centímetros',
  `pacientes_ant_personales` LONGTEXT NULL COMMENT 'Cualquier padecimiento que presente el paciente',
  `pacientes_padec_familiares` LONGTEXT NULL COMMENT 'Padecimientos de salud a nivel de familiares',
  `usuarios_nombre` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`pacientes_id`),
  INDEX `fk_pacientes_usuarios1_idx` (`usuarios_nombre` ASC),
  CONSTRAINT `fk_pacientes_usuarios1`
    FOREIGN KEY (`usuarios_nombre`)
    REFERENCES `nutrivital`.`usuarios` (`usuarios_nombre`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nutrivital`.`controles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nutrivital`.`controles` (
  `controles_id` INT NOT NULL COMMENT 'Llave foranea para cada control',
  `controles_peso` FLOAT NOT NULL COMMENT 'Peso de la persona en cada control, se da en Kilogramos',
  `controles_imc` FLOAT NOT NULL COMMENT 'Indice de Masa Corporal del paciente en cada control',
  `controles_porc_grasa` FLOAT NOT NULL COMMENT 'Porcentaje de Grasa Corporal del paciente en el control',
  `porc_musculo` FLOAT NOT NULL COMMENT 'Porcentaje de Musculo del paciente en el control',
  `controles_porc_agua` FLOAT NOT NULL,
  `controles_porc_grasa_visc` FLOAT NOT NULL COMMENT 'Porcentaje de Grasa Visceral del paciente en el control',
  `controles_edad_metab` INT NOT NULL COMMENT 'Edad metabólica del paciente en el control',
  `controles_med_pecho` FLOAT NULL COMMENT 'Medida del pecho del paciente en cada control, dada en centímetros',
  `controles_circ_cintura` FLOAT NULL COMMENT 'Medida de la circunferencia de la cintura del paciente en cada control. Dada en centímetros',
  `controles_med_cadera` VARCHAR(45) NULL COMMENT 'Medida de la cadera del paciente en el control. Dada en centímetros.',
  `controles_notas` LONGTEXT NULL COMMENT 'Campo para notas del control.',
  `controles_fecha` DATE NOT NULL COMMENT 'Fecha del control',
  `pacientes_id` INT NOT NULL,
  PRIMARY KEY (`controles_id`, `pacientes_id`),
  INDEX `fk_controles_pacientes1_idx` (`pacientes_id` ASC),
  CONSTRAINT `fk_controles_pacientes1`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `nutrivital`.`pacientes` (`pacientes_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


INSERT INTO `nutrivital`.`roles` (`roles_id`, `roles_nombre`, `roles_descripcion`) VALUES ('1', 'nutricionista', 'Nutricionista - Full Acceso');
INSERT INTO `nutrivital`.`roles` (`roles_id`, `roles_nombre`, `roles_descripcion`) VALUES ('2', 'paciente', 'Paciente - Acceso solo a Controles');
INSERT INTO `nutrivital`.`usuarios` (`usuarios_nombre`, `usuarios_email`, `usuarios_password`, `roles_id`) VALUES ('nutri', 'nutri@nutri.com', '$2y$11$Z3MxI/oetz8Da4hfQ5KT..x4QNE819z2/EFqi9ArbszgJqC.n9.G.', '1');
INSERT INTO `nutrivital`.`usuarios` (`usuarios_nombre`, `usuarios_email`, `usuarios_password`, `roles_id`) VALUES ('pac', 'pac@nutri.com', '$2y$11$Z3MxI/oetz8Da4hfQ5KT..x4QNE819z2/EFqi9ArbszgJqC.n9.G.', '2');

CREATE USER sys_nutrivital@localhost IDENTIFIED BY 'nutrivital';
GRANT DELETE ON nutrivital.* TO sys_nutrivital@localhost;
GRANT SELECT ON nutrivital.* TO sys_nutrivital@localhost;
GRANT INSERT ON nutrivital.* TO sys_nutrivital@localhost;
GRANT UPDATE ON nutrivital.* TO sys_nutrivital@localhost;
FLUSH PRIVILEGES;

select * from controles;

insert into pacientes (pacientes_id, pacientes_nombre, pacientes_apellidos, pacientes_genero, 
pacientes_fecha, pacientes_fecha_nac, pacientes_talla, pacientes_peso_meta, pacientes_circ_muneca, 
pacientes_ant_personales,pacientes_padec_familiares, usuarios_nombre) values (1, 'fabiola', 'mayorga',
'f', '27/04/2105', '01/04/1991', 2, 3,5, 'pribea', 'prueba', 'nutri');


