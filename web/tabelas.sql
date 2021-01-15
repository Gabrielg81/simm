create TABLE IF NOT EXISTS cadpro (
    proId varchar(100),
    nome varchar(50),
    crm int,
    especialidades text,
    
    PRIMARY KEY (proId)
);

create TABLE IF NOT EXISTS caddis (
    proId varchar(100),
    dat varchar (20),
    hentrada varchar(20),
    hsaida varchar(20),

    PRIMARY KEY (proId)
);

create TABLE IF NOT EXISTS cadMarc (
    id int AUTO_INCREMENT,
    nome varchar(50),
    cpf int (11),
    endereco varchar (100),
    telefone varchar(15),
    especialista varchar(50),
    hMarcada varchar(10),
    
    PRIMARY KEY (id)
);
