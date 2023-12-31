 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="/">Deni Rudini</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="/">Home</a>
       </li>
       <li class="nav-item">
         <a href="/komik" class="nav-link">Komik</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/pages/about">About</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/pages/contact">Contact</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/orang">Orang</a>
       </li>
       <?php if (logged_in()) : ?>
         <a class="nav-item nav-link" href="/logout">Logout</a>
       <?php else : ?>
         <a class="nav-item nav-link" href="/login">Login</a>
       <?php endif; ?>
     </ul>
   </div>
 </nav>