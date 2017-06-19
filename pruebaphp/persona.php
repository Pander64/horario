<?php 
   /**
   * 
   */

   class persona
   {

   	public $nombre;
   	public $estatura;

   	public function mostrar()
   	 {
   		echo $this->nombre .' mide '. $this->estatura .'cm.';
   	 }
   }
 ?>