<h1 class="text-center">Compare Before Watch</h1>




<?php 
// $first_movie = $_GET['first_movie'];
// $second_movie = $_GET['second_movie'];

// echo "first movie is ".$first_movie;
// echo "second  movie is ".$second_movie;


// if ( isset($GET['first_movie']) && isset($_GET['second_movie']))
// {

// 	echo "Get is set";
if ( !empty($_GET['first_movie']) && !empty($_GET['second_movie']))
{
	$first_movie = urlencode($_GET['first_movie']);
	$second_movie = urlencode($_GET['second_movie']);


	$first_movie=file_get_contents("http://www.omdbapi.com/?t=$first_movie");
	$second_movie=file_get_contents("http://www.omdbapi.com/?t=$second_movie");

	$first_movie = json_decode($first_movie);
	$second_movie = json_decode($second_movie);

	if ( $first_movie->Response === "True" && $second_movie->Response === "True")
	{
		?>
		<div class="container compare_body">
			<div class="row">
				<div class = "col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $first_movie->Title; ?></h3>
						</div>
						<div class="panel-body">
							<a href = "#" class = "thumbnail">
								<?php  echo "<img src=\"$first_movie->Poster\">"; ?>

							</a>
							<div class="col-md-4">
								<button class="btn btn-success"><?php echo "Rated : ".$first_movie->Rated.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Rating : ".$first_movie->imdbRating.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Votes : ".$first_movie->imdbVotes.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Year : ".$first_movie->Year.'<br>'; ?></button>
								<br>
								<br>

							</div>
							<div class="col-md-8">
								<button class="btn btn-success"><?php echo "Released : ".$first_movie->Released.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Runtime : ".$first_movie->Runtime.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Genre : ".$first_movie->Genre.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Metascore : ".$first_movie->Metascore.'<br>'; ?></button>
								<br>
								<br>
							</div>

							<div class="col-md-12">
								<p><?php echo $first_movie->Plot.'<br>'; ?></p>
							</div>

							<div class="col-md-12">
								<h5><?php echo "Actors : ".$first_movie->Actors.'<br>';  ?></h5>
							</div>


						</div>
					</div>
				</div>

				<div class = "col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $second_movie->Title; ?></h3>
						</div>
						<div class="panel-body">
							<a href = "#" class = "thumbnail">
								<?php  echo "<img src=\"$second_movie->Poster\">"; ?>

							</a>
							<div class="col-md-4">
								<button class="btn btn-success"><?php echo "Rated : ".$second_movie->Rated.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Rating : ".$second_movie->imdbRating.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Votes : ".$second_movie->imdbVotes.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Year : ".$second_movie->Year.'<br>'; ?></button>
								<br>
								<br>

							</div>
							<div class="col-md-8">
								<button class="btn btn-success"><?php echo "Released : ".$second_movie->Released.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Runtime : ".$second_movie->Runtime.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Genre : ".$second_movie->Genre.'<br>'; ?></button>
								<br>
								<br>
								<button class="btn btn-success"><?php echo "Metascore : ".$second_movie->Metascore.'<br>'; ?></button>
								<br>
								<br>
							</div>

							<div class="col-md-12">
								<p><?php echo $second_movie->Plot.'<br>'; ?></p>
							</div>

							<div class="col-md-12">
								<h5><?php echo "Actors : ".$second_movie->Actors.'<br>';  ?></h5>
							</div>


						</div>
					</div>
				</div>

			</div>
		</div>


		<?php
	}
	else
	{
		?>

		<div class="alert alert-danger" role="alert">Please, check movies name.</div>


		<?php
		
	}
}
else
{
	?>
	<div class="alert alert-danger" role="alert">Please, enter movie name(s).</div>
	<?php
}

?>



<div class="container compare_body">
	<div class="row">
		<div class="col-md-6">
			<h2>Compare Movies</h2>

			<form method="GET">
				<div id="first_name">
					<div class="input-group col-md-12">
						<input name="first_movie" value="<?php if(!empty($_GET['first_movie'])) echo $_GET['first_movie']; ?>" type="text" class="form-control input-lg" placeholder="Enter A Movie Name" />

					</div>
				</div>
				<br>

				<div id="second_name">
					<div class="input-group col-md-12">
						<input name="second_movie" type="text" value="<?php if(!empty($_GET['second_movie'])) echo $_GET['second_movie']; ?>" class="form-control input-lg" placeholder="Enter Another Movie Name" />

					</div>
				</div>
				<br>
				<div id="button_compare">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success">Compare</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>