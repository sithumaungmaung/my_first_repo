<?php namespace Sithu\Testpack\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Testpack extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'testpack'; }
 
}