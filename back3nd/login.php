<div class="container">
  <form method="post" action="proses.php?aksi=login" id="formLogin">
	  <!-- <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div> -->
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
	    <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>	
</div>
