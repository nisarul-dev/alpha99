<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
	<style>
		h1.heading {
			font-family: "Arial Black";
			width: 700px;
			margin: auto;
			margin-bottom: 30px;
			padding-bottom: 50px;
			border-bottom: 1px solid #ccc;
		}

		h3.tagline {
			font-family: Arial;
			margin: auto;
			font-size: 18px;
			margin-top: 50px;
			margin-bottom: 15px;
			width: 700px;
			text-align: center;
		}

		h2.post-title {
			margin-bottom: 30px;
		}

		.post {
			margin-bottom: 50px;
		}

		.post p {
			font-family: "Helvetica Neue";
			line-height: 1.7em;
			font-size: 18px;
		}

		.post .row:nth-child(2) {
			padding-bottom: 50px;
			border-bottom: 1px solid #ccc;

		}

		.post:last-child .row:nth-child(2) {
			border-bottom: none;
		}

		.footer {
			padding-bottom: 10px;
			padding-top: 10px;
			background-color: #222;
			color: #ccc;
		}

		.tags li,
		.tags li a {
			color: #3D9970;
		}

        img {
            max-width: 100%;
        }
	</style>
</head>

<body <?php body_class() ?>>