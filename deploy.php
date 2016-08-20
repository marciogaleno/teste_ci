<?php

require 'recipe/composer.php';

//fcfiZLa#P7f/6XXxxf
server('producao', 'localhost')
	->user('root')
	->stage('producao')
    ->env('deploy_path', '/var/www/html/fiscalizacao_transito');

set('repository', 'https://github.com/marciovennan/teste_ci.git');

