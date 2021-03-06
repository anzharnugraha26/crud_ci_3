<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Form Input</title>
</head>

<body>
	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card mt-5">
						<div class="card-header">
							<h3>Input Data Mahasiswa</h3>
						</div>
						<div class="card-body">
							<form class="mb-3" action="<?php echo base_url('Welcome/tambahData') ?>" method="post">
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Nim</label>
									<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim" required> 
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Nama</label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="nama" required>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Jurusan</label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="jurusan" required>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</main>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>
