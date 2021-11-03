/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     03-11-2021 13:04:32                          */
/*==============================================================*/


/*==============================================================*/
/* Table: ASIGNATURAS                                           */
/*==============================================================*/
create table ASIGNATURAS 
(
   ASIGNATURA_ID        integer                        not null AUTO_INCREMENT,
   PROFESOR_ID          integer                        not null,
   ATTRIBUTE_13         char(30)                       not null,
   constraint PK_ASIGNATURAS primary key (ASIGNATURA_ID)
);

/*==============================================================*/
/* Index: ASIGNATURAS_PK                                        */
/*==============================================================*/
create unique index ASIGNATURAS_PK on ASIGNATURAS (
ASIGNATURA_ID ASC
);

/*==============================================================*/
/* Index: EJERCER_FK                                            */
/*==============================================================*/
create index EJERCER_FK on ASIGNATURAS (
PROFESOR_ID ASC
);

/*==============================================================*/
/* Table: CURSOS                                                */
/*==============================================================*/
create table CURSOS 
(
   CURSO_ID             integer                        not null AUTO_INCREMENT,
   NOMBRE_CURS          varchar(5)                     not null,
   constraint PK_CURSOS primary key (CURSO_ID)
);

/*==============================================================*/
/* Index: CURSOS_PK                                             */
/*==============================================================*/
create unique index CURSOS_PK on CURSOS (
CURSO_ID ASC
);

/*==============================================================*/
/* Table: ESTUDIANTES                                           */
/*==============================================================*/
create table ESTUDIANTES 
(
   ESTUDIANTE_ID        integer                        not null AUTO_INCREMENT,
   CURSO_ID             integer                        not null,
   NOMBRE_EST           char(30)                       not null,
   APELLIDO1_EST        char(20)                       not null,
   APELLIDO2_EST        char(20)                       not null,
   RUT_EST              varchar(20)                    not null,
   CORREO_EST           varchar(50)                    not null,
   CONTRASENA_EST       varchar(50)                    not null,
   TIPO_EST             varchar(50)                    not null,
   constraint PK_ESTUDIANTES primary key (ESTUDIANTE_ID)
);

/*==============================================================*/
/* Index: ESTUDIANTES_PK                                        */
/*==============================================================*/
create unique index ESTUDIANTES_PK on ESTUDIANTES (
ESTUDIANTE_ID ASC
);

/*==============================================================*/
/* Index: PERTENECER_FK                                         */
/*==============================================================*/
create index PERTENECER_FK on ESTUDIANTES (
CURSO_ID ASC
);

/*==============================================================*/
/* Table: EST_ASIG                                              */
/*==============================================================*/
create table EST_ASIG 
(
   EST_ASIG_ID          integer                        not null AUTO_INCREMENT,
   ASIGNATURA_ID        integer                        not null,
   ESTUDIANTE_ID        integer                        not null,
   NOTAS                float(2)                       not null,
   constraint PK_EST_ASIG primary key (EST_ASIG_ID)
);

/*==============================================================*/
/* Index: EST_ASIG_PK                                           */
/*==============================================================*/
create unique index EST_ASIG_PK on EST_ASIG (
EST_ASIG_ID ASC
);

/*==============================================================*/
/* Index: ESTUDIAR2_FK                                          */
/*==============================================================*/
create index ESTUDIAR2_FK on EST_ASIG (
ESTUDIANTE_ID ASC
);

/*==============================================================*/
/* Index: ESTUDIAR1_FK                                          */
/*==============================================================*/
create index ESTUDIAR1_FK on EST_ASIG (
ASIGNATURA_ID ASC
);

/*==============================================================*/
/* Table: OBSERVACIONES                                         */
/*==============================================================*/
create table OBSERVACIONES 
(
   OBSERVACIONES_ID     integer                        not null AUTO_INCREMENT,
   ESTUDIANTE_ID        integer                        not null,
   PROFESOR_ID          integer                        not null,
   ATTRIBUTE_17         varchar(100)                   not null,
   FECHA_OBS            date                           not null,
   INDICADOR            varchar(1)                     not null,
   constraint PK_OBSERVACIONES primary key (OBSERVACIONES_ID)
);

/*==============================================================*/
/* Index: OBSERVACIONES_PK                                      */
/*==============================================================*/
create unique index OBSERVACIONES_PK on OBSERVACIONES (
OBSERVACIONES_ID ASC
);

/*==============================================================*/
/* Index: RECIBE_FK                                             */
/*==============================================================*/
create index RECIBE_FK on OBSERVACIONES (
ESTUDIANTE_ID ASC
);

/*==============================================================*/
/* Index: ANOTAR_FK                                             */
/*==============================================================*/
create index ANOTAR_FK on OBSERVACIONES (
PROFESOR_ID ASC
);

/*==============================================================*/
/* Table: PROFESORES                                            */
/*==============================================================*/
create table PROFESORES 
(
   PROFESOR_ID          integer                        not null AUTO_INCREMENT,
   NOMBRE_PROF          char(30)                       not null,
   APELLIDO1_PROF       char(20)                       not null,
   APELLIDO2_PROF       char(20)                       not null,
   RUT_PROF             varchar(20)                    not null,
   CORREO_PROF          varchar(50)                    not null,
   CONTRASENA_PROF      varchar(50)                    not null,
   TIPO_PROF            varchar(50)                    not null,
   constraint PK_PROFESORES primary key (PROFESOR_ID)
);

/*==============================================================*/
/* Index: PROFESORES_PK                                         */
/*==============================================================*/
create unique index PROFESORES_PK on PROFESORES (
PROFESOR_ID ASC
);