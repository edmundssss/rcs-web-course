


<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="index.php?page=index">Home</a>
                    <span class="seperator">></span>
                    <span class="current-page">Registration</span>
                </div>
            </div> <!-- .breadcrumbs -->

            <div class="row">
                <div class="col-sm-4">
                    <form id="reg-form" method="post" action="registration_action.php">
                        <div class="errors" style="">
                            <ul>
								 <?php
								    if (isset($_SESSION['flash']) && isset($_SESSION['flash']['errors'])) {
										foreach ($_SESSION['flash']['errors'] as $error) {
											echo "<li>$error</li>";
										}
										unset($_SESSION['flash']['errors']);
									}
								 

                                    
									?>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password2" class="form-control" placeholder="Retype password*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First name*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name">
                        </div>
                        
	
                        <button type="submit" id="register-send-message-button" class="btn btn-primery">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </main>