<?php
// Cliente.php
##########################################
#              Rafael Mega               #
##########################################
/*ㅤㅤㅤ     ⣴⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣿⣿⠂⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣿⣀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢠⣾⣿⣿⣿⣿⣿⣿⣦⠀
⠀⠀⠀⠀⠀⠀⣴⣿⢿⣷⠒⠲⣾⣾⣿⣿
⠀⠀⠀⠀⣴⣿⠟⠁⠀⢿⣿⠁⣿⣿⣿⠻⣿⣄⠀⠀⠀⠀
⠀⠀⣠⡾⠟⠁⠀⠀⠀⢸⣿⣸⣿⣿⣿⣆⠙⢿⣷⡀⠀⠀
⣰⡿⠋⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⠀⠀⠉⠻⣿⡀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⣿⣿⣿⣿⣿⣿⣆⠂⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⡿⣿⣿⣿⣿⡄⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢠⣿⣿⠿⠟⠀⠀⠻⣿⣿⡇⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣾⡿⠃⠀⠀⠀⠀⠀⠘⢿⣿⡀⠀⠀⠀
⠀⠀⠀⠀⠀⣰⣿⡟⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣷⡀⠀⠀
⠀⠀⠀⠀⢠⣿⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣿⣧⠀⠀
⠀⠀⠀⢀⣿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣿⣆⠀
⠀⠀⠠⢾⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣷⡤⠄*/

                                                  
      ##                                    ##    
    ##                              ######        
    ##                        ########            
  ####                ############                
  ######      ##############                      
  ######################                          
  ##################                              
  ############       

 /* MMMMMMMMMMMMMMMMmmmmmmmmmmMMmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmMMmmMMmmMMMMmmmmmmmmMMMMmmmmMMMMMMmmmmMM
MMMMMMMMMMMMMMmmMMmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmMMMMMMmmMMmmmmmmmmMM@@mmmmMMMMMMmmMMMM
MMMMMMMMmmmmmmmmmmmmmmmmmmmm++mmmmmmmmmm++++++++mm++mmmmmmmmmm@@MMMM@@@@@@@@@@MMMMMMMMMMmmmmMMMMmmMM
mmmmMMMMmmmmmmmmmmmmmmmmmmmmmm++++mm++MM@@MMMM@@MMMMMMMMMM++mmMM@@@@@@@@@@@@@@MMMM@@@@MM@@MMMMmmmmMM
mmmmmmmmmmmmmmmm++++++++++++++++++@@@@@@@@@@MMMMMMMMMMMMMMMMMMmmmmMMMMMM@@@@@@####@@@@@@@@MMmmmmmmmm
mmmmmmmmmmmm++++++++++++++++++MM@@@@@@MMMMMMmmmmmmmmmmMMMMMMMMMM@@mmmmmmMMMMMMMMMMMMMMMMMMmmmmmmmmmm
mmmmmmmm++++++++++++::++++++@@@@MMMMMMmmmmmmmm++++mmmmmmmmmmmmMMMM@@MMmmmmmmmmmmmmmmmmmmMMmmmmmmmmmm
mmmmmm++++++++++::++::++mm@@@@MMMMMMmmmmmm++++++++++++++mmmmmmmmmmMMMM##++++mm++++++++++mmmmmmmmmmMM
mmmmmmmm++++++++++::::mm@@@@MMMMmmmmmm++++++++::::++++++++++mmmmmmmmmmMM##::++++++++++++++++mm++mmmm
mm++++++++++++++++::::@@MMMMMMMMmmmm++++++::::::::::::++::++++mmmmmmmmmmMM##::::++::++++::++++++mm++
mm++++++::++++++::::##@@MMMMMMmmmm++++::::::::--::--::::::::++++mm++++mmmmMMmm::::::::::++++++++++++
mm++++++++::++::::::@@@@MMMMMMmm++++::::::----------::::::::++++++++mmmmmmmm@@::::::::::::++++++++++
mm++++::++::::::::@@@@MMMMMMmmmm++::::::------------------::::::::++++++++mmMM::::::::::::::++++++++
++++++++::::::::::@@MMMMMMmmmm++++::------------------------::::::++++++++++mmmm--::--::::::::::++++
++++++::::::::::::@@@@MMMMmmmm++::::----------..--------------::::::++++++++++MM------::::::::::++++
++++::++++::::::::@@MMMMMMmmmm++::::--------......----------::::::::::++::++++mm------::::::++++++++
++++::::::::::::::MMMMMMmmmmmm++::::::----------..--------::::::::::::::::++++mm--------::::::++++++
++++::::::::::::--MMMMMMmmmm++++++++::------..--....----------::::++::++::++++++::------::::++++++++
++::::::::::::::::mmMMMMmmmmmm++++++::----..................----::::++++::++++++++--::--::::::::++++
++++::::::::::----MMMMMMmmmm++mm::::----......  ........--::::++::::++++++++++++mm------::::::++::++
++++::::::::::----MMMMMMmm++++::::::++::--....  ....::++mmmm::::mmMM++++++++++++MM--------::::++++++
++::::::::::------MMMMMMmmmm++MM@@MM@@@@mm::--......------------::::mm::++++mm++##mm------::::::++++
++::::::::::::::--MMMMmm++mm@@MM++------::::::--..--::++MMMM++++++::::::::++++mm::++++--::::::++++++
++::::::::----::--@@MMmmmm++mm++++::::++++++mm--..::++MM++##MM--##@@++::::::++mm++::::------::::::++
++::::::------++mmMMMMmmmm++++++##@@@@##++mmMM++::::mmMMmmmm::::::++++::::++::mm--::::----::::::++::
++::::::::::--::mmmmMMmmmm++MM##MMmm++++::mmMMmm::::++++mm::++++++::--::::++++::--::::--::--::::++::
++::::::::----::++::MMmm++++++mmmmmm++++++mmmm++::::++::::--..------------++++++----::------::::::::
++::::::::----::++::mmmm++++++++::::----++mmmm::::::++++------------..----::++++------      ....----
++::::::--::--::++::++mm++::::::::--::::++mm++++++::++++::------....--..--::++++--::                
++::::::::----::::--::mmmm::::--------::::mmmm++::--::mm::----........----::++mm----                
++::::::::::----++++::MMmm::::------..----mmmm::------::::::..........----::++++::--                
++::::::::::----::++::mmmm::::----......::::++::..  ------::--..  ....--::::++++--                  
++++::::::::::----++++MMmm++::--......--::::@@MM----++mm++------......--::++mm++--                  
mmmm++mm++::::::::++++MMmm++++--......----mmMM++mm++--::----------....--::++++--                    
mm@@########::::::::++MMmm++++----..------::++::::------------::------::++++++                      
##############::::::mmMMMM++++::------::::++mm::------::--::++::------::++++++                      
##############MM::::::::mmmmmm::::--::mm++++::::------::::::mm++::::::::++++++                      
################::::::::MMmm++++------::mmMMmmmm++++++mmMMMM::++++--::++++mm::                      
################::++::::MMMM++++++----::++MMmmmm++++::::++::::::++::++++++++                        
##############MM++::::++::MM++mm++::::::::++++++::::::----::::::++++mmmm++mm                        
##############@@++++++++::MMMMmmmmmm::mm::++++::::++::::::::::::++++mm++++MM                        
##############@@mmmm++mm++++##mmMM++::mmmmmm++::::::::------::++++++++mmMM@@##                      
##############MMmmmmmm++++++mm@@MMMMmmmmmm++::::----::::----++++++++++mm@@MM##++                    
##############mmmmmmmmmm++mmmmMM@@@@MMmmmmmm++::::--------::++++mm++mm@@MMMM####..                  
######@@mmmmmmmmMMmmmmmmmmmmmmmm##@@MMMMMMMMmm::::----::::++mmmmmmmmMM@@MMMM##MM##mm                
mmmmmmMMmmmmmmmm++++mmmmMMMMmmmm@@##@@@@##MMmmmm++::::::++mmmm@@mmMM@@MMMM@@MM####mm##..            
MMmmmmmmMMmmmmmmmmmmmm++++mmMMmm##@@##@@@@##@@MMmm++++mmmmMM@@MMMM@@MMmmMMMMMM####@@@@##@@          
MMmmmmmmmmmmmmmmmmmm++++++mmmmmm@@@@@@####@@####@@@@@@@@##MMMM@@@@MMmmmmMM@@@@mm##@@MM@@MMMM        
MMmmmmmmmmmmmmmmmmmm++++++mmmm@@##@@@@@@@@##@@@@@@MMMMMMMM@@##MMmmmmmmmmMM@@@@++##@@@@@@@@@@MM..    
mmmmmmmmmmmmmmmmmmmmmmmm@@@@@@mm@@##@@MMMM@@######@@@@@@##@@MMmmmm++mmmmMM@@MMmm@@##########@@@@##@@*/


