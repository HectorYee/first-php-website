<!-- <style>
    /* Add a black background color to the top navigation */
  .topnav {
      background-color: #55595D ;
      overflow: hidden;

  }

  /* Style the links inside the navigation bar */
  .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
  }

  /* Change the color of links on hover */
  .topnav a:hover {
      background-color: #ddd;
      color: black;
  }

  /* Add a color to the active/current link */
  .topnav a.active {
      background-color: #65428A ;
      color: white;
  }
</style> -->


<div align="center" class="topnav">
  
  <a <?php if ($thisPage=="Home") echo " class=active"; ?> href="index">Home</a>
  <a <?php if ($thisPage=="About") echo " class=active"; ?> href="about">About</a>
  <a <?php if ($thisPage=="Medical") echo " class=active"; ?> href="medical">Medical</a>
  <a <?php if ($thisPage=="Application") echo " class=active"; ?> href="application">Application</a>
  <a <?php if ($thisPage=="Lifestyle") echo " class=active"; ?> href="lifestyle">Lifestyle</a>
</div> 
