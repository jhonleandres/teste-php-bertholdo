<?php 

class address {

    public function get_address($cep)
    {

        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";
    
        $data = simplexml_load_file($url);

        return $data;

    }

}

 ?>