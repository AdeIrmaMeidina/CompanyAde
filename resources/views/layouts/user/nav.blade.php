<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">Prima Mandiri</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{url('about')}}" class="nav-item nav-link">About</a>
            <a href="{{url('services')}}" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{url('team')}}" class="dropdown-item">Our Team</a>
                    <a href="{{url('testimonial')}}" class="dropdown-item">Testimonial</a>

                </div>
            </div>
            <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
