<?php

namespace KanataPlugin\Traits;

use KanataSdk\Response;

trait PluginsTrait
{
    public function getPlugins(array $params = []): Response
    {
        $query = '';
        if (!empty($params)) {
            $query = '?' . http_build_query($params);
        }

        return $this->get(
            url: $this->options['api-url'] . '/plugins' . $query,
            procedure: 'get-plugins',
        );
    }
}
