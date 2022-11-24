<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href=" {{ Route('dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="mailbox.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Admin</label>
        <!-------------------------- Award -------------------------->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Award</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ Route('award.manage') }}" class="sub-link">Manage Award</a></li>
            <li class="sub-item"><a href="{{ Route('award.create') }}" class="sub-link">Add Award</a></li>
          </ul>
        </li>
        <!-------------------------- Education -------------------------->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Education</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ Route('education.manage') }}" class="sub-link">Manage Education</a></li>
            <li class="sub-item"><a href="{{ Route('education.create') }}" class="sub-link">Add Education</a></li>
          </ul>
        </li>


        <li class="br-menu-item">
            <a href="{{ route('about') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-gear-a tx-22"></i>
                <span class="menu-item-label">Setting</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-----live---->
        <li class="br-menu-item">
            <a target="_blank" href="{{ route('index') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-gear-a tx-22"></i>
                <span class="menu-item-label">live</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
