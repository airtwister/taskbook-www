<?php

namespace Exceptions;

class BadUrlException extends \Exception
{
    protected $code = 404;
}