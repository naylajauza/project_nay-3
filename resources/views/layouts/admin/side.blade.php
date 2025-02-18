    <!--start sidebar-->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="{{ asset('assets/back/images/logo-icon.png') }}" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">admin bimbel</h5>
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav">
            <!--navigation-->
            <ul class="metismenu" id="sidenav">
                <li>
                    <a href="{{ url('/') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{ route('users.index') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">person</i>
                        </div>
                        <div class="menu-title">User Management</div>
                    </a> --}}
                </li>
                <li class="menu-label">Data Master</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">api</i>
                        </div>
                        <div class="menu-title">Data Master</div>
                    </a>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                          <div class="parent-icon"><i class="material-icons-outlined">list</i>
                          </div>
                          <div class="menu-title">Table</div>
                        </a>
                        <ul>
                          <li><a href="{{route('user.index')}}"><i class="material-icons-outlined">arrow_right</i>User</a>
                          </li>
                          <li><a href="{{route('artikel.index')}}"><i class="material-icons-outlined">arrow_right</i>Artikel</a>
                          </li>
                          <li><a href="{{route('kategori.index')}}"><i class="material-icons-outlined">arrow_right</i>Kategori</a>
                          </li>
                          <li><a href="{{route('kursus.index')}}"><i class="material-icons-outlined">arrow_right</i>Kursus</a>
                          </li>
                          <li><a href="{{route('pendaftaran.index')}}"><i class="material-icons-outlined">arrow_right</i>Pendaftaran</a>
                          </li>
                          <li><a href="{{route('testimoni.index')}}"><i class="material-icons-outlined">arrow_right</i>Testimoni</a>
                          </li>
                        </ul>
                      </li>
                    <ul>
                        {{-- <li>
                            <a href="{{ route('roles.index') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Roles</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Categories</a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
    </aside>
    <!--end sidebar-->
