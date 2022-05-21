<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
	<!--// SITES TITLE // -->
	<title>Mail Gonder</title>
	<link rel="icon" type="image/x-icon" href="assets/img/title-icon.svg">

</head>

<body>		
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-5 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<h4>Send mail</h4>
					
					<form action="mail.php" method="post">
						<div class="row">
							<div class="col">
								<input type="text" name="mail" class="form-control" placeholder="email:" required>
							</div>
							<div class="col">
								<input type="text" name="subject" class="form-control" placeholder="subject:" required>
							</div>
						</div>
						<!-- Form Group -->
						<div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
							<textarea id="form-message" name="message" cols="30" rows="3" class="form-control" placeholder="Message:" required></textarea>
						</div>
						<button type="submit" class="form-control">Send a Message</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>