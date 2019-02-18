<!DOCTYPE html>
<html>
<head>
  <title>Alert Login</title>
  <style type="text/css">
    .bungkus1 {
      padding: 8% 0% 0% 0%;
      display: flex;
      justify-content: center;
    }
    .bungkus2 {
      width: 400px;
      position: relative;
      z-index: 1;
      background-color: #fff;
      padding: 45px;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .siji {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }

  </style>
  <?php include 'head.php'; ?>
</head>
<body style="background-color: #79b956">
<div class="wrapper" style="background-color: #79b956">
  <section class="content">

          <div class="bungkus1">
            <div class="bungkus2">

                <div class="callout callout-danger">
                <h4>Warning!</h4>

                <p>Email dan Password ada Salah.</p>
              </div>
                <a href="../../login.php""><button class="btn btn-success">Ke Halaman Login</button></a>


            </div>
          </div>


  </section>
</div>


<?php include 'script.php'; ?>
</body>
</html>