<?php Template::load('/sistema/head.php'); ?>
<style type="text/css">
    .no-top-padding {
        margin-top: 10px;
    }
</style>

<body>

    <div class="wrapper">
        <?php Template::load('/sistema/nav.php'); ?>

        <div class="sidebar" data-color="<?= TEMPLATEFX ?>">
            <?php Template::load('/sistema/menu.php'); ?>
        </div>

        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="no-top-padding">Lista de destinos</h4>
                                        </div>
                                    </div>
                                    <a href="/adddestino" class="btn btn-success btn-fill"><i class="fa fa-sitemap"></i> Agregar destinos</a>
                                </div>
                                <div class="content">
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Thumbnail</th>
                                                    <th>País</th>
                                                    <th>Destino</th>
                                                    <th class="disabled-sorting">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->data as $data) {
                                                    $i++; ?>
                                                    <tr id="r<?= $data->iddestino; ?>">
                                                        <td><?= $i; ?></td>
                                                        <td><img src="/img/destinos/<?=$data->thumbnail;?>" height="50" /></td>
                                                        <td><?= $data->pais;?></td>
                                                        <td><?= $data->destino; ?></td>
                                                        <td>
                                                            <a href="/editdestino/<?=$data->iddestino; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                                                            <button onclick="deleteElement(<?= $data->iddestino; ?>);" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>



</body>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="/sistema/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/sistema/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sistema/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/sistema/js/light-bootstrap-dashboard.js"></script>

<script src="/sistema/js/jquery.datatables.js"></script>
<script src="/sistema/js/sweetalert2.js"></script>
<script type="text/javascript">
    var i = 0;
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "order": [
                [0, "desc"]
            ],
            "lengthMenu": [
                [5, 25, 50, -1],
                [5, 25, 50, "All"]
            ],
            responsive: false,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar"
            }
        });
    });

    function deleteElement(iddestino) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Si elimina una marca perderá todos sus datos!",
            showDenyButton: true,
            
            confirmButtonText: "Si, eliminar",
            denyButtonText: "Cancelar",
        }).then((result) => {
            if(result.isConfirmed) {
                $.post('/deletedestino',
                {
                    iddestino : iddestino
                }, function(r){
                    Swal.fire("Eliminado!", "", "success");
                    $("#r"+iddestino).css({
                        display : "none"
                    });
                }, 'json');
            }
        })
    }
</script>

</html>