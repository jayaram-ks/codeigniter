<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/booking/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/booking/css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('/') ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(array($this->session->userdata('language'),'travel')) ?>">Travel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(array($this->session->userdata('language'),'tour'))?>">Tour</a>
            </li>





          </ul>

          <span class="p-2 ml-5">

       <?php $this->load->helper('url'); ?>
       <form method="POST" name="chgLangForm" action='<?php echo site_url('language/change'); ?>' >
        <span class="small" style="color:#FFF;">Change Language : </span>
        <select onchange="document.chgLangForm.submit()" name="language" id="language">
        <option value="en"
        <?php
        if($this->session->userdata('language') == 'en')
        {
        ?>
        selected
        <?php
        }
        ?>
        >English</option>
        <option value="ar"
        <?php
        if($this->session->userdata('language') == 'ar')
        {
        ?>
        selected
        <?php
        }
        ?>
        >Arabic</option>
        </select>
        </form>
        </span>
        </div>
      </div>
    </nav>
