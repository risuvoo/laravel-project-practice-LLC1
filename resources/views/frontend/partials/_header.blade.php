<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About PPI</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('category','laptop')}}" class="text-white text-decoration-none">Laptop</a></li>

                    @auth
                        <li><a href="{{ route('profile') }}" class="text-white text-decoration-none">Profile ({{ optional(auth()->user())->full_name }})</a></li>
                        <li><a href="{{ route('logout') }}" class="text-white text-decoration-none">Log out</a></li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}" class="text-white text-decoration-none">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-white text-decoration-none">Register</a></li>
                    @endguest

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <strong>PPI ecommerce</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>
