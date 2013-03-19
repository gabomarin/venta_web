SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `cc409_virtualtd` ;
CREATE SCHEMA IF NOT EXISTS `cc409_virtualtd` DEFAULT CHARACTER SET utf8 ;
USE `cc409_virtualtd` ;

-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`factura` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  `estatus` INT(11) NOT NULL ,
  `cantidad` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `mail` VARCHAR(40) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `rfc` VARCHAR(45) NULL DEFAULT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(45) NOT NULL ,
  `estatus` VARCHAR(45) NOT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`inventario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`inventario` (
  `id` INT(11) NOT NULL ,
  `fecha` DATE NOT NULL ,
  `cantidadProducto` INT(11) NOT NULL ,
  `cantidadReal` INT(11) NOT NULL ,
  `cantidadEsperada` INT(11) NOT NULL ,
  `descripcion` VARCHAR(300) NOT NULL ,
  `usuario_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`, `usuario_id`) ,
  CONSTRAINT `fk_inventario_usuario1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `cc409_virtualtd`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_inventario_usuario1_idx` ON `cc409_virtualtd`.`inventario` (`usuario_id` ASC) ;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`producto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`producto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `estatus` INT(11) NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  `existencia` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`venta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`venta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `total` DOUBLE NOT NULL ,
  `factura_id` INT(11) NOT NULL ,
  `usuario_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`, `factura_id`, `usuario_id`) ,
  CONSTRAINT `fk_venta_factura1`
    FOREIGN KEY (`factura_id` )
    REFERENCES `cc409_virtualtd`.`factura` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venta_usuario1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `cc409_virtualtd`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_venta_factura1_idx` ON `cc409_virtualtd`.`venta` (`factura_id` ASC) ;

CREATE INDEX `fk_venta_usuario1_idx` ON `cc409_virtualtd`.`venta` (`usuario_id` ASC) ;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`detalle_venta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`detalle_venta` (
  `producto_id` INT(11) NOT NULL ,
  `venta_id` INT(11) NOT NULL ,
  `total` DOUBLE NOT NULL ,
  `cantidad` INT NOT NULL ,
  PRIMARY KEY (`producto_id`, `venta_id`) ,
  CONSTRAINT `fk_producto_has_venta_producto`
    FOREIGN KEY (`producto_id` )
    REFERENCES `cc409_virtualtd`.`producto` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_has_venta_venta1`
    FOREIGN KEY (`venta_id` )
    REFERENCES `cc409_virtualtd`.`venta` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_producto_has_venta_venta1_idx` ON `cc409_virtualtd`.`detalle_venta` (`venta_id` ASC) ;

CREATE INDEX `fk_producto_has_venta_producto_idx` ON `cc409_virtualtd`.`detalle_venta` (`producto_id` ASC) ;


-- -----------------------------------------------------
-- Table `cc409_virtualtd`.`inventario_has_producto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cc409_virtualtd`.`inventario_has_producto` (
  `inventario_id` INT(11) NOT NULL ,
  `producto_id` INT(11) NOT NULL ,
  PRIMARY KEY (`inventario_id`, `producto_id`) ,
  CONSTRAINT `fk_inventario_has_producto_inventario1`
    FOREIGN KEY (`inventario_id` )
    REFERENCES `cc409_virtualtd`.`inventario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventario_has_producto_producto1`
    FOREIGN KEY (`producto_id` )
    REFERENCES `cc409_virtualtd`.`producto` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `fk_inventario_has_producto_producto1_idx` ON `cc409_virtualtd`.`inventario_has_producto` (`producto_id` ASC) ;

CREATE INDEX `fk_inventario_has_producto_inventario1_idx` ON `cc409_virtualtd`.`inventario_has_producto` (`inventario_id` ASC) ;

USE `cc409_virtualtd` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
