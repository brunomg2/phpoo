<?php
//ao atribuirmos atributos e motodos como private eles só poderam ser acessados de dentro da classe para conseguirmos ter acesso externo 
//devemos criar metodos publicos que serão responsaveis por validar os dados antes de atribuilos aos atributos da classe
//nesse caso criamos o metodo publico setNascimento que esta validando a data de nascimento atraves da função checkdate

class Pessoa {

    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome,$endereco) {
        $this->nome = (string) $nome;
        $this->endereco = (string) $endereco;
    }

    public function setNascimento($nascimento) {
        $partes = explode('-', $nascimento);
        
        if(count($partes) === 3):
            
            if(checkdate($partes[1], $partes[2], $partes[0])):
                $this->nascimento = $nascimento;
                return TRUE;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }

}

$p1 = new Pessoa('Bruno Gabriel','centro travessa');

if($p1->setNascimento('01 de Maio de 2015')):
    print 'Atribui 01 de Maio de 2015 <br>';
else:
    print 'Não Atribuiu 01 de Maio de 2015 <br>';
endif;

if($p1->setNascimento('2015-12-30')):
    print 'Atribui 2015-12-30';
else:
    print 'Não atribuiu 2015-12-30';
endif;