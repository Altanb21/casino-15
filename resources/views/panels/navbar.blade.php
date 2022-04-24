
  <nav class="header-navbar navbar navbar-expand-lg align-items-center {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }}">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/email')}}" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/chat')}}" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/calendar')}}" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/todo')}}" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link bookmark-star">
                <i class="ficon text-warning" data-feather="star"></i>
              </a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon">
                  <i data-feather="search"></i>
                </div>
                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                <ul class="search-list search-list-bookmark"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">          
          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <input class="form-control input" type="text" placeholder="Search here.." tabindex="-1" data-search="search">
              <div class="search-input-close"><i data-feather="x"></i></div>
              <ul class="search-list search-list-main"></ul>
            </div>
          </li>
          
          <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                  <div class="badge badge-pill badge-light-primary">6 New</div>
                </div>
              </li>
              <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar"><img src="{{asset('images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                  </div>
                </div></a><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar"><img src="{{asset('images/portrait/small/avatar-s-3.jpg')}}" alt="avatar" width="32" height="32"></div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                  </div>
                </div></a><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar bg-light-danger">
                      <div class="avatar-content">MD</div>
                    </div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                  </div>
                </div></a>
              <div class="media d-flex align-items-center">
                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                <div class="custom-control custom-control-primary custom-switch">
                  <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                  <label class="custom-control-label" for="systemNotification"></label>
                </div>
              </div><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar bg-light-danger">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                    </div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                  </div>
                </div></a><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar bg-light-success">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                    </div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                  </div>
                </div></a><a class="d-flex" href="javascript:void(0)">
                <div class="media d-flex align-items-start">
                  <div class="media-left">
                    <div class="avatar bg-light-warning">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                    </div>
                  </div>
                  <div class="media-body">
                    <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                  </div>
                </div></a>
            </li>
            <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-user">
          <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-nav d-sm-flex d-none">
              <span class="user-name font-weight-bolder">{{Auth::user()->name}}</span>
              <span class="user-status">Admin</span>
            </div>
            <span class="avatar">
              <img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
              <span class="avatar-status-online"></span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
            <a class="dropdown-item" href="{{url('page/profile')}}">
              <i class="mr-50" data-feather="user"></i> Profile
            </a>
            <a class="dropdown-item" href="{{url('app/email')}}">
              <i class="mr-50" data-feather="mail"></i> Inbox
            </a>
            <a class="dropdown-item" href="{{url('app/todo')}}">
              <i class="mr-50" data-feather="check-square"></i> Task
            </a>
            <a class="dropdown-item" href="{{url('app/chat')}}">
              <i class="mr-50" data-feather="message-square"></i> Chats
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('page/account-settings')}}">
              <i class="mr-50" data-feather="settings"></i> Settings
            </a>
            <a class="dropdown-item" href="{{url('page/pricing')}}">
              <i class="mr-50" data-feather="credit-card"></i> Pricing
            </a>
            <a class="dropdown-item" href="{{url('page/faq')}}">
              <i class="mr-50" data-feather="help-circle"></i> FAQ
            </a>
            <a class="dropdown-item" href="{{url('admin/logout')}}">
              <i class="mr-50" data-feather="power"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  {{-- Search Start Here --}}
  <ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
      <a href="javascript:void(0);">
        <h6 class="section-label mt-75 mb-0">Files</h6>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
          <div class="mr-75">
            <img src="{{asset('images/icons/xls.png')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Two new item submitted</p>
            <small class="text-muted">Marketing Manager</small>
          </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
          <div class="mr-75">
            <img src="{{asset('images/icons/jpg.png')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">52 JPG file Generated</p>
            <small class="text-muted">FontEnd Developer</small>
          </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
          <div class="mr-75">
            <img src="{{asset('images/icons/pdf.png')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">25 PDF File Uploaded</p>
            <small class="text-muted">Digital Marketing Manager</small>
          </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
          <div class="mr-75">
            <img src="{{asset('images/icons/doc.png')}}" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Anna_Strong.doc</p>
            <small class="text-muted">Web Designer</small>
          </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
      </a>
    </li>
    <li class="d-flex align-items-center">
      <a href="javascript:void(0);">
        <h6 class="section-label mt-75 mb-0">Members</h6>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
          <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">{{Auth::user()->name}}</p>
            <small class="text-muted">Admin</small>
          </div>
        </div>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
          <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Michal Clark</p>
            <small class="text-muted">FontEnd Developer</small>
          </div>
        </div>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
          <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Milena Gibson</p>
            <small class="text-muted">Digital Marketing Manager</small>
          </div>
        </div>
      </a>
    </li>
    <li class="auto-suggestion">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
          <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32">
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Anna Strong</p>
            <small class="text-muted">Web Designer</small>
          </div>
        </div>
      </a>
    </li>
  </ul>

  {{-- if main search not found! --}}
  <ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between">
      <a class="d-flex align-items-center justify-content-between w-100 py-50">
        <div class="d-flex justify-content-start">
          <span class="mr-75" data-feather="alert-circle"></span>
          <span>No results found.</span>
        </div>
      </a>
    </li>
  </ul>
  {{-- Search Ends --}}
  <!-- END: Header-->
