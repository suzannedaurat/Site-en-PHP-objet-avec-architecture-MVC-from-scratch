<?php
Class Router
{
    function parseUrl()
        {
            $parseUrl = getUrl();
            $parseUrl = parse_url($parseUrl);
            $parseUrl = explode('/', trim($parseUrl['path'], '/'));
            return [
            'controller' => isset($parseUrl[3]) ? $parseUrl[3] : NULL,
            'method' => isset($parseUrl[4]) ? $parseUrl[4] : NULL,
            'param' => isset($parseUrl[5]) ? $parseUrl[5] : NULL
                ];
        }
}
?>