<?php
namespace Deployer;

require 'recipe/composer.php';
// デプロイ先
server('ci-test', '13.231.188.142', 22)
    ->user('ec2-user')
    ->identityFile()
    ->forwardAgent()
    ->env('deploy_path', '~/test/');
set('ssh_type', 'native');
// リポジトリ
set('repository', 'https://github.com/zonotown/circle-ci-test-zono.git');
