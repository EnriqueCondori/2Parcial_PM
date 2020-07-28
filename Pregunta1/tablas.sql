create table persona (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
fecha_nac date,
primary key(ci)
);

INSERT INTO persona VALUES ('9199600','Enrique','Condori','1996-02-22');
INSERT INTO persona VALUES ('2256530','Alvaro','Valencio','1996-02-22');
INSERT INTO persona VALUES ('3789513','Ricardo','Conde','1980-09-20');

create table usuario (
ci varchar(10),
numero integer
PRIMARY key(ci)
);

INSERT INTO usuario VALUES ('9199600','696666');
INSERT INTO usuario VALUES ('2256530','775552');




-------------------------------
base de datos= flujo
--------FLUJO----------
--// proceso
create table proceso (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSiguiente varchar(3),
tipo varchar(2),
codRol varchar(2),
pantalla varchar(20)
);

create table procesoCon (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSi varchar(3),
codProcesoNo varchar(3)
);


insert into proceso  values ('F1','P1','P2','I','U','presentarse.php');
insert into proceso  values ('F1','P2',null,'C','E','lineaentel.php');
insert into proceso  values ('F1','P3','P5','P','E','lineatelefonica.php');
insert into proceso  values ('F1','P4','P5','P','E','datospersonales.php');
insert into proceso  values ('F1','P5','P6','P','U','planes.php');
insert into proceso  values ('F1','P6','P7','P','E','validapago.php');
insert into proceso  values ('F1','P7','P8','P','U','seleccionmodelo.php');


insert into procesoCon values('F1','P2','P3','P4');