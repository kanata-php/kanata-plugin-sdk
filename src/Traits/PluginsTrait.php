<?php

namespace KanataPlugin\Traits;

use KanataSdk\Response;

trait PluginsTrait
{
    /**
     * 2 parameters possible:
     *   - plugin string - get a specific plugin by the slug
     *   - search string - search plugins by full-text search
     *
     * @param array $params
     * @return Response
     */
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
