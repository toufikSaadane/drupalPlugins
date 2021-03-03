<?php

namespace Drupal\opdracht\Plugin\Opdracht;

use Drupal\opdracht\OpdrachtPluginBase;

/**
 * Plugin implementation of the opdracht.
 *
 * @Opdracht(
 *   id = "opdracht",
 *   label = @Translation("opdracht"),
 *   description = @Translation("opdracht description.")
 *
 * )
 */
class Opdracht extends OpdrachtPluginBase {


  public function description()
  {
    return "";
  }

  public function getUrl()
  {
    $config = \Drupal::config('opdracht.opdracht')->get('opdracht_select_form');
    $camelCaseArray = [];
    if ($config == "Uppercase") {
      foreach (explode("/", parent::url()) as $item) {
        $camelCaseArray[] = ucfirst($item);
      }
      return implode("", $camelCaseArray);
    } elseif ($config == "Reverse the words") {
      foreach (explode("/", parent::url()) as $item) {
        $camelCaseArray[] = strrev($item);
      }
      return implode(" ", $camelCaseArray);
    }

  }


}
