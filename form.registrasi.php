<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form method="POST" action="proses_registrasi.php">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" id="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jenisKelamin">Jenis Kelamin</label>
            <select class="form-select" id="jenisKelamin" aria-label="Jenis Kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <?php
            $ar_prodi= ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => Bisnis Dogotal];
            ?>
        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" aria-label="Program Studi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="">Pilih Program Studi</option>
                <?php foreach($ar_prodi as $k => $v)
                echo "<option value ='$k'>$v</option>;
                ?>
            </select>
        </div>
        <?php
            $ar_skill=["HTML"=> 10, "CSS"=> 20, "JavaScript"=> 30, "RWD Bootsrap"=> 20, "PHP"=> 30, "Python"=> 30, "Java"=> 50];
            ?>
        <div class="mb-3">
            <label class="form-label d-block">Skill Web &amp; Programming</label>
            <?php
                
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="html" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="html">HTML</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="css" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="css">CSS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="javaScript" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="javaScript">JavaScript</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="rwdBootsrap" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="rwdBootsrap">RWD Bootsrap</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="php" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="php">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="phyton" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="phyton">Phyton</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="java" type="checkbox" name="skillWebProgramming" data-sb-validations="" />
                <label class="form-check-label" for="java">Java</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="domisili">Domisili</label>
            <select class="form-select" id="domisili" aria-label="Domisili">
                <option value="Bogor">Bogor</option>
                <option value="Jakarta">Jakarta</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="text" placeholder="Email" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>