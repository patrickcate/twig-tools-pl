<?php

/**
 * @file
 * JSON Decode Twig filter.
 */

$filter = new Twig_SimpleFilter('json_decode', function ($value, $assoc = FALSE) {
  return json_decode($value, $assoc);
});
