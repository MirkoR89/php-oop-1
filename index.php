<?php 
/** Movie class
 * @author Mirko mirko.rinelli@gmail.com
 * @copyright 2021 Mirko
 */

class Movie {
    public $title = 'Star Wars';
    public $year;
    public $genre;
    public $director;
}

$interstellar = new Movie();
$interstellar->title =  'Intertellar';
$interstellar->year = 2014;
$interstellar->genre = 'sci-fi';
$interstellar->director = 'Christopher Nolan';

//var_dump($interstellar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title: <?php echo $interstellar->title ?></h1>
    <h2>Director: <?php echo $interstellar->director ?></h2>
    <span>Genre: <?php echo $interstellar->genre ?></span>
    <span>Year: <?php echo $interstellar->year ?></span>
    <hr>
</body>
</html>

<?php
/** Class bottle
 * @author Mirko mirko.rinelli@gmail.com
 * @copyright 2021 Mirko
 */

 class Bottle {
     public $brand;
     public $color;
     public $dimension;
     public $material;
    
    public function __construct(string $brand, string $color, string $dimension, string $material)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->dimension = $dimension;
        $this->material = $material;
    }
 }

 $we_rise = new Bottle('We Rise', 'white', '25x7', 'metal');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Describe your bottle</h1>
    <p>My bottle is produced by <?php echo $we_rise->brand ?>, it's <?php echo $we_rise->color ?>, it's <?php echo $we_rise->dimension ?>cm and it's made of <?php echo $we_rise->material ?>.</p>  
    <hr>
</body>
</html>

<?php 

/**
 * class Laptop
 * @author Mirko Rinelli mirko.rinelli@gmail.com
 * @copyright 2021 Mirko 
 */

 class Laptop {
     public $brand;
     public $model;
     public $dimension;
     public $weight;
     public $processor;
     public $operator_system;
     public $RAM;
     public $SSD; 

    public function __construct(string $brand, string $model, string $dimension, string $weight, string $processor, string $operator_system, string $RAM, string $SSD)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->dimension = $dimension;
        $this->weight = $weight;
        $this->processor = $processor;
        $this->operator_system = $operator_system;
        $this->RAM = $RAM;
        $this->SSD = $SSD;
    }
}

$XPS = new Laptop('Dell', 'XPS 13', '296 x 199 x 14,8 mm (L x P x A)', '1,27 kg', 'Intel Core i7-1165G7 (cache da 12 MB, boost fino a 4,7 GHz)', 'Windows 10', 'LPDDR4x da 16 GB (3.733 MHz)', ' 512 GB (NVMe, M.2)');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  ?>  
</body>
</html>