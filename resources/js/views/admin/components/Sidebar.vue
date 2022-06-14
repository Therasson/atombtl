<template>
    <ul
      class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
      id="accordionSidebar"
    >
      <!-- Sidebar - Brand -->
      <router-link
        class="sidebar-brand d-flex align-items-center justify-content-center"
        to="/"
      >
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </router-link>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <router-link class="nav-link" to="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></router-link
        >
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">Interface</div>

      <!-- MENU ADMIN-->
      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseArea"
          aria-expanded="true"
          aria-controls="collapseArea"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Zones</span>
        </a>
        <div
          id="collapseArea"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des zones</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter une zone</router-link>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Secteurs</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des secteurs</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter une secteur</router-link>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Responsables</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des Responsables</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter un responsable</router-link>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Routing</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des routing</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter un routing</router-link>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Points de ventes</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des PDV</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter un PDV</router-link>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Merchandisers</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des merc</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter un merchan</router-link>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Produits</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des produits</router-link>
            <router-link class="collapse-item" to="/admin/areas/create">Ajouter un produit</router-link>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Visites</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/admin/areas">Liste des produits</router-link>
          </div>
        </div>
      </li>
      
      
      
      
      
      
      
      
      
      
      
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseTwo"
          aria-expanded="true"
          aria-controls="collapseTwo"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <router-link class="collapse-item" to="/admin/components/buttons">Buttons</router-link>
            <router-link class="collapse-item" to="/admin/components/cards">Cards</router-link>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapseUtilities"
          aria-expanded="true"
          aria-controls="collapseUtilities"
        >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div
          id="collapseUtilities"
          class="collapse"
          aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <router-link class="collapse-item" to="/admin/utilities/colors">Colors</router-link>
            <router-link class="collapse-item" to="/admin/utilities/borders">Borders</router-link>
            <router-link class="collapse-item" to="/admin/utilities/animations"
              >Animations</router-link
            >
            <router-link class="collapse-item" to="/admin/utilities/other">Other</router-link>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider" /> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">Addons</div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          data-toggle="collapse"
          data-target="#collapsePages"
          aria-expanded="true"
          aria-controls="collapsePages"
        >
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div
          id="collapsePages"
          class="collapse"
          aria-labelledby="headingPages"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Other Pages:</h6>
            <router-link class="collapse-item" to="/admin/pages/page-not-found">404 Page</router-link>
            <router-link class="collapse-item" to="/admin/pages/blank">Blank Page</router-link>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <router-link class="nav-link" to="/admin/charts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></router-link
        >
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <router-link class="nav-link" to="/admin/tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></router-link
        >
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block" /> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->
    </ul>
    <!-- End of Sidebar -->
</template>

<script>

export default {
    name: 'Sidebar'
}
</script>
