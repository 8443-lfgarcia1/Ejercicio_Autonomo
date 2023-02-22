<?php
class rectangulo extends figura implements formulas{
    private $variable_1, $variable_2;
    function __construct($variable_1, $variable_2)
    {
        $this->variable_1 = $variable_1;
        $this->variable_2 = $variable_2;
    }
    function get_variable_1()
    {
        return $this->variable_1;
    }
    function get_variable_2()
    {
        return $this->variable_2;
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
