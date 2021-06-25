<?php 

//Isolamento de comportamento para reaproveitar em outras classes
trait MyTrait{

  public function hello(){
    return 'Hello, Antônio';
  }

  protected function test(){
    return 'test';
  }

}

trait MyTrait2{

public function showName($name){
  return 'Bem-Vindo, ' . $name;
}


public function hello(){
  return 'Hello Word 2';
}

}

Class Client{
  use MyTrait, Mytrait2{
    /*Tô defino que o método hello seje usado pelo "MyTrait2" do que do Método "MyTrait"*/
    MyTrait2::hello insteadof Mytrait;

    //para utilizar o "hello" do "MyTrait" damos outro nome chamado "helloMy" 
    MyTrait::hello as helloMy;

    //Abaixo estou modificando a visibilidade do método da trait Maytrait
    //Só consigo utilizar internamente na minha classe
    MyTrait::hello as private helloVisibilityChanged;
  }

  public function test (){

    //chamando e exibindo o método traits test
    print $this->test();
    return $this->helloVisibilityChanged();
  }

}

$pr = new Client();
print $pr->hello(); /// Método "hello" vindo da "MyTrait"
print '<br>';

//chama o metodo da trait pela classe Cliente
print $pr->helloMy();//Alias para o método "hello" da "MyTrait" 
print '<br>';
print $pr->showName("Madara Nagato");