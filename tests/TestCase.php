<?php

namespace JvrSolis\CollectionMacros\Test;

use ReflectionClass;
use PHPUnit\Framework\TestCase as BaseTestCase;
use JvrSolis\CollectionMacros\CollectionMacroServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * Test the setup of the service provider.
     *
     * @throws \ReflectionException
     */
    public function setUp()
    {
        $this->createDummyProvider()->register();
    }

    /**
     * Generate a dummy array macro service provider.
     *
     * @return \JvrSolis\CollectionMacros\CollectionMacroServiceProvider
     * @throws \ReflectionException
     */
    protected function createDummyProvider() : CollectionMacroServiceProvider
    {
        $reflectionClass = new ReflectionClass(CollectionMacroServiceProvider::class);

        return $reflectionClass->newInstanceWithoutConstructor();
    }
}