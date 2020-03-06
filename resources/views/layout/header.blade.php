<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">Roma's Haus</a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ request()->is('properties') ? 'active' : '' }}"><a href="properties">Properties</a></li>
                <li class="{{ request()->is('agents') ? 'active' : '' }}"><a href="agents">Agents</a></li>
                <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="about">About</a></li>
                <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="contact">Contact</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Address</h5>
                <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                <h5>Connect</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
