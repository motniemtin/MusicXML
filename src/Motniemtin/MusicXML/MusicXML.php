<?php
namespace Motniemtin\MusicXML;
class MusicXML{
  var $xml;
  function __construct($xmlPath){
    try{
      $this->xml=simplexml_load_string($note);
    }catch(Exception $e){
      throw new Exception("Error when load xml file..");
    }    
  }
  function makeJson(){
    
  }
}