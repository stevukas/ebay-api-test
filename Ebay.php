<?php

namespace App\API;

class Ebay extends BaseAPI
{
  private $baseUrl = 'https://api.ebay.com/sell/';
  private $endPoint = null;
  private $response = [];
  private $payload = [];
  
  public function __construct($data) {
      $this->payload = $data;
  }

    public function setEndPoint($endPoint) {
      $this->endPoint = $endPoint;
  }
  
  public function inventory_item($sku){
      $this->endPoint = "inventory/v1/inventory_item/{$sku}";
  }
  
}
