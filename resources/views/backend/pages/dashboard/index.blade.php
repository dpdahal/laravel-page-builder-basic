@extends('backend.layouts.main')

@section('content')
    <div class="main-content">
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

        <!-- Page Content -->
        <div class="container-fluid page-content">
            <!-- Welcome Banner -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="welcome-banner">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2>Welcome back, Alex!</h2>
                                <p class="mb-md-0">Here's what's happening with your store today.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <button class="btn btn-primary me-2"><i class="bi bi-plus-lg me-1"></i> Add Product
                                </button>
                                <button class="btn btn-outline-primary"><i class="bi bi-download me-1"></i> Reports
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-card-body">
                            <div class="stat-icon bg-primary-subtle">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-title">Total Revenue</h3>
                                <h2 class="stat-value">$86,589</h2>
                                <div class="stat-footer">
                                    <span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 16.24%</span>
                                    <span class="period">vs last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-card-body">
                            <div class="stat-icon bg-success-subtle">
                                <i class="bi bi-bag-check"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-title">Total Orders</h3>
                                <h2 class="stat-value">4,350</h2>
                                <div class="stat-footer">
                                    <span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 8.15%</span>
                                    <span class="period">vs last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-card-body">
                            <div class="stat-icon bg-info-subtle">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-title">Total Customers</h3>
                                <h2 class="stat-value">12,768</h2>
                                <div class="stat-footer">
                                    <span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 12.67%</span>
                                    <span class="period">vs last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-card-body">
                            <div class="stat-icon bg-warning-subtle">
                                <i class="bi bi-cart-x"></i>
                            </div>
                            <div class="stat-content">
                                <h3 class="stat-title">Abandoned Carts</h3>
                                <h2 class="stat-value">432</h2>
                                <div class="stat-footer">
                                    <span class="badge bg-danger-subtle text-danger"><i class="bi bi-arrow-up"></i> 3.57%</span>
                                    <span class="period">vs last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row mb-4">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Revenue Overview</h5>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            id="revenueDropdown" data-bs-toggle="dropdown">
                                        This Year
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueDropdown">
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Quarter</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                        <li><a class="dropdown-item" href="#">All Time</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <div class="chart-placeholder">
                                    <div class="chart-visual">
                                        <div class="chart-bar" style="height: 60%;"></div>
                                        <div class="chart-bar" style="height: 80%;"></div>
                                        <div class="chart-bar" style="height: 65%;"></div>
                                        <div class="chart-bar" style="height: 75%;"></div>
                                        <div class="chart-bar" style="height: 85%;"></div>
                                        <div class="chart-bar" style="height: 70%;"></div>
                                        <div class="chart-bar" style="height: 90%;"></div>
                                        <div class="chart-bar" style="height: 75%;"></div>
                                        <div class="chart-bar" style="height: 80%;"></div>
                                        <div class="chart-bar" style="height: 95%;"></div>
                                        <div class="chart-bar" style="height: 85%;"></div>
                                        <div class="chart-bar" style="height: 90%;"></div>
                                    </div>
                                    <div class="chart-labels">
                                        <span>Jan</span>
                                        <span>Feb</span>
                                        <span>Mar</span>
                                        <span>Apr</span>
                                        <span>May</span>
                                        <span>Jun</span>
                                        <span>Jul</span>
                                        <span>Aug</span>
                                        <span>Sep</span>
                                        <span>Oct</span>
                                        <span>Nov</span>
                                        <span>Dec</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="stat-indicator bg-primary"></div>
                                        <div class="ms-2">
                                            <h6 class="mb-0">Total Revenue</h6>
                                            <h5 class="mb-0">$86,589</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="stat-indicator bg-success"></div>
                                        <div class="ms-2">
                                            <h6 class="mb-0">Online Store</h6>
                                            <h5 class="mb-0">$52,356</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="stat-indicator bg-info"></div>
                                        <div class="ms-2">
                                            <h6 class="mb-0">Retail Sales</h6>
                                            <h5 class="mb-0">$34,233</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Sales by Category</h5>
                                <button class="btn btn-sm btn-icon">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="donut-chart-container">
                                <div class="donut-chart-placeholder">
                                    <div class="donut-chart">
                                        <div class="donut-segment"
                                             style="--offset: 0; --value: 45; --bg: var(--bs-primary);"></div>
                                        <div class="donut-segment"
                                             style="--offset: 45; --value: 30; --bg: var(--bs-success);"></div>
                                        <div class="donut-segment"
                                             style="--offset: 75; --value: 15; --bg: var(--bs-warning);"></div>
                                        <div class="donut-segment"
                                             style="--offset: 90; --value: 10; --bg: var(--bs-info);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-legend mt-4">
                                <div class="legend-item">
                                    <div class="d-flex align-items-center">
                                        <div class="legend-color" style="background-color: var(--bs-primary);"></div>
                                        <div class="legend-text">Electronics</div>
                                    </div>
                                    <div class="legend-value">45%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="d-flex align-items-center">
                                        <div class="legend-color" style="background-color: var(--bs-success);"></div>
                                        <div class="legend-text">Clothing</div>
                                    </div>
                                    <div class="legend-value">30%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="d-flex align-items-center">
                                        <div class="legend-color" style="background-color: var(--bs-warning);"></div>
                                        <div class="legend-text">Accessories</div>
                                    </div>
                                    <div class="legend-value">15%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="d-flex align-items-center">
                                        <div class="legend-color" style="background-color: var(--bs-info);"></div>
                                        <div class="legend-text">Home Goods</div>
                                    </div>
                                    <div class="legend-value">10%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders & Top Products -->
            <div class="row mb-4">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Recent Orders</h5>
                                <a href="#" class="btn btn-sm btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#ORD-0215</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/placeholder.svg?height=32&width=32" alt="User"
                                                     class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <h6 class="mb-0">John Smith</h6>
                                                    <small class="text-muted">john@example.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Premium Headphones</td>
                                        <td>May 22, 2025</td>
                                        <td>$299.99</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                                class="bi bi-trash me-2"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-0214</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/placeholder.svg?height=32&width=32" alt="User"
                                                     class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <h6 class="mb-0">Emily Johnson</h6>
                                                    <small class="text-muted">emily@example.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Smartwatch Pro</td>
                                        <td>May 21, 2025</td>
                                        <td>$199.99</td>
                                        <td><span class="badge bg-info-subtle text-info">Shipped</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                                class="bi bi-trash me-2"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-0213</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/placeholder.svg?height=32&width=32" alt="User"
                                                     class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <h6 class="mb-0">Michael Brown</h6>
                                                    <small class="text-muted">michael@example.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Laptop Pro 16"</td>
                                        <td>May 20, 2025</td>
                                        <td>$1,899.99</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Processing</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                                class="bi bi-trash me-2"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-0212</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/placeholder.svg?height=32&width=32" alt="User"
                                                     class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <h6 class="mb-0">Sarah Wilson</h6>
                                                    <small class="text-muted">sarah@example.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Wireless Earbuds</td>
                                        <td>May 19, 2025</td>
                                        <td>$149.99</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                                class="bi bi-trash me-2"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-0211</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/placeholder.svg?height=32&width=32" alt="User"
                                                     class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <h6 class="mb-0">David Lee</h6>
                                                    <small class="text-muted">david@example.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Smart Home Hub</td>
                                        <td>May 18, 2025</td>
                                        <td>$129.99</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                                class="bi bi-trash me-2"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <nav>
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="bi bi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Top Products</h5>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">This Week</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="product-list">
                                <li class="product-item">
                                    <div class="product-image">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Product">
                                    </div>
                                    <div class="product-info">
                                        <h6>Wireless Headphones</h6>
                                        <p class="text-muted mb-0">Electronics</p>
                                    </div>
                                    <div class="product-sales">
                                        <h6>$12,500</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                 style="width: 85%"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-image">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Product">
                                    </div>
                                    <div class="product-info">
                                        <h6>Smartwatch Pro</h6>
                                        <p class="text-muted mb-0">Wearables</p>
                                    </div>
                                    <div class="product-sales">
                                        <h6>$8,750</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 70%"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-image">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Product">
                                    </div>
                                    <div class="product-info">
                                        <h6>Laptop Ultra</h6>
                                        <p class="text-muted mb-0">Computers</p>
                                    </div>
                                    <div class="product-sales">
                                        <h6>$6,840</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 style="width: 60%"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-image">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Product">
                                    </div>
                                    <div class="product-info">
                                        <h6>Smart Home Hub</h6>
                                        <p class="text-muted mb-0">Smart Home</p>
                                    </div>
                                    <div class="product-sales">
                                        <h6>$5,250</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 style="width: 45%"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-image">
                                        <img src="/placeholder.svg?height=50&width=50" alt="Product">
                                    </div>
                                    <div class="product-info">
                                        <h6>Wireless Charger</h6>
                                        <p class="text-muted mb-0">Accessories</p>
                                    </div>
                                    <div class="product-sales">
                                        <h6>$3,650</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 30%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Timeline & Calendar -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Recent Activity</h5>
                                <button class="btn btn-sm btn-icon">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-primary">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>New user registered</h6>
                                        <p>John Smith created a new account</p>
                                        <span class="timeline-date"><i class="bi bi-clock me-1"></i>Just now</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-success">
                                        <i class="bi bi-cart-check"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>New order placed</h6>
                                        <p>Order #2458 has been placed</p>
                                        <span class="timeline-date"><i class="bi bi-clock me-1"></i>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-warning">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>New review</h6>
                                        <p>Emily Johnson left a 5-star review</p>
                                        <span class="timeline-date"><i class="bi bi-clock me-1"></i>5 hours ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-info">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>New product added</h6>
                                        <p>Wireless Headphones added to inventory</p>
                                        <span class="timeline-date"><i class="bi bi-clock me-1"></i>1 day ago</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-danger">
                                        <i class="bi bi-exclamation-triangle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>Low stock alert</h6>
                                        <p>Smartwatch Pro is running low on stock</p>
                                        <span class="timeline-date"><i class="bi bi-clock me-1"></i>2 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary">View All Activity</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Calendar</h5>
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-lg me-1"></i> Add Event
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="calendar-header d-flex justify-content-between align-items-center mb-4">
                                <button class="btn btn-sm btn-icon"><i class="bi bi-chevron-left"></i></button>
                                <h5 class="mb-0">May 2025</h5>
                                <button class="btn btn-sm btn-icon"><i class="bi bi-chevron-right"></i></button>
                            </div>
                            <div class="calendar-grid">
                                <div class="calendar-weekdays">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="calendar-days">
                                    <div class="prev-month">28</div>
                                    <div class="prev-month">29</div>
                                    <div class="prev-month">30</div>
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>8</div>
                                    <div>9</div>
                                    <div>10</div>
                                    <div>11</div>
                                    <div>12</div>
                                    <div>13</div>
                                    <div>14</div>
                                    <div>15</div>
                                    <div>16</div>
                                    <div>17</div>
                                    <div>18</div>
                                    <div>19</div>
                                    <div>20</div>
                                    <div>21</div>
                                    <div class="today">22</div>
                                    <div class="has-event">23</div>
                                    <div>24</div>
                                    <div>25</div>
                                    <div class="has-event">26</div>
                                    <div>27</div>
                                    <div>28</div>
                                    <div>29</div>
                                    <div>30</div>
                                    <div>31</div>
                                    <div class="next-month">1</div>
                                </div>
                            </div>
                            <div class="upcoming-events mt-4">
                                <h6 class="mb-3">Upcoming Events</h6>
                                <div class="event-item">
                                    <div class="event-dot bg-primary"></div>
                                    <div class="event-content">
                                        <h6>Team Meeting</h6>
                                        <p class="mb-0"><i class="bi bi-calendar3 me-1"></i> May 23, 2025 <i
                                                class="bi bi-clock ms-2 me-1"></i> 10:00 AM</p>
                                    </div>
                                </div>
                                <div class="event-item">
                                    <div class="event-dot bg-success"></div>
                                    <div class="event-content">
                                        <h6>Product Launch</h6>
                                        <p class="mb-0"><i class="bi bi-calendar3 me-1"></i> May 26, 2025 <i
                                                class="bi bi-clock ms-2 me-1"></i> 2:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0">© 2025 Elegance Admin Dashboard. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger"></i> by YourCompany
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
