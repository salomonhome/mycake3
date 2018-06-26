<?php
   namespace App\Controller;
   use App\Controller\AppController;
   
   class ProductsController extends AppController{
      public function view(){
         $this->set('Name','Hari');
         $this->set('Age','25');
         $this->set('Qualification','Mtech');
      }
   }
?>