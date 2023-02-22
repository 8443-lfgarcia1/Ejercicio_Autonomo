<?php
class triangulo extends figura implements formulas{
	private $variable_1, $variable_2, $variable_3;
    function __construct($variable_1, $variable_2, $variable_3)
    {
        $this->variable_1= $variable_1;
        $this->variable_2 = $variable_2;
        $this->variable_2 = $variable_3;
    }
    public function get_variable_1()
    {
        return $this->variable_1;
    }
    public function get_variable_2()
    {
        return $this->variable_2;
    }
    public function get_variable_3()
    {
        return $this->variable_3;
    }
    //----------
    function area(){

    }
    function perimetro(){

    }
    public function GetArea(){

    }
    public function GetPerimetro(){

    }
    public function GetTipo(){

    }

}
?>

