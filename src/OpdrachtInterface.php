<?php

namespace Drupal\opdracht;

/**
 * Interface for opdracht plugins.
 */
interface OpdrachtInterface {

  /**
   * Returns the translated plugin label.
   *
   * @return string
   *   The translated title.
   */
  public function label();

  /**
   * @return mixed
   */
  public function description();

  /**
   * @return mixed
   */
  public function url();

}
