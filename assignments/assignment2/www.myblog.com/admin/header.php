<html>
  <link rel="stylesheet" id="base" href="/css/default.css" type="text/css" media="screen" />


  <title>Administration of my Blog</title>
  <body>
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Administration of my Blog</a></h1>
      <h2>Welcome <font color="red"><?php echo $_SESSION["user"] ?></font>!</h2>
    </div>
    <div id="menu">
      <ul>
        <li class="active">
            <a href="/"> Home  |</a>
        </li>
        <li>
          <a href="/admin/">Manage post |</a>
        </li> 
 
        <li>
          <a href="/admin/new.php">New post |</a>
        </li>
        <li>
          <a href="/admin/logout.php">Logout</a>
        </li>
 
        </ul>
      </div>
    </div>

  
