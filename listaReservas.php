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

    public function show() {
        return
        '   
        <div style="cursor: pointer;">
            <div id="dt2018-07-12" class="data">
                <p>12 de julho de 2018</p>
            </div>
                <div id="oferta1" class="oferta dt2018-07-12 ">
                    <p>Oferta 1</p>
                </div>
                    <div class="cliente oferta1">
                        <p>Cliente 1</p>
                    </div>
                    <div class="cliente oferta1">
                        <p>Cliente 2</p>
                    </div>
                    <div class="cliente oferta1">
                        <p>Cliente 3</p>
                    </div>
                <div id="oferta2" class="oferta dt2018-07-12 ">
                    <p>Oferta 2</p>
                </div>
                    <div class="cliente oferta2">
                        <p>Cliente 1</p>
                    </div>
                    <div class="cliente oferta2">
                        <p>Cliente 2</p>
                    </div>
            <div id="dt2018-07-13" class="data">
                <p>13 de julho de 2018</p>
            </div>
                <div id="oferta1" class="oferta dt2018-07-13 ">
                    <p>Oferta 1</p>
                </div>
                    <div class="cliente oferta1">
                        <p>Cliente 1</p>
                    </div>
                    <div class="cliente oferta1">
                        <p>Cliente 2</p>
                    </div>
        </div>
        ';
    }
}

?>