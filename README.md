🐳 Projeto Docker Compose: Ambiente LAMP com PHP, MySQL e phpMyAdmin
====================================================================

Este repositório fornece uma configuração pronta para uso de um ambiente de desenvolvimento LAMP (Linux, Apache, MySQL e PHP) utilizando Docker e Docker Compose. É ideal para quem deseja testar aplicações PHP localmente sem a necessidade de instalação manual de servidores e bancos de dados.

🚀 Funcionalidades
------------------

*   **Apache 2 + PHP 8.2**: Servidor web com suporte a PHP.
    
*   **MySQL 8.0**: Banco de dados relacional.
    
*   **phpMyAdmin**: Interface gráfica para administração do MySQL.
    
*   **Volumes persistentes**: Dados do MySQL e arquivos do projeto são mantidos mesmo após a remoção dos containers.
    
*   **Rede isolada**: Comunicação segura entre os containers.
    

⚙️ Pré-requisitos
-----------------

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas:

*   Docker
    
*   Docker Compose
    
*   [Git](https://git-scm.com/)
    

🧩 Estrutura do Projeto
-----------------------

``` bash
├── docker-compose.yml   # Configuração dos containers
├── Dockerfile           # Personalizações para o container PHP
├── www/                 # Código-fonte da aplicação (diretório montado no Apache)
├── mysql-data/          # Dados persistentes do MySQL
└── .gitignore           # Arquivos a serem ignorados pelo Git
```

🛠️ Como Usar
-------------
1.  Clone o repositório:
   
``` bash
git clone https://github.com/silvio-swat/dio-docker-compose.gitcd dio-docker-compose
```

2.  Suba os containers:
   
``` bash
docker-compose up -d
```

   O comando acima irá:
  * Baixar as imagens necessárias.
        
  * Criar e iniciar os containers em segundo plano.
        
3.  Acesse os serviços:
    
    *   **Aplicação PHP**: [http://localhost:8080](http://localhost:8080)
        
    *   **phpMyAdmin**: [http://localhost:8081](http://localhost:8081)
        
    *   **Credenciais do MySQL:**
        
        *   **Usuário**: usuario
            
        *   **Senha**: senha
            
        *   **Banco de Dados**: meu\_banco
            
4. Para parar os containers:
```bash
docker-compose down
```
Este comando irá parar e remover os containers, mas os dados persistentes serão mantidos.

🧪 Testando a Instalação
------------------------

Crie um arquivo info.php dentro do diretório www/ com o seguinte conteúdo:
```php
<?php
phpinfo();
?>
```
Acesse [http://localhost:8080/info.php](http://localhost:8080/info.php) para verificar as informações do PHP.

🔧 Personalizações
------------------

*   **Extensões PHP**: Para adicionar extensões PHP adicionais, edite o arquivo Dockerfile e adicione as instruções necessárias.
    
*   **Variáveis de Ambiente**: Configure variáveis de ambiente no arquivo docker-compose.yml conforme necessário para sua aplicação.
    

🔒 Contribuindo
---------------

Contribuições são bem-vindas! Para contribuir:

1.  Faça um fork deste repositório.
    
2.  Crie uma branch para sua feature (git checkout -b feature/nova-feature).
    
3.  Faça commit das suas alterações (git commit -am 'Adiciona nova feature').
    
4.  Push para a branch (git push origin feature/nova-feature).
    
5.  Abra um Pull Request.
