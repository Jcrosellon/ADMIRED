<!-- <head>
    <link type="image/x-icon" href="./assets/img/logos/logo.png" rel="icon">
    <!--Bootstrap css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--My style css-->
<link href="../../assets/css/style.css" rel="stylesheet">
</head>

<!--Container preload-->
<div class="preload" id="preload">
    <div class="spinner-grow text-primary position-absolute top-50 start-50" role="status">
        <span class="visually-hidden">Cargando...</span>
    </div>
</div>
<!--Container preload-->


<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Listado</h4>
                        <div class="col-15">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive mt-2">
                                        <!--btn add-->
                                        <div class="d-flex">
                                            <button type="button" onclick="createUser()" class="btn btn-success"><img
                                                    class="img img-fluid"
                                                    src="../../assets/img/icons/plus-square-fill.svg">
                                                Crear usuario</button>
                                        </div>
                                        <hr>
                                        <table class="table table-dark table-striped table-hover">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>NAME</th>
                                                    <th>NICKNAME</th>
                                                    <th>IMG</th>
                                                    <th>VALUE</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                            <tfoot>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>NAME</th>
                                                    <th>NICKNAME</th>
                                                    <th>IMG</th>
                                                    <th>VALUE</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </tfoot>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

        </div> <!-- end container-fluid -->

        <!--Container modal-->
        <!-- Modal -->
        <div class="modal fade" id="modalApp" tabindex="-1" aria-labelledby="modalAppLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAppLabel">USER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form action id="formUser">
                            <input type="hidden" class="form-control" id="id" value>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                                <label for="name">NAME</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nickname" placeholder="Nickname">
                                <label for="nickname" required>NICKNAME</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="img" placeholder="IMG" required>
                                <label for="img" required>IMG</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="valor" placeholder="value" required>
                                <label for="value" required>VALUE</label>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btnSubmit" form="formUser" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Container modal-->

    </div> <!-- end content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--Script RFC4122-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/node-uuid/1.4.7/uuid.min.js"></script>
    <!--Script my script-->
    <script src="../../assets/js/FirebaseGame.js"></script>
    <!--Script my script-->
    <script src="../../assets/js/main.js"></script>
</div>