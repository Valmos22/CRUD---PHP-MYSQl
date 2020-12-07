<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>

<main class="container p-4">
    <div class="row row-cols-3">
        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-b.udemycdn.com/course/240x135/1075334_8b5f_4.jpg?secure=Hrs-YOFwX2SAaY81iIW-2Q%3D%3D%2C1606563455"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="Angular: Desde cero a experto + 15 proyectos jajajaja"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">Angular: Desde cero a experto + 15 proyectos jajajaja</h5>
                            <p class="card-text">$ 50.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-a.udemycdn.com/course/240x135/782428_b5cf_4.jpg?_UZmRyG2CSoNyNmgUBa1lkncytFkXWOuaK3z6EpDubl8_7gdSwmDLtg6UkKfxCw0LHa3-PUxEqaxvMk4Lzar27cFNec2uLLAAqpA-PHVhIG3G_9H1IHImvhgHxRA5H0"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="Diseño Web Profesional El Curso Completo, Práctico y desde 0"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">Diseño Web Profesional El Curso Completo, Práctico y desde 0</h5>
                            <p class="card-text">$ 60.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-b.udemycdn.com/course/240x135/672600_1def_7.jpg?secure=Bvr-7xuIGIXFGuW0F_q1oQ%3D%3D%2C1606554269"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="PHP 7 y MYSQL: El Curso Completo, Práctico y Desde Cero !"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">PHP 7 y MYSQL: El Curso Completo, Práctico y Desde Cero !</h5>
                            <p class="card-text">$ 100.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-b.udemycdn.com/course/240x135/1509816_dff8.jpg?secure=Nb3DfVpx1AFQdolS_1M1oA%3D%3D%2C1606568258"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="JavaScript Moderno Guía Definitiva Construye +15 Proyectos"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">JavaScript Moderno Guía Definitiva Construye +15 Proyectos</h5>
                            <p class="card-text">$ 100.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-a.udemycdn.com/course/240x135/1756340_0543_4.jpg?Fty2AMou-pxDnsuvoODvS4njNb6l31HWLao7DrpI7isJUaaN0DDORrQTfWxmPQ3S4f-Zag0KzD27enZiRpPWcywBVK_8G8F87PBALTuLpilNYUcV3_U7Vwxk2B9fZaxf"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="React - La Guía Completa: Hooks Context Redux MERN +15 Apps"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">React - La Guía Completa: Hooks Context Redux MERN +15 Apps</h5>
                            <p class="card-text">$ 100.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-radius:20px; box-shadow: 10px 10px 5px grey;">
                    <img src="https://img-a.udemycdn.com/course/240x135/1467412_94b5_11.jpg?eiHQ5t362GOdfglRrwjuPo-DruynFMTmSUrmHJUJ36kitzyKT_M9DJQWKmyfvMZnXN1vGeDuo5sS_8werq2QfcIoRG4r586CnSlZn3DGJNzOd5KR7kdioiyqtgYX2RT6Cw"
                        class="card-img-top" alt="..." style="border-radius:20px;">
                    <div class="card-body">
                        <form action="save_curso.php" method="POST">
                            <!-- nombre -->
                            <div class="form-group">
                                <input type="hidden" name="nombre" class="form-control" value="Crea sistemas POS Inventarios y ventas con PHP 7 y AdminLTE"
                                    autofocus>
                                <input type="hidden" name="usuario" value="1">
                            </div>
                            <h5 class="card-title">Crea sistemas POS Inventarios y ventas con PHP 7 y AdminLTE</h5>
                            <p class="card-text">$ 100.000</p>
                            <input type="submit" style="box-shadow: 4px 6px 8px grey;" name="save_curso" class="btn btn-outline-dark rounded-pill" value="Obtener">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php'); ?>