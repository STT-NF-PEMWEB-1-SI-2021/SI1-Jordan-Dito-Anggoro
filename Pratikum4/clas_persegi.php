<?php
class PERSEGIPNJG {
    private $pnjg;
    const Lebar = 5;
    function __construct($PP)
    {
        $this->pnjg = $PP;
    }
    function getLuas()
    {
        return self::Lebar * $this->pnjg;
    }
    function getKeliling()
    {
        return 2 * self::Lebar +  2 * $this->pnjg;
    }
}

    echo "Lebar Persegi panjang nya adalah : "  . PERSEGIPNJG::Lebar;
    $persegi1 = new PERSEGIPNJG( 20 );
    $persegi2 = new PERSEGIPNJG( 15 );   
  
    echo "<br>Luas persegi panjang I ".$persegi1->getLuas();
    echo "<br>Keliling persegi panjang I ".$persegi1->getKeliling();
    
 
    echo "<br>Luas persegi panjang II ".$persegi2->getLuas();
    echo "<br>Keliling persegi panjang II ".$persegi2->getKeliling();
    ?>