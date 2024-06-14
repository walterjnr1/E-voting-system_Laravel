<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('index') }}">
            <img src="{{ asset('uploadImage/Logo/logo.png') }}" alt="" class="dark-logo" width="88" height="88">
            <img src=" {{ asset('uploadImage/Logo/logo.png') }}" alt="" class="light-logo" width="88" height="88">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ url('') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house 1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user-2"></span><span class="mtext">Account </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('registration.view') }}">Add Admin</a></li>
                        <li><a href="{{ route('Admin_record.view') }}">Admin Record</a></li>
                 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user2"></span><span class="mtext">Voter </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('voterRecord.view') }}">Voter Record</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user"></span><span class="mtext">Candidate </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('customer_record') }}">Candidate Record</a></li>
                     
                 
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-election
                        "></span><span class="mtext">Votes</span>
                    </a>
                </li>
                 <li>
                    <a href="{{ route('logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout"></span><span class="mtext">Logout</span>
                    </a>
                </li>

                 </ul>
        </div>
    </div>
</div>