create table questions (
    id_question int AUTO_INCREMENT,
    title varchar(200) not null,
    theme varchar(20) not null,
    text text not null,
    PRIMARY KEY(id_question)
)