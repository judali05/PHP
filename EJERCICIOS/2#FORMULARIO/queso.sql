create database solo;
use solo;

create table factura(
    n_factura int,
    fecha_fac date not null,
    primary key (n_factura)
);

create table producto (
    cod_prod varchar (10),
    desc_prod varchar(45) not null,
    precio_prod double not null,
    primary key (cod_prod)
);

create table fact_prod (
    factura_n_factura int,
    producto_cod_prod varchar(10),
    cantidad int (5) not null,
    primary key (factura_n_factura, producto_cod_prod),
    foreign key (factura_n_factura) references factura (n_factura),
    foreign key (producto_cod_prod) references producto (cod_prod) 
);

insert into factura 
values ('1','2023-07-9'),
('2','2023-07-9'),
('3','2023-07-10'),
('4','2023-07-10'),
('5','2023-07-10'),
('6','2023-07-11'),
('7','2023-07-11'),
('8','2023-07-12'),
('9','2023-07-12'),
('10','2023-07-12');

insert into producto 
values ('11','Queso tajado 1/4','3000'),
('12','Queso crema','3600'),
('13','Queso chedar media libra','5000'),
('14','Queso campesino libra','12000'),
('15','Queso con bocadillo','2300'),
('16','Queso tajado media libra','6000'),
('17','Queso entero','12000'),
('18','Queso parmesano','2000'),
('19','Queso de la costa','7000'),
('20','Cuajada','4000');

insert into fact_prod
values ('1','11','2'),
('2','13','1'),
('3','11','2'),
('3','12','1'),
('4','15','4'),
('4','12','2'),
('4','20','2'),
('5','16','2'),
('5','15','2'),
('6','11','3'),
('6','14','2'),
('6','13','1'),
('7','17','4'),
('7','19','3'),
('7','18','2'),
('7','15','4'),
('8','14','1'),
('8','16','2'),
('8','18','4'),
('8','13','3'),
('9','20','2'),
('9','14','5'),
('9','16','2'),
('9','17','2'),
('9','19','4'),
('10','20','2'),
('10','15','4'),
('10','11','1'),
('10','12','3'),
('10','16','2');