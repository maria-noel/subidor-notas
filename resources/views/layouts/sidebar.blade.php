<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Admistración
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/notas">
              <i class="material-icons">notas</i>
              <p>Ver todas las notas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/comisiones">
              <i class="material-icons">comisiones</i>
              <p>Ver comisiones</p>
            </a>
          </li>
          
        </ul>
      </div>
    <div class="sidebar-background" style="background-image: url( {{ asset('img/sidebar-1.jpg') }} )"></div></div>