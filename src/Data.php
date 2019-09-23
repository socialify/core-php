<?php
namespace Socialify\Core;

class Data {

  /**
   * API Client Instance
   *
   * @var Api
   */
  private $api;

  protected $fields = [];

  final function __construct(Api $api, array $data = []) {
    $this->api = &$api;
    $this->initialize();
  }

  protected function initialize() {
    //
  }

}
