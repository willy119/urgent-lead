<?php 
include "agent.php";
session_start();
if(!isset($_SESSION['email'])){
    header("location:../outer/outer.php");
}
?>
<div class="listtt">
    <div class="jumbotron">
        <div class="card">
            <h2> Liste De Protection civile </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <button style="background-color:#024949 ; color:#fff" type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    <a style="color: #ffffff" href="http://localhost/www/chefpc/point.php">
                        Ajouter
                    </a>
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'agences');

                $query = "SELECT * FROM agences WHERE type = 'protection civile'";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col"> Voir </th>
                        </tr>
                    </thead>
                    <?php
                    if ($query_run) {
                        foreach ($query_run as $row) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['adresse']; ?></td>

                                    <td>
                                        <ion-icon name="chatbubble-outline"></ion-icon>
                                    </td>
                                </tr>
                            </tbody>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>


    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html> 