 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
        

         

         

          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/dashbord')?'active':'' }}" href="" > Dashbord </a>
           
         

         
<li>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catagory
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item {{request()->is('catagory/create')?'active':''}}" href="{{route('catagory.create')}}">Add catagory</a>
          <a class="dropdown-item {{ request()->is('catagory/manage')?'active':'' }}" href="{{route('catagory.manage')}}">Manage catagory</a>
           </div>
</li>

<li>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          post
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item {{request()->is('post/create')?'active':''}}" href="{{route('post.create')}}">Add post</a>
          <a class="dropdown-item {{ request()->is('post/manage')?'active':'' }}" href="{{route('post.manage')}}">Manage post</a>
           </div>
</li>
        
        
       
       
          

          <li class="nav-item">
            <a class="nav-link text-primary">Welome {{Auth()->user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>