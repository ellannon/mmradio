<header class="container-fluid navbar">
   <div class="row w-100">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
               <ul class="navbar-nav w-100 justify-content-end">
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'quienes-somos'])}}">
                        {!!trans('home.menu-quienes-somos')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'mmr-a-la-carta'])}}">
                        {!!trans('home.menu-mmr-a-la-carta')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'programacion'])}}">
                        {!!trans('home.menu-programacion')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'contactanos'])}}">
                        {!!trans('home.menu-contactanos')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'apps-de-descarga'])}}">
                        {!!trans('home.menu-apps-de-descarga')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'dawa-en-accion-red-de-repetidores'])}}">
                        {!!trans('home.menu-dawa-en-accion-red-de-repetidores')!!}
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('pagina', ['slug' => 'colabora-con-nosotros'])}}">
                        {!!trans('home.menu-colabora-con-nosotros')!!}
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>
