<nav id="navbar-example2" class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">Darwin's Blog</a>
	<ul class="nav justify-content-end">
		 <li class="nav-item">
			 <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="/">Home</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About</a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
		 </li>
		 <li class="nav-item">
				 <div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Account
						</button>
						<div class="dropdown-menu">
							 <a class="dropdown-item" href="#">Action</a>
							 <a class="dropdown-item" href="#">Another action</a>
							 <a class="dropdown-item" href="#">Something else here</a>
							 <div class="dropdown-divider"></div>
							 <a class="dropdown-item" href="#">Separated link</a>
						</div>
				 </div>
		 </li>
	 </ul>
</nav>