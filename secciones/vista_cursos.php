<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>
<br>
<h1>Control de cursos</h1>
<div class="row  ">
    <div class="col-12">
        <br>
        <div class="row">

            
            <div v class="col-md-5">

                <Form for="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Cursos
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="<?php echo $id?>" aria-describedby="helpId"
                                    placeholder="ID">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="<?php echo $nombre_curso?>" name="nombre_curso" id="nombre_curso"
                                    aria-describedby="helpId" placeholder="Nombre Del curso">
                            </div>

                            <div class="btn-group" role="group" aria-label="Button group name">
                                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
                            </div>

                        </div>
                    </div>
                </Form>


            </div>

            <div class="col-md-7">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($listaCursos as $curso){?>
                       <tr>
                            <td> <?php  echo $curso["id"];?></td>
                            <td><?php  echo $curso["nombre_curso"];?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" id="id" value=<?php echo $curso["id"];?> >
                                    <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                                </form>

                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>




<?php include('../templates/pie.php'); ?>