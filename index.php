// C R U D
// Create > Criar um novo repositório, insere dados ultilizados a palavras reservadas INSERT do SQL.
// Read > Lê os dados do banco, pega informações ultilizadas a palavras reservada SELECT do SQL.
// Update > Atualiza dados existentes, sobreescrevendo informações com a palavra reservada UPDATE do SQL.
// Delete > Apaga informações existentes (Para sempre), ultilizando a palavra reservada DELETE do SQL.

/*
* No SQL existem várias operações que podem ser feitas, é possível realizar verificações e operações 
* é possível realizar JOINS, que são consultas e múltiplas tabelas, verificando dados nos processos.
* Ao final das consultas ainda podemos determinar parâmetros, como limite de registros e outros.
*/

/*
* Crie sua tabela de usuários com a seguinte query:
*
* CREATE TABLE 'users' (      
* 'id' int(9) NOT NULL,
* 'fname' varchar(255) COLLATE uft8_unicode_cdi DEFAULT NULL,
* 'lname' varchar(255) COLLATE uft8_unicode_cdi DEFAULT NULL,
* 'email' varchar(255) COLLATE uft8_unicode_cdi NOT NULL,
* 'wrong_longins' int(9) NOT NULL DEFAULT '0',
* 'password' varchat(255) COLLATE uft8_unicode_ci NOT NULL, 
* 'use_role' int(9) NOT NULL DEFAULT '0',
* 'confirmed' tinyint(1) NOT NULL DEFAULT '0',
* 'confirme_code' varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
* ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
*
*/


/********** PROCURA DADOS DA TABELA **********/

/********** INSERÇÃO DE DADOS EM UMA TABELA **********/

/********** ATUALIZAÇÃO DADOS DE UMA TABELA **********/
