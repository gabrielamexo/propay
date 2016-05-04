<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="containerk">
      <!-- Menu button for smallar screens -->
		<div class="navbar-header">
		  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a href="index.html" class="navbar-brand">Propay <span class="bold">Evaluation</span></a>
		</div>
      <!-- Site name for smallar screens -->
      

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">     



        <!-- Links -->
        @if (!Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              {{ Auth::user()->name }}  <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="{{ url('/logout') }}"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          @endif







          
        </ul>


		</nav>
      </div>

    </div>