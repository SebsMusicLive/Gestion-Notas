CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,

    fyh_creacion DATE NULL,
    fyh_actualizacion DATE NULL,
    estado VARCHAR(11)
)ENGINE=InnoDB;

INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado)
VALUES ('Johan López', 'ADMINISTRADOR','admin@admin.com','12345678','2024-05-16 9:34:10','1');

CREATE TABLE roles (
    id_rol INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol VARCHAR(255) NOT NULL,

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
