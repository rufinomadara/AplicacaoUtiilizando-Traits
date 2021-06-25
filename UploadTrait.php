<?php

//isolando o comportamento de UploadTrait
trait UploadTrait{

  public function doUpload($file){
    return true;
  }


}

//compartilhando este compartamento da classe UploadTrait com as classes Product e Profile

class Product {
  //todo comportamento da classe UploadTrait faz parte da classe Product
  use UploadTrait;
}

class Profile {
  use UploadTrait;
}

//instanciando Product para acesso
$p = new Product();
//exibindo o comportamento doUpload por meio do instanciamento
print $p->doUpload('arquivo...');

print '<br>';

$pr = new Profile();
print $pr->doUpload('arquivo2....');