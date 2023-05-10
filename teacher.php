<!DOCTYPE html>
<html>
<head>
	<title>Join Our Team as a Teacher</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Why Choose Yoga Yagna?</h1>
		<p>At Yoga Yagna, we are dedicated to providing high-quality yoga instruction and fostering a supportive community for our teachers and students alike. Here are just a few reasons why you should consider joining our team:</p>
		<ul>
			<li>We offer competitive compensation and flexible scheduling.</li>
			<li>We are committed to traditional yoga practices and holistic wellness.</li>
			<li>We provide ongoing professional development and support for our teachers.</li>
			<li>We have a diverse network of students and a positive learning environment.</li>
		</ul>
		<h2>Apply to Join Our Team</h2>
		<p>Interested in teaching at Yoga Yagna? Fill out the form below and submit your resume and a sample video demonstrating your teaching style.</p>
		<form method="POST" action="submit.php" enctype="multipart/form-data">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>
			<label for="resume">Resume:</label>
			<input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
			<label for="video">Sample Video:</label>
			<input type="file" id="video" name="video" accept="video/*" required>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>
