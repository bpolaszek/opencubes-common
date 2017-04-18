<?php

namespace OpenCubes\Common\Options;

trait OptionsAwareTrait
{
    /**
     * @var array
     */
    private $options = [];

    public function clearOptions(): void
    {
        $this->options = [];
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     * @param bool $clear
     */
    public function setOptions(array $options, bool $clear = true)
    {
        if (true === $clear) {
            $this->clearOptions();
        }
        $this->options = $options;
    }

    /**
     * @param string $key
     * @param null $value
     */
    public function setOption(string $key, $value = null)
    {
        $this->options[$key] = $value;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function hasOption(string $key): bool
    {
        return array_key_exists($key, $this->options);
    }

    /**
     * @param string $key
     * @return null
     */
    public function getOption(string $key)
    {
        return $this->hasOption($key) ? $this->options[$key] : null;
    }

}