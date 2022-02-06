<div>
    <div class="navbar navbar-default navbar-fixed-top navb">
                


        <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div id="mainMenuMaster">
                <div class="right clearfix">
                    <ul class="nav navbar-nav pull-right right-navbar-nav">
                    </ul>
                </div>

            
            <ul class="nav navbar-nav">
                <li></li>
@can('browse',app('App\Models\Appointment'))
<li class="dropdown" runat="server" id="m1">
    <a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="menu-icon fa fa-group">&nbsp;&nbsp;</span>
        appointments </a><ul class="dropdown-menu">
            <li>
                <a href="{{ url($Todaysmoeeed)}}">
                    <span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>
             Todays appointments</a>
                </li>
                <li>
                    <a href="{{ url($Allmoeeed)}}">
                        <span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>
                 All appointments</a>
                    </li>
                  
            </ul>
        </li>
@endcan
             
          
<!------>
@can('add',app('App\Models\Appointment'))
<li class="dropdown" runat="server" id="m1">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <span class="menu-icon fa fa-group">&nbsp;&nbsp;</span>
    (Add - View) appointments</a><ul class="dropdown-menu">
 
        @can('add',app('App\Models\Appointment'))
        <li>
            <a href="{{ url($Addappointment)}}">
                <span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>
         Add appointment</a>
            </li>  
        @endcan
           
       
   
            <li>
                <a href="{{ url($mymoeeed)}}">
                    <span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>
             View inserted appointments</a>
                </li>
            
        </ul>
    </li> 
@endcan

<li>
    @can('statstics',app('App\Models\Appointment'))
    <a href="{{ url($Statsticsurl)}}">
        <span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>
 Statstics</a>
        </li>  
    @endcan

    </li>

<!----->
                      
                                <li class="dropdown" runat="server" id="m2">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="menu-icon fa fa-ambulance">&nbsp;&nbsp;</span>
                                        Settings</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                @can('browse',app('TCG\Voyager\Models\Role'))
                                                <a href="{{ url($Users_permissions_url)}}" >
                                                    <span class="menu-icon fa fa-search">&nbsp;&nbsp;
                                                        </span>Users Permissions</a>
                                                    </li>  
                                                @endcan
                                             
                                                    <li>
                                                        @can('browse', app('TCG\Voyager\Models\User'))
                                                        <a href="{{url($Users_edit_view_url)}}">
                                                            <span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Users(edit-view)
                                                </a>  
                                                             @endcan
                                                             @can('browse', app('App\Models\Orginzations'))
                                                             <a href="{{ url($orginzations_url)}}">
                                                                <span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Orginzations(edit-view)
                                                    </a>
                                                             @endcan
                                                  
                                         @can('browse', app('App\Models\Nationality'))
                                         <a href="{{ url($Nationalitys_edit_view_url)}}">
                                            <span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Nationalitys(edit-view)
                                </a>
                                         @endcan
                                   
                                                        </li>
                                                       </ul>
                                                            </li>
                                                            



<!------->
<li class="dropdown" runat="server" id="m2">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="menu-icon fa fa-ambulance">&nbsp;&nbsp;</span>
        {{$username}}</a>
        <ul class="dropdown-menu">
            <li>
                <a href="#" wire:click.prevent="logout" >
                    <span class="menu-icon fa fa-search"
                    
                    >&nbsp;&nbsp;
                        </span>Logout</a>
                    </li>  
                    <li>
                        
                        <a href="{{ url('admin/my-profile')}}" >
                            <span class="menu-icon fa fa-search"
                            
                            >&nbsp;&nbsp;
                                </span>Profile</a>
                            </li> 
                                                   
              
                       </ul>
                            </li>
<!----->

                                                           
                                                            </div>
        </div>
        
        
    </div>
</div>
