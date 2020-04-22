<div class="row">
            <div class="col-md-12">
                <br>
                    <div class="col-sm-12 text-center"><h2 class="text-white">Listado de <b>Personas</b></h2></div>
                <br>
                <div class="col-sm-12 text-center"><a href='?c=person&a=insert' class='btn btn-success btn-lg btn-block'>Crear Persona</a></div>
                <br>
                <div class="row" id="divTareas">
                <?php foreach ($people as $person) : ?>
                    <div class='col-md-4'>
                        <div class='card  bg-dark text-white border-success'>
                            <div class='card-header border-success'>
                                <h4><?= $person[1] ?></h4>
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title'>Identificacion : <?= $person[2]?></h5>
                                <p class='card-text'>Email: <?= $person[3]?></p>
                                <p class='card-text'>Celular: <?= $person[4]?></p>
                                <a href='?c=person&a=edit&id=<?= $person[0]?>' class='btn btn-warning btn-lg btn-block'>Editar</a>
                                <a href='?c=person&a=delete&id=<?= $person[0]?>' class='btn btn-danger btn-lg btn-block'>Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>