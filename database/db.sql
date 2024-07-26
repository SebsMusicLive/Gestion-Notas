CREATE TABLE roles (
    id_rol INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol VARCHAR(255) NOT NULL UNIQUE KEY,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
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
INSERT INTO roles (nombre_rol,fyh_creacion,estado)
VALUES ('DOCENTE','2024-05-19 1:22:10','1');


CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rol_id INT(11) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(rol_id) REFERENCES roles(id_rol) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO usuarios (rol_id,email,password,fyh_creacion,estado)
VALUES ('1','admin@admin.com','$2y$10$zSJ99LWaKh32rsWib9z9suDd1yFQBDvyNRaq.XMVkl7x9Szk/mdyi','2024-05-16 9:34:10','1');
INSERT INTO usuarios (rol_id,email,password,fyh_creacion,estado)
VALUES ('5','Rolan@docente.com','$2y$10$zSJ99LWaKh32rsWib9z9suDd1yFQBDvyNRaq.XMVkl7x9Szk/mdyi','2024-05-16 9:34:10','1');

CREATE TABLE configuracion_instituciones (
    id_config_institucion INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_institucion VARCHAR(255) NOT NULL,
    logo VARCHAR(255) NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(100) NULL,
    celular VARCHAR(100) NULL,
    correo VARCHAR(100) NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO configuracion_instituciones (nombre_institucion,logo,direccion,telefono,celular,correo,fyh_creacion,estado)
VALUES ('Johan Web School', 'logo.jpg','Los Patios Cl23a#10-82','5847482','3147844269','Johan.ws.edu.co','2024-05-16 9:34:10','1');

CREATE TABLE personas (
    id_persona                  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id                  INT(11) NOT NULL,
    nombres                 VARCHAR(50) NOT NULL,
    apellidos               VARCHAR(50) NOT NULL,
    documento_identidad     VARCHAR(20) NOT NULL,
    fecha_nacimiento        VARCHAR(20) NOT NULL,
    profesion               VARCHAR(50) NOT NULL,
    direccion               VARCHAR(255) NOT NULL,
    celular                 VARCHAR(20) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(usuario_id) REFERENCES usuarios(id_usuario) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO personas (usuario_id,nombres,apellidos,documento_identidad,fecha_nacimiento,profesion,direccion,celular,fyh_creacion,estado)
VALUES ('1','Johan Sebastián','López Ortega','1005028827','02/09/2003','LICENCIADO EN EDUCACION','CL 23A #10-82 PATIO ANTIGUO','3147844269','2024-05-16 9:34:10','1');
INSERT INTO personas (usuario_id,nombres,apellidos,documento_identidad,fecha_nacimiento,profesion,direccion,celular,fyh_creacion,estado)
VALUES ('2','Rolando Alberto','Mora Riaño','526781451','02/04/2000','LICENCIADO EN INFORMATICA','CL 8 #13-10 Centro','3014875269','2024-05-16 9:34:10','1');

CREATE TABLE administrativos (
    id_administrativo           INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id                  INT(11) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(persona_id) REFERENCES personas(id_persona) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO administrativos (persona_id,fyh_creacion,estado)
VALUES ('1','2024-05-16 9:34:10','1');

CREATE TABLE docentes (
    id_docente                  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id                  INT(11) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(persona_id) REFERENCES personas(id_persona) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO docentes (persona_id,fyh_creacion,estado)
VALUES ('2','2024-05-16 9:34:10','1');

CREATE TABLE estudiantes (
    id_estudiante               INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id                  INT(11) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(persona_id) REFERENCES personas(id_persona) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

CREATE TABLE ppffs (
    id_ppff                  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id                  INT(11) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(persona_id) REFERENCES personas(id_persona) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

CREATE TABLE gestiones (
    id_gestion INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion VARCHAR(255) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO gestiones (gestion,fyh_creacion,estado)
VALUES ('GESTION 2024','2024-05-16 9:34:10','1');

CREATE TABLE niveles (
    id_nivel INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion_id INT(11) NOT NULL,
    nivel VARCHAR(255) NOT NULL,
    jornada VARCHAR(255) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(gestion_id) REFERENCES gestiones(id_gestion) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO niveles (gestion_id,nivel,jornada,fyh_creacion,estado)
VALUES ('1', 'INICIAL','MAÑANA','2024-05-16 9:34:10','1');

CREATE TABLE grados (
    id_grado INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nivel_id INT(11) NOT NULL,
    curso VARCHAR(255) NOT NULL,
    grupo VARCHAR(255) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11),

    FOREIGN KEY(nivel_id) REFERENCES niveles(id_nivel) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO grados (nivel_id,curso,grupo,fyh_creacion,estado)
VALUES ('1', 'PREJARDIN','A','2024-05-16 9:34:10','1');

CREATE TABLE materias (
    id_materia INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    materia VARCHAR(255) NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO materias (materia,fyh_creacion,estado)
VALUES ('MATEMATICA','2024-05-16 9:34:10','1');

