<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index"><img src="{{asset('/')}}assets/assets/images/logo.png" width="25" alt="NIC"><span class="m-l-1">
                </span></a>
    </div>

   
    <div class="menu">
    
        <ul class="list">
                <li>
                    <div class="user-info">
                        <a class="image" href="profile"><img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="avatar"></a> 
                        <div class="detail">
                            <h4> {{ Auth::user()->name }}</h4>
                                                
                        </div>
                    </div>
                </li>
            
            <li>
               <a href="{{ route('home') }}">
                  <i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            
           
            @can('can_apply')
            <li>
               <a href="{{route('user.profile')}}"><i class="zmdi zmdi-account"></i><span>My Profile</span></a>
            </li>


          
            @endcan

            @can('accept_challenge')
            <li><a href="{{ route('admin.applications') }}" class="menu" data-placement="top"
                    title="view applications"><i class="zmdi zmdi-menu"></i><span>Mannage   Submissions</span></a>
               
            </li>
            @endcan
          

            @can('manage_users')
            <li>
                <a href="{{route('admin.users')}}" class="menu" data-toggle="tooltip" data-placement="top"
                    title="create,edit users"><i class="zmdi zmdi-lock">
                    </i><span>Manage User</span>
                </a>
<!-- 
                    <ul class="ml-menu">
                        <li>
                            <a href="">Users</a>
                        </li>
                    </ul> -->

            </li>



            <li>
               <a href="{{ route('admin.contests') }}" data-toggle="tooltip" data-placement="top"
                    title="create,edit contests"><i class="zmdi zmdi-collection-text"></i><span>Contests</span>
                </a>
            </li>
            @endcan

        </ul>
    </div>
</aside>
