
              create database ingreso;

              use ingreso;

              create table login(
                idusuario int (10),
                usuario varchar (20),
                contraseña varchar (20),
                correo varchar (20),
                direccion varchar (20),
                tipodeusuario varchar (20),
                primary key (idusuario)
              );


              create table registroventa(
                  iddelestadoP int(50),
                  tipoPropiedad varchar(50),
                  tipolistado text(50),
                  preciopropiedad varchar(50),
                  vistapropiedad varchar(50),
                  dormitorios varchar(50),
                  antiguedad varchar(50),
                  terrenos varchar(50),
                  ciudad varchar(50),
                  piso varchar(50),
                  longitud varchar(50),
                  latitud varchar(50),
                  caracteristica1 varchar(50),
                  caracteristica2 varchar(50),
                  caracteristica3 varchar(50),
                  caracteristica4 varchar(50),
                  caracteristica5 varchar(50),
                  cercania1 varchar(50),
                  cercania2 varchar(50),
                  cercania3 varchar(50),
                  cercania4 varchar(50),
                  cercania5 varchar(50),
                  primary key (iddelestadoP)

                );

              create table registroarriendo(
                  iddelestadoA int(50),
                  tipoarriendo varchar(50),
                  tipolistado text(50),
                  precioarriendo varchar(50),
                  vistaarriendo varchar(50),
                  dormitorios varchar(50),
                  antiguedad varchar(50),
                  terrenos varchar(50),
                  ciudad varchar(50),
                  piso varchar(50),
                  longitud varchar(50),
                  latitud varchar(50),
                  caracteristica1 varchar(50),
                  caracteristica2 varchar(50),
                  caracteristica3 varchar(50),
                  caracteristica4 varchar(50),
                  caracteristica5 varchar(50),
                  cercania1 varchar(50),
                  cercania2 varchar(50),
                  cercania3 varchar(50),
                  cercania4 varchar(50),
                  cercania5 varchar(50),
                  primary key (iddelestadoA)

                );