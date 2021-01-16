 <!-- Menu Lateral -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center
            justify-content-center" href="{{route('raiz')}}">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-microphone-alt"></i>
         </div>
         <div class="sidebar-brand-text mx-3">AngoBeat</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     


     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="{{route('artista.todas')}}">
             <ion-icon name="mic-outline" style="color: blueviolet;"></ion-icon>
             <span>Artista</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{route('album.todas')}}">
             <ion-icon name="disc-outline" style="color: crimson;"></ion-icon>
             <span>Album</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{route('musica.todas')}}">
             <ion-icon name="musical-note-outline" style="color: darkmagenta;"></ion-icon>
             <span>Música</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="{{route('favorito.todas')}}">
             <ion-icon name="heart-outline" style="color: palevioletred;"></ion-icon>
             <span>Favorito</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="{{route('playlist.todas')}}">
             <ion-icon name="musical-note-outline" style="color: greenyellow;"></ion-icon>
             <span>Playlist</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{route('categoria.todas')}}">
             <ion-icon name="heart-half-outline" style="color: seagreen;"></ion-icon>
             <span>Categoria</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{route('raiz')}}">
             <ion-icon name="person-outline"></ion-icon>
             <span>Usuario</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{route('raiz')}}">
             <ion-icon name="stats-chart-outline" style="color: yellow;"></ion-icon>
             <span>Charts</span>
         </a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Menu Lateral -->
