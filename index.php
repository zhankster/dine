<?php
    require 'php/connection.php';
    require 'php/components.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?=$GLOBALS['loc_name'] ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap-vue.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">

    <script src="js/vue.js" type="text/javascript"></script>
    <!-- <script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
    <!--
    
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script> 
    -->
    <script src="js/bootstrap-vue.min.js" type="text/javascript"></script>
    
</head>

<body>
<?php
    echo $selectButton;
    echo $modal01;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="app-main">
    <div class="flex-container">
    <div v-for="n  in 20 " :key="n"><select-button title="F2" act="2" cnt="4" @click="tblClick"
    v-b-modal.mod1>
    </select-button></div>
      <!-- Modal Start -->
    <b-modal ref="modRef" hide-footer title="Table will seat " id="mod1">
       <span id ="sTC" ref="mTC"></span>
          <div class="d-block text-center">
            <div>
              <b-form-group label="Number Seated">
                <b-form-radio-group v-model="selected"
                                    :options="options"
                                    name="numSeated" />
              </b-form-group>
          </div>
      <!-- <b-btn class="mt-3" variant="outline-danger" block @click="hideModal">Close Me</b-btn> -->
    </b-modal>
    <!-- Modal end -->
      </div>
</div>

</div> 
    <script src="js/app.js" type="text/javascript"></script>

</body>

</html>