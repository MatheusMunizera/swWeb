create table questions (
    id_question int AUTO_INCREMENT,
    title varchar(200) not null,
    theme varchar(20) not null,
    id_user int not null,
    text text not null,
    PRIMARY KEY(id_question)
)

create table answers (
    id_answer int AUTO_INCREMENT,
    id_question int not null,
    id_user int not null,
    text text not null,
    PRIMARY KEY(id_answer)
)

create table users (
    id_user int AUTO_INCREMENT not null,
    username varchar(12) not null,
    email varchar(100) not null,
    password varchar(8) not null,
    PRIMARY KEY(id_user)
)