SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `td_informatica` ;
CREATE SCHEMA IF NOT EXISTS `td_informatica` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `td_informatica` ;

-- -----------------------------------------------------
-- Table `td_informatica`.`Producto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `estatus` INT NOT NULL ,
  `Precio` DOUBLE NOT NULL ,
  PRIMARY KEY (`idProducto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `td_informatica`.`Venta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Venta` (
  `idVenta` INT NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  PRIMARY KEY (`idVenta`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `td_informatica`.`Detalle_venta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Detalle_venta` (
  `Producto_idProducto` INT NOT NULL ,
  `Venta_idVenta` INT NOT NULL ,
  `total` DOUBLE NOT NULL ,
  `cantidad` INT NOT NULL ,
  PRIMARY KEY (`Producto_idProducto`, `Venta_idVenta`) ,
  CONSTRAINT `fk_Producto_has_Venta_Producto1`
    FOREIGN KEY (`Producto_idProducto` )
    REFERENCES `td_informatica`.`Producto` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Venta_Venta1`
    FOREIGN KEY (`Venta_idVenta` )
    REFERENCES `td_informatica`.`Venta` (`idVenta` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Producto_has_Venta_Venta1_idx` ON `td_informatica`.`Detalle_venta` (`Venta_idVenta` ASC) ;

CREATE INDEX `fk_Producto_has_Venta_Producto1_idx` ON `td_informatica`.`Detalle_venta` (`Producto_idProducto` ASC) ;


-- -----------------------------------------------------
-- Table `td_informatica`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `RFC` VARCHAR(45) NULL ,
  `telefono` VARCHAR(45) NOT NULL ,
  `estatus` VARCHAR(45) NOT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  `Detalle_venta_Producto_idProducto` INT NOT NULL ,
  `Detalle_venta_Venta_idVenta` INT NOT NULL ,
  PRIMARY KEY (`idUsuario`, `Detalle_venta_Producto_idProducto`, `Detalle_venta_Venta_idVenta`) ,
  CONSTRAINT `fk_Usuario_Detalle_venta1`
    FOREIGN KEY (`Detalle_venta_Producto_idProducto` , `Detalle_venta_Venta_idVenta` )
    REFERENCES `td_informatica`.`Detalle_venta` (`Producto_idProducto` , `Venta_idVenta` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Usuario_Detalle_venta1_idx` ON `td_informatica`.`Usuario` (`Detalle_venta_Producto_idProducto` ASC, `Detalle_venta_Venta_idVenta` ASC) ;


-- -----------------------------------------------------
-- Table `td_informatica`.`Inventario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Inventario` (
  `idInventario` INT NOT NULL AUTO_INCREMENT ,
  `cantidad` INT NOT NULL ,
  `fecha` DATE NOT NULL ,
  PRIMARY KEY (`idInventario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `td_informatica`.`factura-venta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`factura-venta` (
  `folio` INT NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  `estatus` INT NOT NULL ,
  `cantidad` INT NOT NULL ,
  `Venta_idVenta` INT NOT NULL ,
  PRIMARY KEY (`folio`, `Venta_idVenta`) ,
  CONSTRAINT `fk_factura-venta_Venta1`
    FOREIGN KEY (`Venta_idVenta` )
    REFERENCES `td_informatica`.`Venta` (`idVenta` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE INDEX `fk_factura-venta_Venta1_idx` ON `td_informatica`.`factura-venta` (`Venta_idVenta` ASC) ;


-- -----------------------------------------------------
-- Table `td_informatica`.`Detalle_inventario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `td_informatica`.`Detalle_inventario` (
  `Producto_idProducto` INT NOT NULL ,
  `Inventario_idInventario` INT NOT NULL ,
  PRIMARY KEY (`Producto_idProducto`, `Inventario_idInventario`) ,
  CONSTRAINT `fk_Producto_has_Inventario_Producto1`
    FOREIGN KEY (`Producto_idProducto` )
    REFERENCES `td_informatica`.`Producto` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Inventario_Inventario1`
    FOREIGN KEY (`Inventario_idInventario` )
    REFERENCES `td_informatica`.`Inventario` (`idInventario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Producto_has_Inventario_Inventario1_idx` ON `td_informatica`.`Detalle_inventario` (`Inventario_idInventario` ASC) ;

CREATE INDEX `fk_Producto_has_Inventario_Producto1_idx` ON `td_informatica`.`Detalle_inventario` (`Producto_idProducto` ASC) ;

USE `td_informatica` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
