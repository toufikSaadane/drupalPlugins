<?php

namespace Drupal\opdracht\Annotation;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Defines opdracht annotation object.
 *
 * @Annotation
 */
class Opdracht extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the plugin.
   *
   * @var Translation
   *
   * @ingroup plugin_translatable
   */
  public $title;

  /**
   * The description of the plugin.
   *
   * @var Translation
   *
   * @ingroup plugin_translatable
   */
  public $description;

  /**
   * get The url
   *
   * @var Translation
   */
  public $url;

}
