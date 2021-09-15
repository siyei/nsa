<?php
switch($GLOBALS['menu']){
    case 0 : $a = 'class="active"'; break;
    case 1 : $b = 'class="active"'; break;
    case 2 : $c = 'class="active"'; break;
    case 3 : $d = 'class="active"'; break;
    case 4 : $e = 'class="active"'; break;
    case 5 : $f = 'class="active"'; break;
    case 6 : $g = 'class="active"'; break;
    case 7 : $h = 'class="active"'; break;
}
?>
<div class="logo">
    <a href="/tablero" class="logo-text">
        <?=APP_NAME?>
    </a>
</div>

<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="<?=$_SESSION['sfoto'];?>" id="avatar">
        </div>
        <div class="info">
            <a class="collapsed" id="mnombre">
                Hola <?=$_SESSION['snombre'];?>
            </a>
        </div>
    </div>

    <ul class="nav">
        <li <?=$a?>>
            <a href="/usuarios">
                <i class="pe-7s-users"></i>
                <p>Usuarios</p>
            </a>
        </li>
        <!-- <li>
            <a href="/listbannerhome">
                <i class="pe-7s-photo"></i>
                <p>Banner Home</p>
            </a>
        </li> -->
        <li <?=$c?>>
            <a href="/listdestinos">
                <i class="pe-7s-network"></i>
                <p>Destinos</p>
            </a>
        </li>
        <li <?=$d?>>
            <a href="/listturismo">
                <i class="pe-7s-network"></i>
                <p>Turismo</p>
            </a>
        </li>
        <li <?=$e?>>
            <a href="/listpais">
                <i class="pe-7s-network"></i>
                <p>Países</p>
            </a>
        </li>
        <li>
            <a href="/logout">
                <i class="pe-7s-power"></i>
                <p>Salir</p>
            </a>
        </li>
        
    </ul>
</div>