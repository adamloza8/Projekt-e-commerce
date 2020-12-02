


                    <div class="col-lg-12">


                        <h1 class="page-header">
                            Użytkownicy

                        </h1>
                          <p class="bg-success">
                            <?php echo $message; ?>
                        </p>

                        <a href="add_user.php" class="btn btn-primary">Dodaj użytkownika</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Foto</th>
                                        <th>Nazwa użytkownika</th>
                                        <th>Imię</th>
                                        <th>Nazwisko</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($users as $user): ?>

                                    <tr>

                                        <td>2</td>
                                        <td><img class="admin-user-thumbnail user_image" src="placehold.it/62x62" alt=""></td>

                                        <td>Rico
                                              <div class="action_links">

                                                <a href="">Usuń</a>
                                                <a href="">Edytuj</a>


                                            </div>
                                        </td>


                                        <td>Andrzej</td>
                                       <td>Gołota</td>
                                    </tr>


                                <?php endforeach; ?>


                                </tbody>
                            </table>


                        </div>



                    </div>
