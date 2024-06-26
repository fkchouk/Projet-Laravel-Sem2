<!-- SIDEBAR -->
<section id="sidebar">
    <a  class="brand"><i class='bi bi-bus-front icon' style="display:none;" ></i><img src="../images/logo.png" alt="logo" style=" padding: 15px 3px;
        margin: 13px 17px -9px 20px;
        width: 218px;
        height: 128px;" /></a>
    <ul class="side-menu">
        <li><a routerLink="/admin/dashboard" class="active"><i class='bx bxs-dashboard icon' ></i> Tableau de bord</a></li>
        
        <li>
            <a routerLink="/admin/list-gare"><i class="bi bi-building-fill icon" ></i> Gares <i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a routerLink="/admin/ajouter-gare">Ajouter une gare</a></li>
                
            </ul>
        </li>
        <li>
            <a routerLink="/admin/offre"><i class="bi bi-boxes icon"></i> Offres <i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a href="#">Ajouter offre</a></li>
                
            </ul>
        </li>
        <li><a ><i class='bi bi-archive icon' ></i> Demandes</a></li>
        <li>
            <a><i class='bi bi-people-fill icon' ></i> Chauffeures<i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a>ajouter Chauffeures</a></li>
                <li><a >demande de congé</a></li>
            </ul>
        </li>
        <li>
            <a routerLink="/admin/users"><i class='bi bi-people-fill icon' ></i>Users<i class='bx bx-chevron-right icon-right' ></i></a>
            
        </li>
        <li><a><i class='bi bi-calendar4 icon' ></i> Calendrier</a></li>
        <li>
            <a ><i class='bi bi-people-fill icon' ></i>Compte passager<i class='bx bx-chevron-right icon-right' ></i></a>
            
        </li>
        <li>
            <a ><i class='bi bi-bus-front icon' ></i>Trajets<i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a >ajouter trajet</a></li>
                </ul>
        </li>
    </ul>
    <div class="ads">
        <div class="wrapper">
            <a href="#" class="btn-upgrade"><i class="bi bi-arrow-bar-left icon"></i>déconnexion</a>
            
        </div>
    </div>
</section>
<!-- SIDEBAR -->

<!-- NAVBAR -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu toggle-sidebar' ></i>
        <form action="#">
            
        </form>
        <a href="#" class="nav-link">
            <i class='bx bxs-bell icon' ></i>
            <span class="badge">5</span>
        </a>
        <a href="#" class="nav-link">
            <i class='bx bxs-message-square-dots icon' ></i>
            <span class="badge">8</span>
        </a>
        <span class="divider"></span>
        <div class="profile">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            <ul class="profile-link">
                <li><a routerLink="admin/profile"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
                <li><a routerLink="/"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
            </ul>
            
        </div>
    </nav>
</section>
