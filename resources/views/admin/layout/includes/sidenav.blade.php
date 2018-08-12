{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>

            <li><a href="{{route('profile.index')}}"><i class="glyphicon glyphicon-user"></i>
                    player profile</a></li>
                    
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Teams
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('auction.index')}}">Auction Teams</a></li>
                    <li><a href="{{route('batch.index')}}">Batch Teams</a></li>
                    <li><a href="{{route('manager.index')}}">Managers</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                <i class="glyphicon glyphicon-list"></i> Tournament
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('tournament.index')}}">Tournament</a></li>
                    <li><a href="{{route('schedule.index')}}">Match Schedule</a></li>
                    <li><a href="{{route('score.index')}}">Score Card</a></li>
                </ul>

            </li>
             <li><a href="{{route('gallery.index')}}"><i class="glyphicon glyphicon-user"></i>
                    Gallery</a></li>
              <li><a href="{{route('live.index')}}"><i class="glyphicon glyphicon-user"></i>
                    Live</a></li>      
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->