<?php

function sign_page() {

    $html .= '<div class="container-fluid">';
    $html .= '	<div class="container">';
    $html .= '		<h2 class="text-center" id="title">Register or Login</h2>';
    $html .= '		<hr>';
    $html .= '		<div class="row">';
    $html .= '			<div class="col-md-5">';
    $html .= '				<form role="form" method="post" action="index.php?action=sign_up">';
   // $html .= '					<fieldset>';
    $html .= '					<p class="text-uppercase pull-center"> SIGN UP.</p>	';
    $html .= '					<div class="form-group">';
    $html .= '						<input type="text" name="username" class="form-control input-lg" placeholder="username">';
    $html .= '					</div>';

    $html .= '					<div class="form-group">';
    $html .= '						<input type="email" name="email" class="form-control input-lg" placeholder="Email Address">';
    $html .= '					</div>';
    $html .= '					<div class="form-group">';
    $html .= '						<input type="password" name="pass" class="form-control input-lg" placeholder="Password">';
    $html .= '					</div>';
    $html .= '					<div class="form-group">';
    $html .= '						<input type="password" name="pass_confirm" class="form-control input-lg" placeholder="Confirm your Password">';
    $html .= '					</div>';
    $html .= '					<div class="form-check">';
    $html .= '						<label class="form-check-label">';
    $html .= '							<input type="checkbox" class="form-check-input">';
    $html .= '							By Clicking register you\'re agree to our policy & terms';
    $html .= '						</label>';
    $html .= '					</div>';
    $html .= '					<div>';
    $html .= '						<input type="submit" class="mt-3 btn btn-lg btn-info" value="Register">';
    $html .= '					</div>';
    //$html .= '					</fieldset>';
    $html .= '					</form>';
    $html .= '				</div>';

    $html .= '				<div class="col-md-2">';
    $html .= '					<!-------null------>';
    $html .= '				</div>';

    $html .= '				<div class="col-md-5">';
    $html .= ' 				 		<form role="form" method="post" action="index.php?action=sign_in">';
    $html .= '						<fieldset>';
    $html .= '							<p class="text-uppercase"> Login using your account: </p>	';

    $html .= '							<div class="form-group">';
    $html .= '								<input type="email" name="username" class="form-control input-lg" placeholder="username">';
    $html .= '							</div>';
    $html .= '							<div class="form-group">';
    $html .= '								<input type="password" name="pass" class="form-control input-lg" placeholder="Password">';
    $html .= '							</div>';
    $html .= '							<div>';
    $html .= ' 							  <input type="submit" class="mt-3 btn btn-lg btn-info" value="Sign In">';
    $html .= '							</div>';

    $html .= ' 						</fieldset>';
    $html .= '				</form>	';
    $html .= '				</div>';
    $html .= '			</div>';
    $html .= '		</div>';
    $html .= '        <p class="text-center">';

    return $html;
}
