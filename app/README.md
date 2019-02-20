# CRUD-Controle de usuario com MySQL e PHP

A unica tabela no banco tem esta estrutura

CREATE TABLE `usuarios` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `nome` varchar(255) DEFAULT NULL,  
  `email` varchar(255) DEFAULT NULL,  
  PRIMARY KEY (`id`)  
)  
ENGINE=InnoDB  
DEFAULT CHARSET=utf8;  
