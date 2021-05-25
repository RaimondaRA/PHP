<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style.css "type="text/css">
    <title>Mokiniai</title>
</head>
<body>
    <div class="container">
    <h2>MOKINIAI</h2>
    
    <table style="width:80%; height: 20%" border="1">
        <tbody>
            <tr>
                <th style="width: 10%"><b>Klasė</b></th>
                <th style="width: 10%"><b>Kodas</b></th>
                <th style="width: 20%"><b>Vardas</b></th>
                <th style="width: 20%"><b>Pavardė</b></th>
                <th style="width: 10%"><b>Duomenų formatavimo data</b></th>
                <th style="width: 10%"><b>Kontrolinių darbų vidurkis</b></th>
            </tr>
    
            <?php foreach($mokiniai as $key => $mokinys):?> 
                <tr><br></tr>
                <td><?=$mokinys['Klasė'];?></td>
                <td><?=$mokinys['Kodas'];?></td>
                <td><?=$mokinys['Vardas'];?></td>
                <td><?=$mokinys['Pavardė'];?></td>
                <td><?=$mokinys['Duomenų formatavimo data'];?></td>              
                    <?php
                        $sum=0;
                        $count=0;
                        foreach ($mokinys['Kontrolinių darbų įvertinimai'] as $id => $mark){ 
                            $sum +=$mark;
                            $count++;                                
                        }
                        $average=round($sum/$count, 3);
                        ?>
                        <td><?=$average;?></td>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</body>
</html>