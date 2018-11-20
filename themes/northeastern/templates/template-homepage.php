<?php /* Template Name: Homepage */ get_header(); ?>

	<main role="main">

		<section class="fullwidth hero">

			<div><img srcset="<?=site_url()?>/wp-content/uploads/hero.jpg 4096w,<?=site_url()?>/wp-content/uploads/hero-768x400.jpg 1280w,<?=site_url()?>/wp-content/uploads/hero-700x364.jpg 960w,<?=site_url()?>/wp-content/uploads/hero-250x130.jpg 320w" src="<?=site_url()?>/wp-content/uploads/hero.jpg" /></div>

			<h1>Creating technologies to view chemical processes in the brain and body in real time.</h1>

		</section>

		<section class="intro">
			<!-- <div>
				<h3>OUR UNIQUE ADVANTAGE.</h3>
				<p>We offer a distinctive, partner-driven approach to research.</p>
			</div> -->
			<div>
				At Northeastern's <b>Institute for Chemical Imaging of Living Systems</b>, we develop imaging tools to highlight chemical processes—enabling clinicians to better diagnose and treat disease.
			</div>
		</section>

		<section class="fullwidth news">
			<!-- <h3>Section Title</h3> -->
			<ul>
				<li>
					<!-- <a href="https://www.northeastern.edu" title="Click to read more" target="_blank"> -->
						<div><img src="<?=site_url()?>/wp-content/uploads/brain.jpg" /></div>
						<p class="title" style="font-weight: bold;">Chemical-based Imaging</p>
						<!-- <p class="author">by Author Name</p> -->
						<p>Chemistry-based imaging—the next frontier in medical science—will lead to advances such as better understanding of disease, faster pathways to treatment, and technologies that harness the brain-machine interface.</p>
						<!-- <span>Read More</span> -->
					<!-- </a> -->
				</li>
				<li>
					<!-- <a href="https://www.northeastern.edu" title="Click to read more" target="_blank"> -->
						<div><img src="<?=site_url()?>/wp-content/uploads/laby.jpg" /></div>
						<p class="title" style="font-weight: bold;">Pre-eminent Research Facility</p>
						<!-- <p class="author">by Author Name</p> -->
						<p>In partnership with Zeiss, an international leader in imaging systems, we’ve created a pre-eminent research facility with five state-of-the-art microscopes that researchers at Northeastern and other institutions can reserve for use.</p>
						<!-- <span>Read More</span> -->
					<!-- </a> -->
				</li>
				<li>
					<!-- <a href="https://www.northeastern.edu" title="Click to read more" target="_blank"> -->
						<div><img src="<?=site_url()?>/wp-content/uploads/mach.jpg" /></div>
						<p class="title" style="font-weight: bold;">Interdisciplinary Collaboration</p>
						<!-- <p class="author">by Author Name</p> -->
						<p>Our researchers collaborate across six core disciplines—probe development, animal models, probe delivery, imaging technologies, embedded systems, and signal processing—to develop breakthrough imaging tools.</p>
						<!-- <span>Read More</span> -->
					<!-- </a> -->
				</li>
			</ul>
		</section>

		<!-- <section class="fullwidth stats">
			<h3>Section Title</h3>
			<ul>
				<li>
					111%
					<p>This is the supporting text below the stat</p>
				</li>
				<li>
					111%
					<p>This is the supporting text below the stat</p>
				</li>
				<li>
					111%
					<p>This is the supporting text below the stat</p>
				</li>
			</ul>
		</section> -->

	</main>

<?php get_footer(); ?>
