<?php

if(10 > 2){
    echo "Entrou no primeiro if <br>";
    if("teste" == "teste"){
        echo "Entrou no segundo if <br>";
    }
}

if(10 > 2){
    echo "Entrou no primeiro if 2 <br>";
    if("teste" == "teste"){
        echo "Entrou no segundo if 2 <br>";
    } else {
        echo "Entrou no segundo else 2 <br>";
    }
}

if(10 < 2){
    echo "Entrou no primeiro if 2 <br>";
    if("teste" != "teste"){
        echo "Entrou no segundo if 2 <br>";
    } else {
        echo "Entrou no segundo else 2 <br>";
    }
} else {
    echo "Entrou no primeiro else <br>";
}

