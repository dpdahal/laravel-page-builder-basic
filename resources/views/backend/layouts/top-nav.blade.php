@section('top-nav')

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg top-navbar">
        <div class="container-fluid">
            <!-- Sidebar Toggle -->
            <button id="sidebarToggle" class="navbar-toggler border-0" type="button">
                <i class="bi bi-list"></i>
            </button>

            <!-- Search Form -->
            <div class="search-form d-none d-md-flex">
                <div class="input-group">
              <span class="input-group-text bg-transparent border-0">
                <i class="bi bi-search"></i>
              </span>
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search...">
                </div>
            </div>

            <!-- Right Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Language Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                       data-bs-toggle="dropdown">
                        <i class="bi bi-globe2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">French</a></li>
                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                        <li><a class="dropdown-item" href="#">German</a></li>
                    </ul>
                </li>

                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                       data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge rounded-pill bg-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end notifications-dropdown">
                        <li class="dropdown-header">
                            <h6>Notifications</h6>
                            <span class="badge rounded-pill bg-primary">New 3</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-person-plus text-info"></i>
                            <div>
                                <h6>New user registered</h6>
                                <p>5 minutes ago</p>
                            </div>
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-cart-check text-success"></i>
                            <div>
                                <h6>Order #2458 completed</h6>
                                <p>2 hours ago</p>
                            </div>
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-triangle text-warning"></i>
                            <div>
                                <h6>Server at 85% capacity</h6>
                                <p>1 day ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                </li>

                <!-- Messages -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                       data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge rounded-pill bg-success">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end messages-dropdown">
                        <li class="dropdown-header">
                            <h6>Messages</h6>
                            <span class="badge rounded-pill bg-primary">New 4</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <img src="/placeholder.svg?height=40&width=40" alt="User" class="rounded-circle">
                            <div>
                                <h6>Sarah Johnson</h6>
                                <p>The project has been completed.</p>
                                <p class="text-muted small">15 minutes ago</p>
                            </div>
                        </li>
                        <li class="message-item">
                            <img src="/placeholder.svg?height=40&width=40" alt="User" class="rounded-circle">
                            <div>
                                <h6>Michael Chen</h6>
                                <p>Can we schedule a meeting?</p>
                                <p class="text-muted small">1 hour ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                </li>

                <!-- User Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle user-dropdown" href="#" id="userDropdown" role="button"
                       data-bs-toggle="dropdown">
                        <img src="/placeholder.svg?height=40&width=40" alt="User" class="rounded-circle">
                        <span class="d-none d-lg-inline ms-1">Alex Morgan</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dropdown-menu">
                        <li class="user-header">
                            <img src="/placeholder.svg?height=80&width=80" alt="User" class="rounded-circle">
                            <p>
                                Alex Morgan - Administrator
                                <small>Member since May 2023</small>
                            </p>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Account Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-activity me-2"></i> Activity Log</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sign
                                Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

@endsection
