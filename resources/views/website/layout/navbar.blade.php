<nav class="navbar change navbar-expand-lg ">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="index.html">
            <img src="{{asset('')}}assets/website/img/logo/logo.png" class="img-edit" alt="logo">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
          <!-- navbar links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">

                    
                    <a class="nav-link  "  href="{{route('frontend.index')}}" 
                        aria-haspopup="true" aria-expanded="false">Home</a>
               
                </li>
       
                {{-- href="{{route('frontend.project')}} --}}

                <li class="nav-item">
                    <a class="nav-link"  href="{{route('frontend.about')}}">About</a>
                </li>

              
                {{-- <a href='{{ route('about') }}'>About</a> --}}
                {{-- "{{url('registration')}}" --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.project')}}">Project</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.gallery')}}">Gallery</a>
                </li>
               


                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
                </li>
            </ul>


    
        </div>
    </div>
</nav>