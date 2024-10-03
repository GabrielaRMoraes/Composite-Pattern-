<?php

// Classe delete 
// Essa classe provê meios para manipulação de uma instrução de DELETE no BD

final class TSqlDelete extends TSqlInstruction{

    // método getInstuction
    // retorna a instrução de Delete de string

    public function getInstruction(){
        // monta a string  do DELETE
        $this->sql = "DELETE FROM {$this->entity}";

        // retorna a claussula WHERE do objeto $this->criteria
        if($this->criteria){
            $expression = $this->criteria->dumb();

            if($expression){
                $this->sql .= 'WHERE' . $expression;
            }

            return $this->sql;
        }
    }
}

?>