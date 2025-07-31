<?php

namespace Deployer;

require 'recipe/common.php';

set('application', 'zulip-tooling');
set('repository', 'git@github.com:Cubiso/cot-explorer.git');
set('default_stage', 'production');
set('keep_releases', 3);

host('tak.provisor.app')
    ->set('hostname', 'tak.provisor.app')
    ->set('remote_user', 'jakob')
    ->set('branch', 'main')
    ->set('deploy_path', '/srv/cot-explorer');
