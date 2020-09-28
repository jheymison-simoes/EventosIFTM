<?php 
/**
 * Funcção front-end do menu
 *
 * @return void
 */
function menu() { ?>
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Eventos IFTM
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?sec=home"> 
                                Home<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=create_events">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=list_events">Participar de Eventos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<?php } ?>