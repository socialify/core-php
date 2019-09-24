<?php
namespace Socialify\Core;

class Data extends Core {

  protected $fields = [];

  private $data = [];

  final function __construct(Client $client, array $data = []) {
    parent::__construct($client);
    $this->initialize();
  }

  protected function initialize() {
    //
  }

  final public function __get($name) {
    if (!array_key_exists($name, $this->data)) return NULL;
    return $this->data[$name];
  }

  final public function __set($name, $value) {
    $this->data[$name] = $value;
  }

}
