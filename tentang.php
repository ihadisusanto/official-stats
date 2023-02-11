<?php require("header.php"); 
    $data = file_get_contents('tentang.json');
    $tentang = json_decode($data, true);
?>

<link rel="stylesheet" href="css/tentang.css">

<h1 class="text-center text-black container-fluid">
    Tentang Kami<hr>
</h1>
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/PPImam.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Imam Hadi Susanto</h4>
                        <h5><a href="mailto:222011324@stis.ac.id">222011324@stis.ac.id</a></h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:2">
                                <a href="https://twitter.com/ImamHadiSusant3" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="https://www.instagram.com/susanto.i/?next=%2F" target="_blank">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/PPZuhdi.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Zuhdi Ali Hisyam</h4>
                        <h5><a href="mailto:222011642@stis.ac.id">222011642@stis.ac.id</a></h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:2">
                                <a href="https://twitter.com/alihisyam_" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="https://www.instagram.com/zuhdiali_/?next=%2F" target="_blank">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/PPMahbub.JPG"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">M.Mahbubbillah</h4>
                        <h5><a href="mailto:222011569@stis.ac.id">222011569@stis.ac.id</a></h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:2">
                                <a href="https://twitter.com/mmahbubbillah" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="https://www.instagram.com/m.mahbubbillah/?next=%2F" target="_blank">
                                    <span class="fab fa-instagram" ></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 flex-column justify-content-center">
                <p  style="text-align:center"; class="mb-0 mt-3">Imam Hadi Susanto</p>
                <p  style="text-align:center"; >222011324</p>
            </div>
            <div class="col-lg-4 flex-column justify-content-center">
                <p style="text-align:center"; class="mb-0 mt-3">Zuhdi Ali Hisyam</p>
                <p  style="text-align:center"; >222011642</p>
            </div>
            <div class="col-lg-4 flex-column justify-content-center">
                <p style="text-align:center"; class="mb-0 mt-3">M.Mahbubbillah</p>
                <p style="text-align:center"; >222011569</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center text-black container-fluid">
            <?= $tentang[0]["judul"]  ?>
            <hr>
        </h1>
        <p style="text-indent:3rem";><?= $tentang[0]["konten 1"] ?></p>
        <p style="text-indent:3rem";><?= $tentang[0]["konten 2"]?></p>
    </div>
    

<?php require("footer.php"); ?>