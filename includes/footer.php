<?php
$query = query("SELECT * FROM kontak_sekolah");
confirmQuery($query);
$result = mysqli_fetch_assoc($query);
?>

<!-- Footer -->
<div class="bg-secondary text-white">
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col-md-6 mb-3">
                <h3 class="fw-semibold">SDN 1 Purwokerto Kulon</h3>
                <div class="row my-4">
                    <hr>
                    <div class="col">
                        <p class="fw-light" style="text-align: justify">“Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri”</p>
                    </div>
                </div>
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

            <div class="col mb-3" style="text-align: right">
            </div>

            <div class="col" style="text-align: right">
                <h5 class="fw-semibold">Ikuti Kami di</h5>
                <hr class="my-4">
                <ul class="nav flex-column">
                    <li class="nav-item mb-1">
                        <a href="sdn1pwtk@gmail.com" class="nav-link p-0 link-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg> Facebook</a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="#" class="nav-link p-0 link-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg> YouTube</a>
                    </li>
                    <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                    <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                    <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                </ul>
                <div class="col-md-12" style="text-align: right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.105088111584!2d109.23929456977537!3d-7.43465099999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7de6794df0fd32f5!2sSD%20NEGERI%201%20PURWOKERTO%20KULON!5e0!3m2!1sid!2sid!4v1658986264951!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2014 - 2022 SDN 1 Purwokerto Kulon. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End of Footer -->

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="js/jquery-3.6.0.min.js"></script>

</body>

</html>