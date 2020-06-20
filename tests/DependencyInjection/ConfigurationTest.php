<?php

declare(strict_types=1);

namespace Gravatar\GravatarBundle\Tests\DependencyInjection;

use Gravatar\GravatarBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
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
