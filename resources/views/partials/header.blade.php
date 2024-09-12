<div id="header"
class="mdk-header js-mdk-header mb-0"
data-fixed>
<div class="mdk-header__content">

   <!-- Navbar -->

   <div class="navbar navbar-expand pr-0 navbar-light bg-white navbar-shadow"
        id="default-navbar"
        data-primary>

       <!-- Navbar Toggler -->

       <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
               type="button"
               data-toggle="sidebar">
           <span class="material-icons">short_text</span>
       </button>

       <!-- // END Navbar Toggler -->

       <!-- Navbar Brand -->

       <a href="{{ url('/') }}"
          class="navbar-brand mr-16pt">

           <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

               <span class="avatar-title rounded bg-primary">
                    <img src="{{ asset('public/images/illustration/student/128/white.svg') }}"
                        alt="logo"
                        class="img-fluid" />
                </span>

           </span>

           {{-- <span class="d-none d-lg-block">قرءاني</span> --}}
       </a>

       <!-- // END Navbar Brand -->


       <!-- Navbar Search -->

       {{-- <form class="search-form navbar-search d-none d-md-flex mr-16pt"
             action="index.html">
           <button class="btn"
                   type="submit"><i class="material-icons">search</i></button>
           <input type="text"
                  class="form-control"
                  placeholder="Search ...">
       </form> --}}

       <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item {{ Request::is('test') ? 'active' : '' }}">
                <a href="{{ url('/test') }}" class="nav-link">القرءان الكريم</a>
            </li>
        </ul>
    

       <!-- // END Navbar Search -->

       <div class="flex"></div>

       <!-- Navbar Menu -->

        @auth
            <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link d-flex align-items-center dropdown-toggle"
                        data-toggle="dropdown"
                        data-caret="false">

                        <span class="avatar avatar-sm mr-8pt2">

                            <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                        </span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header"><strong>الحساب</strong></div>
                        <a class="dropdown-item"
                            href="edit-account.html">تعديل الحساب</a>
                        <a class="dropdown-item"
                            href="login.html">تسجيل الخروج</a>
                    </div>
                </div>
            </div>
        @else
            <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">
                <a href="{{ url('login') }}" class="btn btn-primary">تسجيل الدخول</a>
            </div>
        @endauth
       

       <!-- // END Navbar Menu -->

   </div>

   <!-- // END Navbar -->

</div>
</div>