USE banco_dany;

CREATE TABLE cadastro (
    id_cad int not null AUTO_INCREMENT,
    data_compra date,
    cupom varchar (30),
    nome varchar (30),
    whatsapp double,
    informa varchar (4),
    pesquisa int,
    PRIMARY KEY (id_cad)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO cadastro (cupom) VALUES ('ab123cd'),('ab456cd'),('ab789cd'),('ab101cd'),('ab112cd'); 

/* comments */