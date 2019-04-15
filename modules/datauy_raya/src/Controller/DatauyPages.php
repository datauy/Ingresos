<?php
/**
 * @file
 * Contains \Drupal\ddjj_json\Controller\ddjj_jsonController.
 */

namespace Drupal\datauy_raya\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class DatauyPages extends ControllerBase {

  public function parte1() {
    $session = \Drupal::request()->getSession();
    $element = array(
      '#markup' => 'Hello, nandos: sexo '.$session->get('sexo', 'default').'. Ingresos: '.$session->get('ingreso', 'default'),
    );
    return $element;
  }
}

?>
