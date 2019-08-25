<style>
    body{
        background: url(<?php echo base_url('assets/login/login-bg-1.png') ?>) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        margin: 0; padding: 0;
    }
    .footer{
        position: fixed;
        width: 100%;
        background: #000;
        color: #fff;
        bottom: 0px;
        font-family: calibri, sans-serif, arial;
        font-size: 12px;
        text-align: center;
        padding: 8px;
        opacity: 0.5;
    }

    .container{
        position: fixed;
        width: 670px;
        top:50px; bottom: 80px; left:100px;
    }

    .container td{
        font-family: calibri, sans-serif;
        color: #fff;
        font-size: 21px;
    }

    .container .left{
        background: url(https://qualita-indonesia.net/resources/themes/template-simple/images/bg-transparent-black.png);
        padding: 20px;
    }

    .container .right{
        background: url(https://qualita-indonesia.net/resources/themes/template-simple/images/bg-transparent-white.png);
        padding: 60px;
        color: #333;
    }

   input{
       padding: 10px;
       margin-bottom: 10px;
       width: 100%;
       border: 1px solid #ccc;
   }

   .btn{
       border: 1px solid transparent;
       border-radius: 3px;
       background: #1990db;
       padding: 7px;
       font-weight: bold;
       color:#fff;
   }
</style>

<div class="container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" height='100%'>
        <tr>
            <td class="left">
                <img src="<?php echo base_url()?>assets/img/logo/kemenkes-login.png"><br>
                <div style="border-bottom: 1px solid #222; margin: 15px 0px"></div>
<!--                <span style="font-size: 30px; ">Welcome To Quest</span><br>
                Qualita Integrated System
                <p>
                    I Never Think Of The Future, It Comes Soon Enough
                    <span style="font-size: 15px;"><br><i>(Albert Einstein)</i></span>
                </p>-->
                <img src="<?php echo base_url()?>assets/img/logo/logo-biak-login.png" width ="110%">

                <p style="font-size: 13px; color: #ccc">
                    <b>Address: </b><br>
                    XXX <br>
                    Jl. XXXX - XXX<br>
                    Biak 195532 Indonesia.<br>

                    Tel. +62 21 8269 3000<br>

                    E-mail  : admin@simpolik-rsud.com<br>
                    <br>
                </p>
                <br>
            </td>
            <td width="250" class="right">
                <div style="font-size: 35px; line-height: 20px">Mulai App</div>

                <div style="border-bottom: 1px solid #ccc; margin: 15px 0px"></div>
								<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        				<?php echo form_open('Auth/login_proses'); ?>
                <form>
                    <input type="text" name="nik" value="" placeholder="NIK">
                    <input type="password" name="sandi" value="" placeholder="Password">
                    <input type="submit" name="commit" value="Login" class="btn">
                    <div style="font-size: 13px; text-align: center">
                        <input type="checkbox" name="remember_me" id="remember_me" style="width: 20px;">Ingat Saya <br>
                        LOGIN PENGGUNA
                    </div>
                </form>
								<?php echo form_close();?>
            </td>
        </tr>
    </table>
</div>

<div class="footer">
    <span style="opacity: 1;">SIM POLIKLINIK | RSUD Kabupaten Biak &copy; 2019 | Email : admin@simpolik-rsud.com</span>
</div>
