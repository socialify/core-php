<?php
namespace Socialify\Core;

class Core {

  /**
   * API Client Instance
   *
   * @var Client
   */
  private $_client;

  function __construct(Client $client) {
    $this->_client = &$client;
  }

  final public function client() {
    return $this->_client;
  }

}
