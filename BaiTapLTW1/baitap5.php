<?php require('data_baitap5.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bai demo</title>
</head>
<body>    
	<table>			
		<tr>
            <th>STT</th>	
			<th>ID</th>	
			<th>Name</th>	
			<th>Gmail</th>
            <th>Yahoo</th>
        </tr>
        <?php for($i = 0;$i < count($users); $i++):?>
                <tr>
                        <td><?php echo $i + 1;?></td>    
                        <td><?php echo $users[$i]['id'];?></td>
                        <td><?php echo $users[$i]['name'];?></td>
                        <td><?php echo $users[$i]['email']['gmail'];?></td>
                        <td><?php echo $users[$i]['email']['yahoo'];?></td>
                </tr>
        <?php endfor;?>
	</table>
        <!-- Cau b -->
    <?php 
            for($i = 0;$i < count($users); $i++):
            {
                    if($users[$i]['id'] == 15)
                    {
                            echo "Co id 15";
                            return;
                    }

            }            
    endfor;
    echo "Khong co id 15";
    ?>
    <!--Cau C  -->
    <?php 
    $temp = 0;
    for($i = 0;$i < count($users) - 1; $i++):
             for($j = $i + 1;$j < count($users); $j++):
                    {
                            if($users[$i]['id'] > $users[$j]['id'])
                            {
                                    $temp =  $users[$i];
                                    $users[$i] =  $users[$j];
                                    $users[$j] =  $temp;
                            }
                    }
            endfor;
    endfor;
    ?>
    <table>                 
            <tr>    
                <th>STT</th>    
                <th>ID</th>     
                <th>Name</th>   
                <th>Gmail</th>
                <th>Yahoo</th>
            </tr>
            <?php for($i = 0; $i < count($users); $i++):?>
                    <tr>
                            <td><?php echo $i + 1;?></td>    
                            <td><?php echo $users[$i]['id'];?></td>
                            <td><?php echo $users[$i]['name'];?></td>
                            <td><?php echo $users[$i]['email']['gmail'];?></td>
                            <td><?php echo $users[$i]['email']['yahoo'];?></td>
                    </tr>
            <?php endfor;
            ?>
    </table>
    <!-- Bai 4 -->
    <form> ID <input type="text" name='idd'/>
        <input type="submit" value="Tìm ki?m"/>
    </form>
    <?php if (empty($_GET) == true):?>
        <?php echo " ";?>
    <?php endif ?>
    <?php if(empty($_GET) == false): ?>
        <?php $XU = ($_GET['idd']); ?>
            <?php for($i = 0;$i < count($users); $i++):?>
                <?php if($users[$i]['id'] == $XU): ?>
                    <table>         
                        <tr>
                            <th>STT</th>    
                            <th>ID</th> 
                            <th>Name</th>   
                            <th>Gmail</th>
                            <th>Yahoo</th>
                        </tr>
                            <td><?php echo $i + 1;?></td>    
                            <td><?php echo $users[$i]['id'];?></td>
                            <td><?php echo $users[$i]['name'];?></td>
                            <td><?php echo $users[$i]['email']['gmail'];?></td>
                            <td><?php echo $users[$i]['email']['yahoo'];?></td>
                            <?php return; ?>
                    </table>
                <?php endif;?>     
            <?php endfor;?>
            <?php echo "Khong tim thay ket qua!!!";?>
    <?php endif;?> 
</body>    
</html>