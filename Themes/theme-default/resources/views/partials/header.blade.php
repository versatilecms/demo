<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu">
        {{ menu('primary', 'v-theme::partials.menu-left') }}
    </ul>

    <hr />

    <ul class="vertical menu">
        @include('v-theme::partials.menu-right')
    </ul>

    <hr />

    <ul class="menu social-icons align-center">
        {{ menu('social', 'v-theme::partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('v-theme::partials.search-box')
                </div> <!-- /.cell -->
            </div> <!-- /.grid -->
        </div> <!-- /.container -->
    </div> <!-- /.header-site-search -->

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                <i class="fas fa-bars"></i> <span>Menu</span>
            </a>

            <a href="#" class="search-icon-mobile float-right hide-for-medium" data-toggle-search-trigger>
                <i class="fas fa-search"></i>
            </a>

            <div class="header-logo float-left">
                <a href="{{ url('/') }}">
                    <img src="/themes/theme-default/images/logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
                </a>
            </div> <!-- /.header-logo -->

            <ul class="menu show-for-medium">
                {{ menu('primary', 'v-theme::partials.menu-left') }}
            </ul> <!-- /.menu -->
        </div> <!-- /.top-bar-left -->

        <div class="top-bar-right show-for-medium">
            <ul class="menu">
                @include('v-theme::partials.menu-right')
            </ul> <!-- /.menu -->
        </div> <!-- /.top-bar-right -->
    </div> <!-- /.top-bar -->
