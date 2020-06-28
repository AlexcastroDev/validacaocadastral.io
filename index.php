<?php

require __DIR__.'/vendor/autoload.php';

use H1code\ValidacaoCadastral as Valid;

function cpf($document = '29880342062', $token = '28a7976f9df7b08f87dcce30be04e60e') {
    return Valid::get($token, $document);
}

function cnpj($document = '18611939000158', $token = '28a7976f9df7b08f87dcce30be04e60e') {
    return Valid::get($token, $document);
}

var_dump(cpf());
var_dump(cnpj());