<div :class="{sidebar: !activeMenuShow, activeMenu: activeMenuShow}">
    <nav :class="{'sidebar-nav':!activeMenuShow, 'menuShow': activeMenuShow}">
        <ul :class="{nav:!activeMenuShow}">
            <li @click='menu=1,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow }">
               <a :class="{'nav-link':!activeMenuShow, 'nav-dropdown-toggle':!activeMenuShow}" href="#">
                   <i :class="{'icon-basket':!activeMenuShow, 'iconos icon1':activeMenuShow}"></i>VENTAS</a>  
            </li>
            <li @click='menu=2,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                <a :class="{'nav-link':!activeMenuShow,'nav-dropdown-toggle':!activeMenuShow}" href="#"><i :class="{'icon-list':!activeMenuShow, 'iconos icon2':activeMenuShow}"></i>PEDIDOS</a>  
            </li>
            <li :class="{'nav-item':!activeMenuShow, 'nav-dropdown':!activeMenuShow,'menu-item':activeMenuShow}">
                <a :class="{'nav-link':!activeMenuShow,'nav-dropdown-toggle':!activeMenuShow}" href="#"><i :class="{'fas fa-boxes':!activeMenuShow, 'iconos icon3':activeMenuShow}"></i> INGRESO DE INVENTARIO</a>            
                <ul @click='menu=3' :class="{'nav-dropdown-items':!activeMenuShow, 'sub-menu':activeMenuShow}">
                    <li :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                        <a :class="{'nav-link':!activeMenuShow}" href="i#"><i :class="{'icon-list':!activeMenuShow}"></i>INVENTARIO</a>
                    </li>
                    <li @click='menu=4' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                         <a :class="{'nav-link':!activeMenuShow}" href="#"><i :class="{'icon-notebook':!activeMenuShow}"></i> PROVEEDORES</a>
                    </li>
                </ul>
            </li> 
            <li @click='menu=1,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow }">
               <a :class="{'nav-link':!activeMenuShow, 'nav-dropdown-toggle':!activeMenuShow}" href="#">
                   <i :class="{'icon-bag':!activeMenuShow, 'iconos icon4':activeMenuShow}"></i>CLIENTES</a>  
            </li>
            <li :class="{'nav-item':!activeMenuShow, 'nav-dropdown':!activeMenuShow,'menu-item':activeMenuShow}">
                <a :class="{'nav-link':!activeMenuShow,'nav-dropdown-toggle':!activeMenuShow}" href="#"><i :class="{'icon-wallet':!activeMenuShow, 'iconos icon5':activeMenuShow}"></i>PRODUCTO</a>            
                <ul @click='menu=3' :class="{'nav-dropdown-items':!activeMenuShow, 'sub-menu':activeMenuShow}">
                    <li :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                        <a :class="{'nav-link':!activeMenuShow}" href="i#"><i :class="{'icon-wallet':!activeMenuShow}"></i>VER PRODUCTOS</a>
                    </li>
                    <li @click='menu=4' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                         <a :class="{'nav-link':!activeMenuShow}" href="#"><i :class="{'icon-notebook':!activeMenuShow}"></i>CLASIFICACIÓN</a>
                    </li>
                    <li @click='menu=4' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                         <a :class="{'nav-link':!activeMenuShow}" href="#"><i :class="{'icon-notebook':!activeMenuShow}"></i>PRESENTACIÓN</a>
                    </li>
                    <li @click='menu=4' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                         <a :class="{'nav-link':!activeMenuShow}" href="#"><i :class="{'icon-notebook':!activeMenuShow}"></i>TIPO DE PRODUCTO</a>
                    </li>
                </ul>
            </li> 
            <li @click='menu=1,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow }">
               <a :class="{'nav-link':!activeMenuShow, 'nav-dropdown-toggle':!activeMenuShow}" href="#">
                   <i :class="{'icon-bag':!activeMenuShow, 'iconos icon6':activeMenuShow}"></i>BUSCAR PRODUCTO</a>  
            </li>
        
            
            <li @click='menu=1,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow }">
               <a :class="{'nav-link':!activeMenuShow, 'nav-dropdown-toggle':!activeMenuShow}" href="#">
                   <i :class="{'icon-bag':!activeMenuShow, 'iconos icon7':activeMenuShow}"></i>OFERTAS</a>  
            </li>
            <li :class="{'nav-item':!activeMenuShow, 'nav-dropdown':!activeMenuShow,'menu-item':activeMenuShow}">
                <a :class="{'nav-link':!activeMenuShow,'nav-dropdown-toggle':!activeMenuShow}" href="#"><i :class="{'icon-wallet':!activeMenuShow, 'iconos icon8':activeMenuShow}"></i>USUARIO</a>            
                <ul @click='menu=3' :class="{'nav-dropdown-items':!activeMenuShow, 'sub-menu':activeMenuShow}">
                    <li :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                        <a :class="{'nav-link':!activeMenuShow}" href="i#"><i :class="{'icon-wallet':!activeMenuShow}"></i>USUARIOS</a>
                    </li>
                    <li @click='menu=4' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                         <a :class="{'nav-link':!activeMenuShow}" href="#"><i :class="{'icon-notebook':!activeMenuShow}"></i>ROLES</a>
                    </li>
                                      
                </ul>
            </li> 
            <li @click='menu=2,activeMenuShow=false' :class="{'nav-item':!activeMenuShow,'menu-item':activeMenuShow}">
                <a :class="{'nav-link':!activeMenuShow,'nav-dropdown-toggle':!activeMenuShow}" href="#"><i :class="{'icon-bag':!activeMenuShow, 'iconos icon9':activeMenuShow}"></i>REPORTES</a>  
            </li>
            
        </ul>
    </nav>
</div>
