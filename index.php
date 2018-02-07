<?php declare(strict_types = 1);?> 

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<?php $name = null;

 function name( $name){ ?>
<h1><?php echo $name; ?></h1>
<?php } 

name("Rima");


function twoVar ( String $first) {
if($first == true){?>
    
    <h1><?php echo $first; ?></h1>
    <?php
}
else if($first !== true){
    echo( $first);
}
else if ($first == "" ){

    return false;
    
}

}
 twoVar("vardas");

 //$name = "vardenis";
 function newName (  $name) {
    if($name == "vardenis"){?>
        
        <h1><?php echo $name; ?></h1>
        <?php
    }
    else if($name !== "vardenis"){
        echo( $name) ."<br>";
    }
    else if ($name == "" ){
    
        return false ;
        
    }
    
    }
     neWname('traktoriukas');


function emotion($emo){
    If($emo == "happy"){
        echo (" :)" );
    }
    else if ($emo == "sad"){
        echo ( " :(" );
    }else{
        echo (":|");
    }

}



name("Rima") ;
echo (" is "); 
emotion( "happy"); 
echo (" today");


?>
