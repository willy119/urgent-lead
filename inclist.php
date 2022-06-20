<?php
include "agent.php";
session_start();
if (!isset($_SESSION['email'])) {
    header("location:../outer/outer.php");
}
?>

<div class="listtt">
    <div class="jumbotron">
        <div class="card">
            <h2> Listes Des Incidents </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <button style="background-color:#024949 ; color:#fff" type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    <a style="color: #ffffff" href="http://localhost/www/chefpc/incident.php">
                        Ajouter
                    </a>
                </button>
            </div>
        </div>
        <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Modifier Incident</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="updtincd.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="update_id" id="update_id">

                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="dsc" id="fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Catégorie </label>
                                <input type="text" name="cat" id="fname" class="form-control" placeholder="Entrer un type">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" name="updatedata" class="btn btn-primary" style="background-color:#024949">Modifier</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Supprimer L'incident </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="dltincd.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="delete_id" id="delete_id">

                            <h4> Voulez Vous Supprimer Ces Données?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> NON </button>
                            <button type="submit" name="deletedata" class="btn btn-primary" style="background-color:#024949"> Oui !! Supprimer. </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Description</th>
                            <th scope="col"> Status</th>
                            <th scope="col"> Modifier </th>
                            <th scope="col"> Supprimer </th>
                        </tr>
                    </thead>

                    <?php
                    include 'connection.php';
                    $query = "SELECT * FROM incident";
                    $query_run = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($query_run)) {
                    }
                    ?>


                    <?php
                    if ($query_run) {
                        foreach ($query_run as $row) {

                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['id_inc']; ?></td>
                                    <td><?php echo $row['cat']; ?></td>
                                    <td><?php echo $row['dsc']; ?></td>

                                    <td>
                                        <?php
                                        if ($row['status'] == 1) {
                                        ?>
                                            <button class="btn btn-success"><a href="stat.php?idincd=<?php echo $row['id_inc']; ?>&status=0" style="color:aliceblue;text-decoration:none"> active </a> </button>
                                        <?php
                                        } else { ?>
                                            <button class="btn btn-danger"><a href="stat.php?idincd=<?php echo $row['id_inc']; ?>&status=1" style="color:aliceblue;text-decoration:none"> desactive </a> </button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn"> Modifier </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deletebtn"> Supprimer</button>
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
<script>
    $(document).ready(function() {

        $('.deletebtn').on('click', function() {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });
    });
</script>

<script>
    $(document).ready(function() {

        $('.editbtn').on('click', function() {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#dsc').val(data[1]);
            $('#cat').val(data[2]);
        });
    });
</script>

</body>

</html>