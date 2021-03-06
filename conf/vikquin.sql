--
-- ER/Studio 8.0 SQL Code Generation
-- Project :      quinFire.DM1
--
-- Date Created : Sunday, April 06, 2014 00:36:38
-- Target DBMS : MySQL 5.x
--

-- 
-- TABLE: CAT_FASES 
--

CREATE TABLE CAT_FASES(
    CVE_FASE     DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    DESC_FASE    VARCHAR(100),
    PRIMARY KEY (CVE_FASE)
)ENGINE=MYISAM
;



-- 
-- TABLE: CAT_GRUPOS 
--

CREATE TABLE CAT_GRUPOS(
    CVE_GRUPO     DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    DESC_GRUPO    VARCHAR(100),
    PRIMARY KEY (CVE_GRUPO)
)ENGINE=MYISAM
;



-- 
-- TABLE: ENFRENTAMIENTOS 
--

CREATE TABLE ENFRENTAMIENTOS(
    CVE_ENFRENTAMIENTO      DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    CVE_ESTATUS             VARCHAR(3),
    CVE_EQUIPO              DECIMAL(10, 0),
    CVE_EQUIPO_VISITANTE    DECIMAL(10, 0),
    CVE_GRUPO               DECIMAL(10, 0),
    CVE_FASE                DECIMAL(10, 0),
    FECHA_ENFRENTAMIENTO    DATE,
    PRIMARY KEY (CVE_ENFRENTAMIENTO)
)ENGINE=MYISAM
;



-- 
-- TABLE: EQUIPOS 
--

CREATE TABLE EQUIPOS(
    CVE_EQUIPO     DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    DESC_EQUIPO    VARCHAR(100),
    BANDERA        VARCHAR(200),
    PRIMARY KEY (CVE_EQUIPO)
)ENGINE=MYISAM
;



-- 
-- TABLE: ESTATUS 
--

CREATE TABLE ESTATUS(
    CVE_ESTATUS     VARCHAR(3)      NOT NULL,
    DESC_ESTATUS    VARCHAR(100),
    PRIMARY KEY (CVE_ESTATUS)
)ENGINE=MYISAM
;



-- 
-- TABLE: PAGO_ACCESO 
--

CREATE TABLE PAGO_ACCESO(
    CVE_PAGO_ACCESO    DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    KEY_ACCESO         VARCHAR(25),
    PRIMARY KEY (CVE_PAGO_ACCESO)
)ENGINE=MYISAM
;



-- 
-- TABLE: PRONOSTICOS 
--

CREATE TABLE PRONOSTICOS(
    CVE_PRONOSTICO        DECIMAL(10, 0)    NOT NULL AUTO_INCREMENT,
    CVE_USUARIO           DECIMAL(10, 0),
    CVE_ESTATUS           VARCHAR(3),
    CVE_ENFRENTAMIENTO    DECIMAL(10, 0),
    GOLES_LOCAL           DECIMAL(10, 0),
    GOLES_VISITANTE       DECIMAL(10, 0),
    PUNTAJE_PARTIDO       DECIMAL(10, 0),
    CVE_FASE              DECIMAL(10, 0),
    PRIMARY KEY (CVE_PRONOSTICO)
)ENGINE=MYISAM
;



-- 
-- TABLE: USUARIOS 
--

CREATE TABLE USUARIOS(
    CVE_USUARIO        DECIMAL(10, 0) NOT NULL AUTO_INCREMENT,
    NOMBRE_COMPLETO    VARCHAR(300),
    NICK               VARCHAR(50),
    CONTRASENIA        VARCHAR(100),
    AVATAR             VARCHAR(200),
    CORREO             VARCHAR(250),
    CELULAR            DECIMAL(15, 0),
    CVE_PAGO_ACCESO    DECIMAL(10, 0),
    PRIMARY KEY (CVE_USUARIO)
)ENGINE=MYISAM
;



-- 
-- INDEX: Ref35 
--

