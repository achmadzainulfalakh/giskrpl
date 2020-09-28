<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GIS KRPL Jombang</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					
					<?php //foreach($menu as $value){ ?>
					<?php //print $value?>
					<?php //}?>
					
					<li>
                        <a href="<?php print base_url() ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php print base_url()."home/data-lokasi.html"?>">Data Lokasi</a>
                    </li>
					<?php if($this->login_model->username()){ ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php print base_url()."lokasi.html"?>">Lokasi</a>
								</li>
								<li>
								<a href="<?php print base_url()."login/logout.html"?>">Logout</a>
							</li>
							</ul>
						</li>
						
					<?php } ?>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>