<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('index') }}">
            <img src="{{ asset('uploadImage/Logo/logo.png') }}" alt="" class="dark-logo">
            <img src=" {{ asset('uploadImage/Logo/logo.png') }}" alt="" class="light-logo">
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
                        <span class="micon dw dw-user2"></span><span class="mtext">Users </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('customer_record') }}">User Record</a></li>
                     
                 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-bus"></span><span class="mtext">Category </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('category.view') }}">New Category</a></li>
                        <li><a href="{{route('categoryrecord.view') }}">Category Record</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-taxi"></span><span class="mtext">Spare Part </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('sparepart.view') }}">New Spare Parts</a></li>
                        <li><a href="{{route('sparepartrecord.View') }}">Spare Part Record</a></li>
                        <li><a href="{{route('stocksummary.view') }}">Stock Summary</a></li>
                        <li><a href="{{route('stockin.view') }}">Stock In</a></li>
                        <li><a href="{{route('stockinRecord.view') }}">Stock-In Record</a></li>

                    </ul>
                </li>
               
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-chat-1"></span><span class="mtext">Notification </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('push_Notification.view')}}">Push Notification</a></li>
                        <li><a href="{{route('Notificationrecord.View')}}">Push Notification Record</a></li>

                        <li><a href="{{route('vehicle_Tips.view')}}">Vehicle Tips</a></li>
                        <li><a href="{{route('vehicletipsrecord.View')}}">Vehicle Tips Record</a></li>
                     
                    </ul>
                </li>
                  <li>
                    <a href="{{ route('ActivityLog.view') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-engineer"></span><span class="mtext">Request</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('ActivityLog.view') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-database"></span><span class="mtext">Activity Log</span>
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