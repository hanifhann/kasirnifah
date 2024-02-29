<style>
  :root {
  --primary: #b6895b;
  }

.navbar{

  justify-content: space-between;
  align-items: center;
  background-color:rgba(0, 0, 0, 0.5);
  border-bottom: 1px solid #513c28;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-bottom: 300px;
}
.navbar .logo {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  font-style: italic;
  padding-left: 20px;
}

.navbar .logo span {
  color: var(--primary);
}

.nav .nav-item a {
  color: #fff;
  font-size: 15px;
  margin-left: 0.2rem;
}

.nav .nav-item a:hover {
  color: var(--primary);
}

.nav .nav-item a::after {
  content: "";
  display: block;
  padding-bottom: 0.2rem;
  transform: scaleX(0);
  transition: 0.2s linear;
}

.nav .nav-item a:hover::after {
  transform: scaleX(0.5);
}
</style>

<nav class="navbar navbar-expand-lg ">
  <p class="logo">Meng<span>Shop</span>.</p>
  <div class="container" style="margin-left: 300px;">
    <ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data_barang.php">Data Barang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pembelian.php">Pembelian</a>
  </li>
  </ul>
  <span class="navbar-item">
      <a class="nav-link" href="../logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" color="white" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
</svg></a>
    </span>
  </div>
</nav>

