<?php

class ListaReservas {  
    /*
    private $data = json_decode(
        "data 1": {
            "oferta 1": [
                {"id":1,"name":"Pescador 1"},
                {"id":2,"name":"Pescador 2"}
            ],
            "oferta 2": [
                {"id":2,"name":"Pescador 1"}
            ],
        }, 
        "data 2": {
            "oferta 1": [
                {"id":1,"name":"Pescador 1"}
            ],
         }
    );
    */
    private $monthLabels = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");


    public function show() {
        $calendars = '<div style="cursor: pointer;">';

        $m = date('m');
        $y = date('y');
        $qtde_meses = 18;//1 ano e meio
        $calendars .= $this->geraTabs($m, $y, 18);

        $calendars .= '</div>';
        return $calendars;
    }

    public function geraTabs($mes_inicial, $ano_inicial, $qtde_meses){
        $tabs_labels = '<div class="tab">';

        $tabs_labels .= '<button id="tab_todos" class="tablinks" onclick="showTodos(event)"> <p class="tab_ano"><br></p><p class="tab_mes">Todos</p> </button>';

        $mes_inicial--;
        $label_ano = $ano_inicial;
        for ($i=0; $i < $qtde_meses; $i++) {
            $label_index = ($mes_inicial+$i)%12;

            $label_mes = $this->monthLabels[$label_index];
            if($i != 0 && $label_index==0){
                $label_ano++;
            }
            $label_mes_ano = $label_mes.'20'.$label_ano;
            $tabs_labels .= '<button class="tablinks" onclick="showMes(event, \''.$label_mes_ano.'\')"> <p class="tab_ano">20'.$label_ano.'</p><p class="tab_mes">'.$label_mes.'</p> </button>';
        }
        

        $tabs_labels .= '</div>';
        return $tabs_labels;
    }
}

?>