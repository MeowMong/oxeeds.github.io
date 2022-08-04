<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<?php
$query = query("SELECT * FROM kontak_sekolah");
confirmQuery($query);
$result = mysqli_fetch_assoc($query);
?>

<style>
  :root {
    --primary-color: #010712;
    --secondary-color: #818386;
    --bg-color: #FCFDFD;
    --button-color: #3B3636;
    --h1-color: black;
  }

  [data-theme="dark"] {
    --primary-color: #FCFDFD;
    --secondary-color: #818386;
    --bg-color: #010712;
    --button-color: #818386;
    --h1-color: #FCFDFD;
  }

  * {
    margin: 0;
    box-sizing: border-box;
    transition: all 0.3s ease-in-out;
  }

  .contact-container {
    display: flex;
    width: 87vw;
    height: 100vh;
    background: var(--bg-color);
  }

  .right-col {
    background: var(--bg-color);
    width: 50vw;
    height: 100vh;
    padding: 5rem 3.5rem;
  }

  h1,
  label,
  button,
  .description {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    letter-spacing: 0.1rem;
  }

  h1 {
    color: var(--h1-color);
    text-transform: uppercase;
    font-size: 2.5rem;
    letter-spacing: 0.5rem;
    font-weight: 600;
  }

  p {
    color: var(--secondary-color);
    font-size: 0.9rem;
    letter-spacing: 0.01rem;
    width: 40vw;
    margin: 0.25rem 0;
  }

  label,
  .description {
    color: var(--secondary-color);
    text-transform: uppercase;
    font-size: 0.625rem;
  }

  form {
    width: 31.25rem;
    position: relative;
    margin-top: 2rem;
    padding: 1rem 0;
  }

  input,
  textarea,
  label {
    width: 40vw;
    display: block;
  }

  p,
  placeholder,
  input,
  textarea {
    font-family: 'Poppins', sans-serif;
  }

  input::placeholder,
  textarea::placeholder {
    color: var(--primary-color);
  }

  input,
  textarea {
    color: var(--primary-color);
    font-weight: 500;
    background: var(--bg-color);
    border: none;
    border-bottom: 1px solid var(--secondary-color);
    padding: 0.5rem 0;
    margin-bottom: 1rem;
    outline: none;
  }

  textarea {
    resize: none;
  }

  button {
    text-transform: uppercase;
    font-weight: 300;
    background: blue;
    color: white;
    width: 10rem;
    height: 2.25rem;
    border: none;
    border-radius: 2px;
    outline: none;
    cursor: pointer;
  }

  input:hover,
  textarea:hover,
  button:hover {
    opacity: 0.5;
  }

  button:active {
    opacity: 0.8;
  }

  /* Toggle Switch */

  .theme-switch-wrapper {
    display: flex;
    align-items: center;
    text-align: center;
    width: 160px;
    position: absolute;
    top: 0.5rem;
    right: 0;
  }

  .description {
    margin-left: 1.25rem;
  }

  .theme-switch {
    display: inline-block;
    height: 34px;
    position: relative;
    width: 60px;
  }

  .theme-switch input {
    display: none;
  }

  .slider {
    background-color: #ccc;
    bottom: 0;
    cursor: pointer;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: .4s;
  }

  .slider:before {
    background-color: #fff;
    bottom: 0.25rem;
    content: "";
    width: 26px;
    height: 26px;
    left: 0.25rem;
    position: absolute;
    transition: .4s;
  }

  input:checked+.slider {
    background-color: var(--button-color);
  }

  input:checked+.slider:before {
    transform: translateX(26px);
  }

  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  #error,
  #success-msg {
    width: 40vw;
    margin: 0.125rem 0;
    font-size: 0.75rem;
    text-transform: uppercase;
    font-family: 'Poppins';
    color: var(--secondary-color);
  }

  #success-msg {
    transition-delay: 3s;
  }

  @media only screen and (max-width: 950px) {
    .logo {
      width: 8rem;
    }

    h1 {
      font-size: 1.75rem;
    }

    p {
      font-size: 0.7rem;
    }

    input,
    textarea,
    button {
      font-size: 0.65rem;
    }

    .description {
      font-size: 0.3rem;
      margin-left: 0.4rem;
    }

    button {
      width: 7rem;
    }

    .theme-switch-wrapper {
      width: 120px;
    }

    .theme-switch {
      height: 28px;
      width: 50px;
    }

    .theme-switch input {
      display: none;
    }

    .slider:before {
      background-color: #fff;
      bottom: 0.25rem;
      content: "";
      width: 20px;
      height: 20px;
      left: 0.25rem;
      position: absolute;
      transition: .4s;
    }

    input:checked+.slider:before {
      transform: translateX(16px);
    }

    .slider.round {
      border-radius: 15px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

  }
</style>

<!-- Main Content -->
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5">
        <h3 class="fw-semibold">SDN 1 Purwokerto Kulon</h3>
        <hr>
        <p class="fw-light" style="text-align: justify">“Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri”</p>
        <div class="row">
          <div class="col">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg>
              Alamat</p>
          </div>
          <div class="col-9">
            <p style="text-align: left"><?= $result['alamat_sekolah'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg> Telepon</p>
          </div>
          <div class="col-9">
            <p style="text-align: left"><?= $result['no_telp_sekolah'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
              </svg> Email</p>
          </div>
          <div class="col-9">
            <p style="text-align: left"><?= $result['email_sekolah'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-5" style="text-align: right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.105088111584!2d109.23929456977537!3d-7.43465099999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7de6794df0fd32f5!2sSD%20NEGERI%201%20PURWOKERTO%20KULON!5e0!3m2!1sid!2sid!4v1658986264951!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <hr class="my-5">
    <div class="card text-black">
      <?php
      $query = query("SELECT * FROM kontak_sekolah");
      $result = mysqli_fetch_assoc($query);

      // CREATE
      if (isset($_POST['kirim_respon_kontak_sekolah'])) {
        $name_respon_kontak_sekolah = $_POST['name_respon_kontak_sekolah'];
        $kontak_perespon_kontak_sekolah = $_POST['kontak_perespon_kontak_sekolah'];
        $pesan_respon_kontak_sekolah = $_POST['pesan_respon_kontak_sekolah'];

        if ($name_respon_kontak_sekolah && $kontak_perespon_kontak_sekolah && $pesan_respon_kontak_sekolah) {
          // Simpan data
          $query   = query("INSERT INTO respon_kontak_sekolah(name_respon_kontak_sekolah, kontak_perespon_kontak_sekolah, pesan_respon_kontak_sekolah, tanggal_respon_kontak_sekolah) 
                                    VALUES ('$name_respon_kontak_sekolah', '$kontak_perespon_kontak_sekolah', '$pesan_respon_kontak_sekolah', now())");
          confirmQuery($query);
        }
      }
      ?>
      <div class="contact-container">
        <div class="left-col">
        </div>
        <div class="right-col">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <div class="slider round"></div>
            </label>
            <div class="description">Dark Mode</div>
          </div>

          <h1>Contact us</h1>

          <form id="contact-form" method="post">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name_respon_kontak_sekolah" placeholder="Nama Lengkap Anda" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="kontak_perespon_kontak_sekolah" placeholder="E-Mail" required>
            <label for="message">Pesan</label>
            <textarea rows="6" placeholder="Pesan" id="message" name="pesan_respon_kontak_sekolah" required></textarea>
            <button type="submit" id="submit" name="kirim_respon_kontak_sekolah">Kirim</button>

          </form>
          <div id="error"></div>
          <div id="success-msg"></div>
        </div>
      </div>
      <hr class="my-5">
    </div>
</main>
<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>

<!-- Kontak JS -->
<script>
  const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

  function switchTheme(e) {
    if (e.target.checked) {
      document.documentElement.setAttribute('data-theme', 'dark');
    } else {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
</script>