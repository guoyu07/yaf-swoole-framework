<?php
namespace ImReworks;

define('YAF_ERR_CONFIG_NOT_FOUND', 912);

class ConfigNotFound extends Yaf_Exception 
{
    protected string $code = YAF_ERR_CONFIG_NOT_FOUND;
}


