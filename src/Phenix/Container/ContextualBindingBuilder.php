<?php

namespace Phenix\Container;

use Phenix\Contracts\Container\ContextualBindingBuilder as ContextualBindingBuilderContract;

/**
 * Class ContextualBindingBuilder
 * @package Phenix\Container
 */
class ContextualBindingBuilder implements ContextualBindingBuilderContract
{
    /**
     * The underlying container instance.
     *
     * @var \Phenix\Container\Container
     */
    protected $container;

    /**
     * The concrete instance.
     *
     * @var string
     */
    protected $concrete;

    /**
     * Create a new contextual binding builder.
     *
     * @param \Phenix\Container\Container $container
     * @param string                      $concrete
     */
    public function __construct(Container $container, $concrete)
    {
        $this->concrete = $concrete;
        $this->container = $container;
    }

    /**
     * Define the abstract target that depends on the context.
     *
     * @param string $abstract
     *
     * @return $this
     */
    public function needs($abstract)
    {
        $this->needs = $abstract;

        return $this;
    }

    /**
     * Define the implementation for the contextual binding.
     *
     * @param \Closure|string $implementation
     */
    public function give($implementation)
    {
        $this->container->addContextualBinding($this->concrete, $this->needs, $implementation);
    }
}