require_once "Pessoa.php";

require_once "Pessoa.php";

class Cliente extends Pessoa {
    private float $credito;
    private float $saldo;

    // Construtor com polimorfismo
    public function __construct($idPessoa, $nome, $cpf, $credito, $saldo) {
        parent::__construct($idPessoa, $nome, $cpf);
        $this->credito = $credito;
        $this->saldo   = $saldo;
    }

    // Retorna array para armazenar em JSON
    public function toArray() {
        return [
            "idPessoa" => $this->getIdPessoa(),
            "nome"     => $this->getNome(),
            "cpf"      => $this->getCpf(),
            "credito"  => $this->credito,
            "saldo"    => $this->saldo
        ];
    }

    // Getter de crédito
    public function getCredito() {
        return $this->credito;
    }

    // Getter de saldo
    public function getSaldo() {
        return $this->saldo;
    }

    // Setters (caso precise atualizar depois)
    public function setCredito($valor) {
        $this->credito = $valor;
    }

    public function setSaldo($valor) {
        $this->saldo = $valor;
    }

    // Para recriar objeto a partir de JSON
    public static function fromArray($arr) {
        return new Cliente(
            $arr['idPessoa'],
            $arr['nome'],
            $arr['cpf'],
            $arr['credito'],
            $arr['saldo']
        );
    }
}
