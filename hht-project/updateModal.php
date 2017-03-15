<?php
?>
<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mettre à jour un utilisateur</h4>
            </div>

            <div id="div-update-user-form">

                <form id="updateUserForm" action="updateUser.php" method="POST">
                    <div >
                        <div class="form-group">
                            <label id="idUserLabel">idUser</label>
                            <input type="text" class="form-control" readonly="readonly" id="idUser">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email : </label>
                            <input type="email" class="form-control" id="emailToUpdate" placeholder="Email">
                        </div>

                        <div>
                            <label>Prénom :</label>
                            <input type="firstName" id="firstNameToUpdate" name="firstNameToUpdate"/>
                        </div>

                        <div>
                            <label>Nom : </label>
                            <input type="lastName" id="lastnameToUpdate" name="lastnameToUpdate"/>
                        </div>
                        <div>
                            <label>Role : </label>
                            <select name="roleToUpdate">
                                <option value="A">Administrateurs</option>
                                <option value="M">Membres</option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button onclick="updateUser()" type="submit" class="btn btn-primary">Mettre à jour utilisateur</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>