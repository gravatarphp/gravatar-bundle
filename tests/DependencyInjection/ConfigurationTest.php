<?php

declare(strict_types=1);

namespace Gravatar\GravatarBundle\Tests\DependencyInjection;

use Gravatar\GravatarBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Exception\InvalidTypeException;
use Symfony\Component\Config\Definition\Processor;

final class ConfigurationTest extends TestCase
{
    /**
     * @test
     */
    public function useEmptyConfig(): void
    {
        $config = $this->process([]);
        $this->assertSame([], $config);
        $config = $this->process(['gravatarphp' => null]);
        $this->assertSame([], $config);

        $config = $this->process(['gravatarphp' => []]);
        $this->assertSame([], $config);
    }

    /**
     * @test
     */
    public function useSecureCorrectly(): void
    {
        $config = $this->process(['gravatarphp' => ['secure' => true]]);
        $this->assertSame(['secure' => true], $config);
    }

    /**
     * @test
     */
    public function useSecureWithNonBoolean(): void
    {
        $this->expectException(InvalidTypeException::class);
        $this->expectErrorMessage('Invalid type for path "gravatar.secure". Expected "bool", but got "string"');
        $this->process(['gravatarphp' => ['secure' => '']]);
    }

    /**
     * @test
     */
    public function useDefaultsCorrectly(): void
    {
        $config = $this->process(['gravatarphp' => ['defaults' => []]]);
        $this->assertSame(['defaults' => []], $config);

        $config = $this->process(['gravatarphp' => ['defaults' => ['whatever']]]);
        $this->assertSame(['defaults' => ['whatever']], $config);
    }

    /**
     * Processes an array of configurations and returns a compiled version.
     *
     * @param array $configs An array of raw configurations
     * @return array A normalized array
     */
    private function process(array $configs): array
    {
        $processor = new Processor();
        return $processor->processConfiguration(new Configuration(), $configs);
    }
}
