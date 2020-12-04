<?php

return [
    'config_dir'  => 'novum.burger',
    'namespace'   => 'NovumBurger',
    'protocol'    => isset($_SERVER['IS_DEVEL']) ? 'http' : 'https',
    'live_domain' => 'burger.demo.novum.nu',
    'dev_domain'  => 'burger.innovatieapp.nl',
    'test_domain' => 'burger.test.demo.novum.nu',
];
