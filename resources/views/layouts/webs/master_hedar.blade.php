<div class="andro_header-middle">
    <div class="container">
        <nav class="navbar">
            <!-- Logo -->
            <a class="navbar-brand" href="index-2.html"> <img src="{{ URL::asset('web/assets/img/logo.png')}}" alt="logo"> </a>
            <!-- Search Form -->
            <div class="andro_search-adv">
                <form method="get" action="{{ URL('search') }}">
                    <div class="andro_search-adv-cats">
                        <span>All Categories</span>

                    </div>
                    <div class="andro_search-adv-input">

                        <input type="text" class="form-control" placeholder="Search for book" name="search">
                        <button type="submit" name="button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="andro_header-controls">

                <!-- Toggler -->
                <div class="aside-toggler aside-trigger-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Middle Header End -->
<!-- Bottom Header Start -->
<div class="andro_header-bottom">
    <div class="container">
        <div class="andro_header-bottom-inner">
            <div class="andro_category-mm">
               <div>
                   <ul>
                       <li> <a href="{{ URl('/user') }}">Home</a></li>
                   </ul>
               </div>

            </div>
            <!-- Menu -->

            <!-- Side navigation toggle -->

        </div>
    </div>
</div>
