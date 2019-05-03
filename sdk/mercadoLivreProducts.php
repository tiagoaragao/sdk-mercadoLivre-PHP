<?php

class mercadoLivreProducts extends mercadoLivreActions{

    private $token; 
    
    public function __set($atrib, $value) {
        
        $this->$atrib = $value;
    }

    public function __get($atrib) {

        return $this->$atrib;
    }

    /**
     * Devolve um array com os dados relacionados ao seu usuário
     * 
     * @return array
    */

    public function getConsultUser() {
    
        $params = array("access_token"=>$this->token);

        return $this->get("/users/me",$params);        
    }

    /**
     * Devolve um array com os dados publico relacionados ao id do usuário informado
     * 
     * @param string $id
     * @return array
    */

    public function getCheckUserIdPublic($id) {

        return $this->get("/users/".$id."");        
    }

    /**
     * Devolve um array com os dados privado relacionados ao id do usuário informado
     * 
     * @param string $id
     * @return array
    */

    public function getCheckUserIdPrivate($id) {

        $params = array("access_token"=>$this->token);

        return $this->get("/users/".$id."",$params);        
    }
}