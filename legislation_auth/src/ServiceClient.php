<?php

namespace Drupal\legislation_auth;

/**
 * Service Client
 */
class ServiceClient
{
    function get_primary_leg()
    {
        $uri = 'www.legislation.gov.uk/primary/data.feed';
        $request = \Drupal::httpClient();
        $request_new = $request->get($uri);
        $response_message = $request_new->getBody()->getContents();
        
        return $response_message;

    }

}