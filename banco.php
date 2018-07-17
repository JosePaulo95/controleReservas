<?php 
	header('Content-Type: application/json');
	$monthLabels = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");

	$db = mysqli_connect('localhost','root','','fellowstest')
 	or die('Error connecting to MySQL server.');

 	mysqli_set_charset($db, 'utf8');

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
	
	$idusuario = '1';//$obj['idcliente'];

	if($idusuario!=""){
		$sql = "
			SELECT *
			FROM reserva
			ORDER BY data_passeio, oferta_id
		";
		$result = mysqli_query($db, $sql);

		if($result->num_rows>0){
			//transforma em varias linhas json<
			$rows = getJSON($result);
			//transforma em varias linhas json>

			//formata
			$mes_inicial =	date('m', strtotime($rows[0]['data_passeio']));
			$ano =			date('Y', strtotime($rows[0]['data_passeio']));
			$d = 			$rows[0]['data_passeio'];
			$of = 			$rows[0]['oferta_id'];

			$m = $mes_inicial;
			if($m<10) {
				$m = '0'.$m;
			}
			$meses = [];
			$r_iter = 0;
			$oi=0;

			for ($r_iter=0; $r_iter < count($rows); $r_iter++) {
				if($rows[$r_iter]['data_passeio'] > $ano.'-'.$m.'-01'){
					$m = 	date('m', strtotime($rows[$r_iter]['data_passeio']));
					$ano = 	date('Y', strtotime($rows[$r_iter]['data_passeio']));
				}
				if($rows[$r_iter]['data_passeio'] != $d){
					$d = $rows[$r_iter]['data_passeio'];
				}
				if($rows[$r_iter]['oferta_id'] != $of){
					$oi=0;
					$of = $rows[$r_iter]['oferta_id'];
				}
				$meses[maLabel($m, $ano)][$d][$of][$oi] = $rows[$r_iter];
				$oi++;
			}

		    $poder = json_encode(array(
		    	'format' => $meses
		    ), JSON_PRETTY_PRINT);
		}else{
			$poder = json_encode(array(
		    	'listaReservas' => [],
		    ));
		}
	}
	function maLabel($m, $a){
		return (mForm($m, 0)).$a;
	}
	function mForm($m, $p){
		$m += $p;
		$m = $m%13;
		if($m==0){
			$m=1;
		}
		$m = sprintf("%02d", $m);
		return $m;
	}

	function getJSON($result){
		$i = 0;
		$rows = [];
		do {
			$row = $result->fetch_assoc();

			if($row!=''){
				$rows[$i] = $row;
			}
			$i++;
		} while ($row!='');

		return $rows;
	}
	/*
				'
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

	*/
?>