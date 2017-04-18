<?php

namespace OpenCubes\Common\Options;

interface OptionsAwareInterface
{

    public function clearOptions(): void;

    /**
     * @return array
     */
    public function getOptions(): array;

    /**
     * @param array $options
     * @param bool $clear
     */
    public function setOptions(array $options, bool $clear = true);

    /**
     * @param string $key
     * @param null $value
     */
    public function setOption(string $key, $value = null);

    /**
     * @param string $key
     * @return bool
     */
    public function hasOption(string $key): bool;

    /**
     * @param string $key
     * @return null
     */
    public function getOption(string $key);
}