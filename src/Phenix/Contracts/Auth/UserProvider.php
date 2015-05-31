<?php

namespace Phenix\Contracts\Auth;

/**
 * Interface UserProvider
 * @package Phenix\Contracts\Auth
 */
interface UserProvider {

    /**
     * @return string
     */
    public function getName();
}