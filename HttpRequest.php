<?php


class HttpRequest
{
    /**
     * @param string $param
     *
     * @return null|string
     */
    public function getParam(string $param): ?string
    {
        $param =  $_GET[$param] ?? $_POST[$param] ?? null;

        return htmlentities($param, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
}