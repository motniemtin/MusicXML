<?php
namespace Motniemtin\MusicXML;
class MusicXML{
  var $xml;
  function __construct($xmlPath){
    try{
      $this->xml=simplexml_load_string($note);
      $this->makeJson();
    }catch(Exception $e){
      throw new Exception("Error when load xml file..");
    }    
  }
  function makeJson(){
    print_r($this->xml);
  }
}