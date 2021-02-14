<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: Poppins;
        }
    </style>
</head>

<body>

    <?php
    include './navbar.php';
    ?>
    
        <h3 height:60px;width:50px; class="center" style="text-align: center;color:blue" ><b>Transaction History</b></h3>
    </div>
    <div class="container" >
        <br>
        <div class="container-fluid table-responsive-sm" >
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        
                        <th class="text-center">Sender</th>
                        <th class="text-center">Recipient</th>
                        <th class="text-center">Amount in ₹</th>
                        <th class="text-center">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include './connection.php';

                    $sql = "SELECT * from transactions";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr>
                            
                            <td class="center py-2"><?php echo $rows['sender']; ?></td>
                            <td class="center py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="center py-2"><?php echo $rows['amount']; ?> </td>
                            <td class="center py-2"><?php echo $rows['datetime']; ?> </td>

                        <?php
                    }
                    mysqli_close($conn);
                        ?>
                </tbody>
            </table>

        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

     <footer class="center footer" style=" background: green; color:white; margin-bottom: 0; bottom: 0; padding: 10px;">
    <h6 class="info"><b>GRIP Feb 2021 © The Sparks Foundation -> By Pratik Chainani </b></h6>
                </footer>
</body>

</html>