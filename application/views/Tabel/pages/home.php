<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/CSS/data.css');?>" media="all"/>
    </head>
        <body>
            <div class="container">
                    <table>
                        <tr>
                            <th> Name </th>
                            <th> NIM</th>
                            <th> Born Place</th>
                            <th> Birth Date</th>
                            <th> Address</th>
                        <tr>
                        <?php foreach ($Biodata as $biodata): 
                        ?>
                        <tr>
                            <td><?php echo $biodata['Name'] ?> </td>
                            <td><?php echo $biodata['NIM'] ?> </td>
                            <td><?php echo $biodata['Born_place'] ?> </td>
                            <td><?php echo $biodata['Birth_date'] ?> </td>
                            <td><?php echo $biodata['Address'] ?> </td>
                        <tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
            </div>
        </body>
</html>