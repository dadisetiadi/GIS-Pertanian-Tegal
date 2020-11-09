<?php
  $title="Login"; 
?> <!-- Judul Halaman -->

<div class="pages">
  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
		
        <div class="content-block">
            
            <div class="loginform">
            <h4>LOGIN</h4>
                <form id="LoginForm" method="post" action="<?=url('login_proses')?>">
                    <input type="text" id="username" name="username" class="form_input required" placeholder="username" />
                    <input type="password" id="password" name="password" class="form_input required" placeholder="password" />
                    <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN IN" />
                </form>
               
            </div>
            <div class="close_popup_button">
                <a href="<?=url('beranda')?>" class="external"><img src="<?=templates()?>images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>