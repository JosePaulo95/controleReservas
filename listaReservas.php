<?php
header("Content-Type: text/html;  charset=ISO-8859-1",true);

class ListaReservas {
    private $monthLabels = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
    private $myJSON;

    public function show($poder) {
        echo $poder;
        $this->myJSON = json_decode('
            {"Jan2019":
                {
                    "2019-01-12":{
                        "oferta1":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        },
                        "oferta2":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        }
                    },
                    "2019-01-13":{
                        "oferta1":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        },
                        "oferta2":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        }
                    }
                },
            "Set2019":
                {
                    "2019-07-12":{
                        "oferta1":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        },
                        "oferta2":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        }
                    },
                    "2019-07-13":{
                        "oferta1":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        },
                        "oferta2":{
                            "cliente1": {"nome":"Joao", "vagas":"2"},
                            "cliente2": {"nome":"Maria", "vagas":"6152"}
                        }
                    }
                }
            }
        ');
        //$this->myJSON = json_decode($poder);
        $calendars = '<div style="cursor: pointer;">';

        $m = date('m');
        $y = date('y');
        $qtde_meses = 18;//1 ano e meio
        $calendars .= $this->geraTabs($m, $y, 18);

        $calendars .= '</div>';

        $calendars .= $this->geraContentTabs();
        return $calendars;
    }
    public function geraContentTabs(){
        $content = '<div style="cursor: pointer;">';

        foreach($this->myJSON as $keyMes => $mes){
            $content.= '<div id="'.$keyMes.'" class="tabcontent">';
                foreach($this->myJSON->$keyMes as $keyDia => $dia){
                    $content.='
                        <div id="dt'.$keyDia.'" class="data">
                            <p>'.$this->diaPorExtenso($keyDia).'</p>
                        </div>
                    ';
                    foreach($this->myJSON->$keyMes->$keyDia as $keyOferta => $oferta){
                        $content.='
                            <div id="'.$keyOferta.'" class="dt'.$keyDia.' oferta">
                                <p>'.$keyOferta.'</p>
                                <button style="display: inline-block;float: right;margin: 15px;" type="button">Confirmar viagem</button>
                            </div>
                        ';
                        foreach($this->myJSON->$keyMes->$keyDia->$keyOferta as $keyCliente => $cliente){
                            $content.='
                                <div class="cliente cdt'.$keyDia.' dt'.$keyDia.'-'.$keyOferta.'">
                                    <p>'.$cliente->nome.'</p>
                                </div>
                            ';
                        }
                    }
                }
            $content.= '</div>';
        }

        $tabsParaVazias ='
                    <div id="mes_nenhuma_reserva" class="tabcontentnull">
                        <p>
                            Companheiro, você ainda não tem reservas para este mês.
                        </p>
                    </div>
                    <div id="todos_nenhuma_reserva" class="tabcontentnull">
                        <p>
                            No momento, não há nenhum pedido de reserva para suas ofertas.
                        </p>
                    </div>';
        $content .= $tabsParaVazias;
        $content.= '</div>';

        return $content;
    }
    public function geraTabs($mes_inicial, $ano_inicial, $qtde_meses){
        $tabs_labels = '<div class="tab">';

        $tem_algo = $this->checaQualquerReserva();
        $tabs_labels .= '<button id="tab_todos" class="tablinks '.$tem_algo.'" onclick="showTodos(event)"> <p class="tab_ano"><br></p><p class="tab_mes">Todos</p> </button>';

        $mes_inicial--;
        $label_ano = $ano_inicial;
        for ($i=0; $i < $qtde_meses; $i++) {
            $mes_index = ($mes_inicial+$i)%12;//itera de 0-11 partindo do index do mes atual

            $label_mes = $this->monthLabels[$mes_index];//pega o nome do mes

            if($i != 0 && $mes_index==0){//se eh janeiro entao virou o ano, ano++, exceto no caso de ja ter começado em janeiro
                $label_ano++;
            }
            $label_mes_ano = $label_mes.'20'.$label_ano;//label ano vem so com os ultimos 2 digitos

            $tem_algo = $this->checaMesTemAlgo($mes_index, $label_ano);

            $tabs_labels .= '<button class="tablinks '.$tem_algo.'" onclick="showMes(event, \''.$label_mes_ano.'\')"> <p class="tab_ano">20'.$label_ano.'</p><p class="tab_mes">'.$label_mes.'</p> </button>';
        }
        

        $tabs_labels .= '</div>';
        return $tabs_labels;
    }
    private function diaPorExtenso($data){
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        return strftime('%A, %d de %B de %Y', strtotime($data));

        //return $data;// = $dia;
    }
    private function checaMesTemAlgo($index_mes, $label_ano){
        $index = $this->monthLabels[$index_mes];
        $index .= "20".$label_ano;
        return array_key_exists($index, $this->myJSON)?"tem_algo":'';
    }
    private function checaQualquerReserva(){
        //echo count(($this->myJSON));
        return (count($this->myJSON)>0)?"tem_algo":'';
    }
}
?>