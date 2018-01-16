
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
             
            <div class="login-panel panel panel-default" style="margin-top: 50%">
				<div class="panel-heading" style="margin-bottom: 10px">           
                    <h3 class="text-center login-title">Login</h3>   
                    <p>&nbsp;</p> 
                        <form class="form-horizontal" form method="post" action="<?php echo base_url();?>Login/cek_login">
                        
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <p>&nbsp;</p>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="logged_in">Login</button>
                        </form>        
                    </div>
                </div>
            </div>
        </div>
    </div>

  