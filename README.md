TweetSearch PHPSP+Locaweb
=========================

Introdução
----------
Aplicação desenvolvida para para apresentação no PHPSP + Localweb, evento da
Comunidade de Desenvolvedores PHP do Estado de São Paulo ocorrido no dia 8 
de novembro de 2014.

É uma aplicação simples desenvolvida com Zend Framework 2 que realiza a busca 
de tweets que contenham uma determinada hashtag informada pelo usuário através 
de um formulário e teve como objetivo introduzir os conceitos de desenvolvimento 
em PHP utilizando frameworks e desmistificar o fato de que os frameworks sejam
de difícil utilização e aprendizado

Os slides da palestra estão disponíveis em: http://pt.slideshare.net/pauloelr/introduo-a-frameworks

Instalação
-----------

Somente é necessário possuir o PHP 5.5 ou superior instalado para rodar a aplicação
Navegue até o diretório raiz desse repositório atraves da linha de comando e execute:
 
```
composer install
cd public
php -S localhost:8080
```

Feito isso a aplicação poderá ser acessada atraves da URL http://localhost:8080

Para que a busca de tweets funcione será necessário renomear o arquivo config/local.php.dist
para config/local.php e incluir nesse arquivo as chaves de acesso de uma aplicação no Twitter

Para criar uma aplicação no Twitter acesse http://dev.twitter.com