<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f6f8; }
        .sidebar {
            width: 220px;
            background: #2d3748;
            color: #fff;
            position: fixed;
            height: 100vh;
            padding-top: 30px;
        }
        .sidebar h2 { text-align: center; margin-bottom: 30px; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar ul li { margin: 20px 0; }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            border-radius: 4px;
            transition: background 0.2s;
        }
        .sidebar ul li a:hover { background: #4a5568; }
        .main-content {
            margin-left: 240px;
            padding: 40px;
        }
        .dashboard-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 30px;
            margin-bottom: 30px;
        }
        .dashboard-title { font-size: 2rem; margin-bottom: 10px; }
        .dashboard-desc { color: #555; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Manage Products</a></li>
            <li><a href="#">Manage Categories</a></li>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Manage Carts</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="dashboard-card">
            <div class="dashboard-title">Welcome, Admin!</div>
            <div class="dashboard-desc">
                This is your dashboard. Use the sidebar to manage products, categories, users, and carts.<br>
                <strong>CRUD operations</strong> are available for each section.
            </div>
        </div>
        <div class="dashboard-card">
            <h3>Quick Actions</h3>
            <ul>
                <li><a href="#" style="color:#3182ce;">Add New Product</a></li>
                <li><a href="#" style="color:#3182ce;">Add New Category</a></li>
                <li><a href="#" style="color:#3182ce;">View All Users</a></li>
                <li><a href="#" style="color:#3182ce;">View All Carts</a></li>
            </ul>
        </div>
    </div>
</body>