CREATE INDEX Ref35 ON ENFRENTAMIENTOS(CVE_ESTATUS)
;
-- 
-- INDEX: Ref47 
--

CREATE INDEX Ref47 ON ENFRENTAMIENTOS(CVE_EQUIPO)
;
-- 
-- INDEX: Ref48 
--

CREATE INDEX Ref48 ON ENFRENTAMIENTOS(CVE_EQUIPO_VISITANTE)
;
-- 
-- INDEX: Ref79 
--

CREATE INDEX Ref79 ON ENFRENTAMIENTOS(CVE_GRUPO)
;
-- 
-- INDEX: Ref610 
--

CREATE INDEX Ref610 ON ENFRENTAMIENTOS(CVE_FASE)
;
-- 
-- INDEX: Ref13 
--

CREATE INDEX Ref13 ON PRONOSTICOS(CVE_USUARIO)
;
-- 
-- INDEX: Ref34 
--

CREATE INDEX Ref34 ON PRONOSTICOS(CVE_ESTATUS)
;
-- 
-- INDEX: Ref56 
--

CREATE INDEX Ref56 ON PRONOSTICOS(CVE_ENFRENTAMIENTO)
;
-- 
-- INDEX: Ref612 
--

CREATE INDEX Ref612 ON PRONOSTICOS(CVE_FASE)
;
-- 
-- INDEX: Ref911 
--

CREATE INDEX Ref911 ON USUARIOS(CVE_PAGO_ACCESO)
;
-- 
-- TABLE: ENFRENTAMIENTOS 
--

ALTER TABLE ENFRENTAMIENTOS ADD CONSTRAINT RefESTATUS5 
    FOREIGN KEY (CVE_ESTATUS)
    REFERENCES ESTATUS(CVE_ESTATUS)
;

ALTER TABLE ENFRENTAMIENTOS ADD CONSTRAINT RefEQUIPOS7 
    FOREIGN KEY (CVE_EQUIPO)
    REFERENCES EQUIPOS(CVE_EQUIPO)
;

ALTER TABLE ENFRENTAMIENTOS ADD CONSTRAINT RefEQUIPOS8 
    FOREIGN KEY (CVE_EQUIPO_VISITANTE)
    REFERENCES EQUIPOS(CVE_EQUIPO)
;

ALTER TABLE ENFRENTAMIENTOS ADD CONSTRAINT RefCAT_GRUPOS9 
    FOREIGN KEY (CVE_GRUPO)
    REFERENCES CAT_GRUPOS(CVE_GRUPO)
;

ALTER TABLE ENFRENTAMIENTOS ADD CONSTRAINT RefCAT_FASES10 
    FOREIGN KEY (CVE_FASE)
    REFERENCES CAT_FASES(CVE_FASE)
;


-- 
-- TABLE: PRONOSTICOS 
--

ALTER TABLE PRONOSTICOS ADD CONSTRAINT RefUSUARIOS3 
    FOREIGN KEY (CVE_USUARIO)
    REFERENCES USUARIOS(CVE_USUARIO)
;

ALTER TABLE PRONOSTICOS ADD CONSTRAINT RefESTATUS4 
    FOREIGN KEY (CVE_ESTATUS)
    REFERENCES ESTATUS(CVE_ESTATUS)
;

ALTER TABLE PRONOSTICOS ADD CONSTRAINT RefENFRENTAMIENTOS6 
    FOREIGN KEY (CVE_ENFRENTAMIENTO)
    REFERENCES ENFRENTAMIENTOS(CVE_ENFRENTAMIENTO)
;

ALTER TABLE PRONOSTICOS ADD CONSTRAINT RefCAT_FASES12 
    FOREIGN KEY (CVE_FASE)
    REFERENCES CAT_FASES(CVE_FASE)
;


-- 
-- TABLE: USUARIOS 
--

ALTER TABLE USUARIOS ADD CONSTRAINT RefPAGO_ACCESO11 
    FOREIGN KEY (CVE_PAGO_ACCESO)
    REFERENCES PAGO_ACCESO(CVE_PAGO_ACCESO)
;


