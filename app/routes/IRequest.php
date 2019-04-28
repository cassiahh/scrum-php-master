<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 22:40
 * From: https://medium.com/the-andela-way/how-to-build-a-basic-server-side-routing-system-in-php-e52e613cf241
 */

interface IRequest
{
    public function getBody();
}