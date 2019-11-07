<?php

namespace Drupal\legislation_auth\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\legislation_auth\ServiceClient;

/**
 * Defines legislation_Controller class.
 */

class legislation_Controller extends ControllerBase{


	public function show_link() {

		$service_client = new ServiceClient();
		$response_data = $service_client->get_primary_leg();

		return [
            '#type' => 'markup',
            '#markup' =>  $response_data,
        ];
    }
}




