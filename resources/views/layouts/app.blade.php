 > <!DOCTYPE html>                                                                                     
   <html lang="en">                                                                                    
   <head>                                                                                              
       <meta charset="UTF-8">                                                                          
       <meta name="viewport" content="width=device-width, initial-scale=1.0">                          
       <title>Academic Portal</title>                                                                  
       <link rel="stylesheet"                                                                          
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">                   
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">                                       
       @yield('styles')                                                                                
   </head>                                                                                             
   <body>                                                                                              
       <div class="navbar-top">                                                                        
           <div class="list-sidebar" id="sidebarToggle">                                               
               <i class="fa-solid fa-bars"></i>                                                        
           </div>                                                                                      
           <div class="profile">                                                                       
               <ul>                                                                                    
                   <li class="profile-text">                                                           
                       <span class="profile-name">{{ auth()->user()->name }}</span>                    
                       <span class="profile-role">{{ ucfirst(auth()->user()->role) }}</span>           
                   </li>                                                                               
                   <li><a href="#"><img src="{{ asset('img/profile.png') }}" alt="profile"></a></li>   
               </ul>                                                                                   
           </div>                                                                                      
       </div>                                                                                          
                                                                                                       
       <div class="sidebar" id="sidebar">                                                              
           <div class="logo">                                                                          
               <img src="{{ asset('img/logo.png') }}" alt="logo">                                      
           </div>                                                                                      
           <div class="menu">                                                                          
               <p>MENU</p>                                                                             
               <ul>                                                                                    
                   @if (auth()->user()->role === 'admin')                                              
                       <li><a href="{{ route('mahasiswa.index') }}" class="{{                          
   request()->routeIs('mahasiswa.*') ? 'active' : '' }}"><i class="fa-solid                            
   fa-graduation-cap"></i>Mahasiswa</a></li>                                                           
                       <li><a href="{{ route('dosen.index') }}" class="{{                              
   request()->routeIs('dosen.*') ? 'active' : '' }}"><i class="fa-solid                                
   fa-user-graduate"></i>Dosen</a></li>                                                                
                       <li><a href="{{ route('matakuliah.index') }}" class="{{                         
   request()->routeIs('matakuliah.*') ? 'active' : '' }}"><i class="fa-solid                           
   fa-book"></i>Matakuliah</a></li>                                                                    
                   @endif                                                                              
                   <li><a href="{{ route('jadwal.index') }}" class="{{ request()->routeIs('jadwal.*')  
   ? 'active' : '' }}"><i class="fa-solid fa-calendar"></i>Jadwal</a></li>                             
                   <li><a href="{{ route('krs.index') }}" class="{{ request()->routeIs('krs.*') ?      
   'active' : '' }}"><i class="fa-solid fa-list"></i>KRS</a></li>                                      
               </ul>                                                                                   
               <div class="menu-logout">                                                               
                   <p>OTHER</p>                                                                        
                   <ul>                                                                                
                       <li>                                                                            
                           <a href="#" id="logoutLink">                                                
                               <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout              
                           </a>                                                                        
                       </li>                                                                           
                   </ul>                                                                               
               </div>                                                                                  
           </div>                                                                                      
       </div>                                                                                          
                                                                                                       
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">     
           @csrf                                                                                       
       </form>                                                                                         
                                                                                                       
       @yield('content')                                                                               
       <script src="{{ asset('js/index.js') }}"></script>                                              
   </body>                                                                                             
   </html>