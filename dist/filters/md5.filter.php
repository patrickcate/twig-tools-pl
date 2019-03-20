<?php

/**
 * @file
 * MD5 Twig filter.
 */

$filter = new Twig_SimpleFilter('md5', function ($value) {
  return md5(strval($value));
});
