<?php 

include "us.php";
?>
<div class="listtt">
    <div class="jumbotron">
        <div class="card">
            <h2> Liste Des Pharmacies </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'agences');

                $query = "SELECT * FROM agences where type = 'pharmacie'";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Status</th>
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
                                        <?php
                                        if ($row['status'] == 1) {
                                        ?>
                                            <button class="btn btn-success"><a href="status.php?idph=<?php echo $row['id']; ?>&status=0" style="color:aliceblue;text-decoration:none"> active </a> </button>
                                        <?php
                                        } else { ?>
                                            <button class="btn btn-danger"><a href="status.php?idph=<?php echo $row['id']; ?>&status=1" style="color:aliceblue;text-decoration:none"> desactive </a> </button>
                                        <?php
                                        }
                                        ?>
                                    </td>
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
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html> 