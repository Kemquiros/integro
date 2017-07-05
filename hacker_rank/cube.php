<?php
/*
Autor: John Tapias Zarrazola
Fecha: 05/07/2017
Licencia: MIT
Descripcion: 
    Algoritmo para resolver sumas de una matriz dispersa
    representada como lista ligada
*/

//-----------    
//  Abre el stdin    
//-----------    
$_fp = fopen("php://stdin", "r");
//-----------
//  Lee el numero de casos de uso
//-----------
$T = intval(fgets($_fp));

//Por cada caso de uso
for($t = 0; $t < $T; $t++){ 
    //-----------
    //  Crea la matriz
    //-----------
    $mat = array();
    //-----------
    //  Numero de elementos en la matriz
    //-----------
    $elementos=0;
    
    //-----------
    //  Lee orden de la matriz y
    //  el numero de operaciones    
    //-----------
    //-----------
    //  Separando los elementos
    //  la línea por espacios
    //-----------
    list($N, $M) = explode(" ", fgets($_fp));//La funcion explode es mas eficiente que split
    //-----------
    //  Por cada operacion
    //-----------
    for($m = 0; $m < $M; $m++){
        $linea = explode(" ", fgets($_fp));
        if($linea[0] == "UPDATE"){
            //-----------
            //  La implentacion interna de un Array en PHP
            //  Es un hashmap, dando un orden O(1)
            //-----------

            $x = intval($linea[1]);
            $y = intval($linea[2]);
            $z = intval($linea[3]);
            $w=(float)$linea[4];

            if($elementos==0){
                $mat[$elementos][0] = $x;
                $mat[$elementos][1] = $y;
                $mat[$elementos][2] = $z;
                $mat[$elementos][3] = $w;
                $elementos++;
            }else{
                //Realiza insercion con busqueda secuencial
                
                //-----------
                //  e sera el indice para insertar
                //-----------
				$e=0;
				$terminar=FALSE;
				while(!$terminar){
                    //-----------
                    //  Si el cubo ya existe en la lista
                    //-----------
					if(($mat[$e][0]==$x) && ($mat[$e][1]==$y) && ($mat[$e][2]==$z)){
                        //-----------
                        //  Reemplaza el valor del cubo
                        //-----------
						$mat[$e][3]=$w;
                        //-----------
                        //  Termina la busqueda
                        //-----------                        
						$terminar=TRUE;
                        
                        //-----------
                        //  Recordemos que:
                        // Si un arreglo tiene N elementos
                        // Se debe iterar de 0 a N-1
                        //-----------
					}elseif($e==$elementos-1){
                        //-----------
                        //  Si ya termina de recorrer toda la lista
                        //  Agrega un nuevo elemento al final de la misma
                        //-----------
						$mat[$elementos][0] = $x;
				        $mat[$elementos][1] = $y;
				        $mat[$elementos][2] = $z;
				        $mat[$elementos][3] = $w;
				        $elementos++;
						$terminar=TRUE;					
					}else{
                        //-----------
                        //  Avance en la lista
                        //-----------
                        $e++;
                    }
				}
			}		
           
        }elseif($linea[0] == "QUERY"){
            //-----------
            // Nueva instancia de la clase Cubo
            //-----------
            $cubo = new Cubo();
            
            $cubo -> setX1($linea[1]);
            $cubo -> setY1($linea[2]);
            $cubo -> setZ1($linea[3]);
            
            $cubo -> setX2($linea[4]);
            $cubo -> setY2($linea[5]);
            $cubo -> setZ2($linea[6]);
                   
            for($i = 0; $i < $elementos; $i++){
                //-----------
                //  Realiza una busqueda secuencial
                //-----------
                //-----------
                //  Si el elemento se ecuentra
                // en el rango establecido
                // sume su valor
                //-----------
                if(($mat[$i][0] >= $cubo -> getX1()) && ($mat[$i][0] <= $cubo -> getX2())){
                    if(($mat[$i][1] >= $cubo -> getY1()) && ($mat[$i][1] <= $cubo -> getY2())){
                        if(($mat[$i][2] >= $cubo -> getZ1()) && ($mat[$i][2] <= $cubo -> getZ2())){
                            $cubo -> add($mat[$i][3]);
                        }
                    }
                }
            }
            //Imprime el resultado
            print_r($cubo -> getSum()."\n");                        

        }//___end if tipo de operacion
    }//___end for operaciones
}//___end for casos de uso
fclose($_fp);

class Cubo{
    private $x1;
    private $y1;
    private $z1;
    private $x2;
    private $y2;
    private $z2;
    private $suma;
    
    public function __construct(){
        $this -> suma = 0;
    }
    
    //-----------
    //  Reliza el casting 
    //  de string a int
    //-----------
    
    public function setX1($_x1){
        $this -> x1 = intval($_x1);
    }
    public function setY1($_y1){
        $this -> y1 = intval($_y1);
    }    
    public function setZ1($_z1){
        $this -> z1 = intval($_z1);
    }
    public function setX2($_x2){
        $this -> x2 = intval($_x2);
    }
    public function setY2($_y2){
        $this -> y2 = intval($_y2);
    }    
    public function setZ2($_z2){
        $this -> z2 = intval($_z2);
    }    
    public function getX1(){
        return $this -> x1;
    }    
    public function getY1(){
        return $this -> y1;
    } 
    public function getZ1(){
        return $this -> z1;
    }  
    public function getX2(){
        return $this -> x2;
    }    
    public function getY2(){
        return $this -> y2;
    } 
    public function getZ2(){
        return $this -> z2;
    }      
    public function add($val){
        $this -> suma += $val;
    }
    public function getSum(){
        return $this -> suma;
    }
}

?>
