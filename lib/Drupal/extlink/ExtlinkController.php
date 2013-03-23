<?php

/**
 *  @file
 *    Contains Drupal/extlink/ExtlinkController.
 */

namespace Drupal\extlink;

class ExtlinkController {

  public function settings() {
    return drupal_get_form('extlink_settings');
  }
}