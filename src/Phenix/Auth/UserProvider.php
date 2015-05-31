<?php

namespace Phenix\Auth;

use Phenix\Contracts\Auth\UserProvider as UserProviderInterface;

/**
 * Class UserProvider
 * @package Phenix\Auth
 */
class UserProvider implements UserProviderInterface {

    /**
     * @return string
     */
    public function getName()
    {
        return 'Alexander';
    }
}