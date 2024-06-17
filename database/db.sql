CREATE TABLE roles (
    id_rol INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol VARCHAR(255) NOT NULL UNIQUE KEY,

    fyh_creacion DATE NULL,
    fyh_actualizacion DATE NULL,
    estado VARCHAR(11)
)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('ADMINISTRADOR','2024-05-19 1:22:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('DIRECTOR ACADÉMICO','2024-05-19 1:22:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('DIRECTOR ADMINISTRATIVO','2024-05-19 1:22:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('CONTADOR','2024-05-19 1:22:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('SECRETARIA','2024-05-19 1:22:10','1');


CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    rol_id INT(11) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,

    fyh_creacion DATE NULL,
    fyh_actualizacion DATE NULL,
    estado VARCHAR(11),

    FOREIGN KEY(rol_id) REFERENCES roles(id_rol) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO usuarios (nombres,rol_id,email,password,fyh_creacion,estado)
VALUES ('Johan López', '1','admin@admin.com','$2y$10$zSJ99LWaKh32rsWib9z9suDd1yFQBDvyNRaq.XMVkl7x9Szk/mdyi','2024-05-16 9:34:10','1');

CREATE TABLE configuracion_instituciones (
    id_config_institucion INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_institucion VARCHAR(255) NOT NULL,
    logo VARCHAR(255) NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(100) NULL,
    celular VARCHAR(100) NULL,
    correo VARCHAR(100) NULL,

    fyh_creacion DATE NULL,
    fyh_actualizacion DATE NULL,
    estado VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO configuracion_instituciones (nombre_institucion,logo,direccion,telefono,celular,correo,fyh_creacion,estado)
VALUES ('Johan Web School', 'logo.jpg','Los Patios Cl23a#10-82','5847482','3147844269','Johan.ws.edu.co','2024-05-16 9:34:10','1');

CREATE TABLE gestiones (
    id_gestion INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion VARCHAR(255) NOT NULL,

    fyh_creacion DATE NULL,
    fyh_actualizacion DATE NULL,
    estado VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO gestiones (gestion,fyh_creacion,estado)
VALUES ('GESTION 2024','2024-05-16 9:34:10','1');
