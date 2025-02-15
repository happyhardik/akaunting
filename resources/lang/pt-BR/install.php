<?php

return [

    'next'                  => 'Próximo',
    'refresh'               => 'Atualizar',

    'steps' => [
        'requirements'      => 'Por favor, consulte o seu provedor de hospedagem para corrigir os erros!',
        'language'          => 'Passo 1/3 : Selecionar idioma',
        'database'          => 'Passo 2/3 : Configuração do Banco de Dados',
        'settings'          => 'Passo 3/3 : Detalhes da empresa e do administrador',
    ],

    'language' => [
        'select'            => 'Selecionar Idioma',
    ],

    'requirements' => [
        'enabled'           => ':feature precisa esta habilitado!',
        'disabled'          => ':feature precisa esta desabilitado!',
        'extension'         => 'Extensão :extension precisa ser instalado e carregado!',
        'directory'         => 'O diretório :directory precisa de permissão para escrita!',
        'executable'        => 'O arquivo executável do PHP CLI não está definido/funcionando ou sua versão não é :php_version ou superior! Por favor, peça à sua empresa de hospedagem que defina corretamente a variável de ambiente PHP_BINARY ou PHP_PATH.',
        'npm'               => '<b>Arquivos JavaScript ausentes!</b> <br><br><span>É preciso executar os comandos <em class="underline">npm install</em> e <em class="underline">npm run dev</em> .</span>', 
    ],

    'database' => [
        'hostname'          => 'Nome do servidor',
        'username'          => 'Nome de usuário',
        'password'          => 'Senha',
        'name'              => 'Banco de Dados',
    ],

    'settings' => [
        'company_name'      => 'Nome da empresa',
        'company_email'     => 'E-mail da empresa',
        'admin_email'       => 'E-mail do Admin',
        'admin_password'    => 'Senha do Admin',
    ],

    'error' => [
        'php_version'       => 'Erro: Peça ao seu provedor de hospedagem para usar PHP :php_version ou superior para HTTP e CLI.',
        'connection'        => 'Erro: Não foi possível conectar ao banco de dados! Certifique-se de que os detalhes estão corretos.',
    ],

    'update' => [
        'core'              => 'Uma nova versão do Nuaxa Network está disponível! Por favor, atualize sua instalação.',
        'module'            => 'Uma nova versão do :module está disponível! Por favor, atualize sua instalação.',
    ],
];
