<?php
include('agent.php');
session_start();
if(!isset($_SESSION['email'])){
    header("location:../user/login.php");
}
?>
<!-- Modal -->
<div class="listtt">
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter données d'agent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Nom</label>
                            <input type="text" name="fname" class="form-control" placeholder="Entrer votre nom">
                        </div>

                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" name="email" class="form-control" placeholder="Entrer votre email">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="text" name="password" class="form-control" placeholder="Entrer votre mot de passe">
                        </div>

                        <div class="form-group">
                            <label> Numéro de téléphone </label>
                            <input type="number" name="contact" class="form-control" placeholder="Entrer votre  numero de telephone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" name="insertdata" class="btn btn-primary" style="background-color:#024949;width:120px ">Sauvegarder</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Modifier données d'agent </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Nom </label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Entrer votre nom">
                        </div>

                        <div class="form-group">
                            <label> Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Entrer Email">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="text" name="password" class="form-control" placeholder="Entrer votre mot de passe">
                        </div>

                        <div class="form-group">
                            <label> Numéro de téléphone </label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Entrer Phone Number">
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
                    <h5 class="modal-title" id="exampleModalLabel"> Supprimer données d'agent </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

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



    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> Listes Des Agents </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button style="background-color:#024949 " type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Ajouter 
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'agences');

                    $query = "SELECT * FROM agentp";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col"> Email </th>
                                <th scope="col"> Contact </th>
                                <th scope="col"> Modifier </th>
                                <th scope="col"> Supprimer </th>
                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>
                                        <td> <?php echo $row['id_agent']; ?> </td>
                                        <td> <?php echo $row['fname']; ?> </td>
                                        <td> <?php echo $row['email']; ?> </td>
                                        <td> <?php echo $row['contact']; ?> </td>

                                        <td>
                                            <button type="button" class="btn btn-success editbtn"> Modifier </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger deletebtn"> Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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
            $('#fname').val(data[1]);
            $('#email').val(data[2]);
            $('#contact').val(data[3]);
        });
    });
</script>


</body>

</html>