<?php require("header.php");
$data = file_get_contents('beranda.json');
$beranda = json_decode($data, true);
?>

<div class="container">
    <div class="row">
        <div class="col-1">
            <div class="dropdown position-fixed">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
                <ul class="dropdown-menu biru-muda dropdown-menu-dark">
                    <li><a class="dropdown-item text-white" href="#definisi-os">Apa itu Official Statistics?</a></li>
                    <li><a class="dropdown-item text-white" href="#sumber_data">Sumber Data dalam Official Statistics?</a></li>
                    <li><a class="dropdown-item text-white" href="#ssn-indo">SSN di Indonesia</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos">UNFPOS</a></li>
                </ul>
            </div>
        </div>
        <div class="col-11">
            <br id="definisi-os">
            <h1>
                <?= $beranda[0]["judul"]; ?>
            </h1>
            <hr>
            <p>
                <?= $beranda[0]["content1"]["pengantar"]; ?>
            </p>
            <div class="container">
                <dl>
                    <dt><?= $beranda[0]["content1"]["subtitle1"] ?></dt>
                    <dd><?= $beranda[0]["content1"]["subcontent1"] ?></dd>
                    <dt><?= $beranda[0]["content1"]["subtitle2"] ?></dt>
                    <dd><?= $beranda[0]["content1"]["subcontent2"] ?></dd>
                    <dt><?= $beranda[0]["content1"]["subtitle3"] ?></dt>
                    <dd><?= $beranda[0]["content1"]["subcontent3"] ?></dd>
                </dl>
            </div>
            <p>
                <?= $beranda[0]["content2"]["pengantar"]; ?>
            </p>
            <ul>
                <li><?= $beranda[0]["content2"]["kriteria"][0]; ?></li>
                <li><?= $beranda[0]["content2"]["kriteria"][1]; ?></li>
                <li><?= $beranda[0]["content2"]["kriteria"][2]; ?></li>
            </ul>
            <p>
                <?= $beranda[0]["content3"]["pengantar"]; ?>
            </p>
            <div class="text-center container">
                <img src="img/characters.png" class="rounded img-responsive" style="width: 100%;">
            </div>
            <br>
            <div class="container">
                <dl>
                    <dt><?= $beranda[0]["content3"]["content"]["judul1"]; ?></dt>
                    <dd><?= $beranda[0]["content3"]["content"]["subjudul1"]; ?></dd>
                    <dt><?= $beranda[0]["content3"]["content"]["judul2"]; ?></dt>
                    <dd><?= $beranda[0]["content3"]["content"]["subjudul2"]; ?></dd>
                    <dt><?= $beranda[0]["content3"]["content"]["judul3"]; ?></dt>
                    <dd><?= $beranda[0]["content3"]["content"]["subjudul3"]; ?></dd>
                </dl>
            </div>

            <br id="sumber_data">
            <h1><?= $beranda[1]["judul"]; ?> </h1>
            <hr>
            <p>
                <?= $beranda[1]["pengantar"]; ?>
            </p>
            <div class="container">
                <dl>
                    <dt><?= $beranda[1]["content"]["judul1"]; ?></dt>
                    <dd><?= $beranda[1]["content"]["subcontent1"]; ?></dd>
                    <dt><?= $beranda[1]["content"]["judul2"]; ?></dt>
                    <dd><?= $beranda[1]["content"]["subcontent2"]; ?></dd>
                    <dt><?= $beranda[1]["content"]["judul3"]; ?></dt>
                    <dd><?= $beranda[1]["content"]["subcontent3"]; ?></dd>
                </dl>
            </div>


            <br id="ssn-indo">
            <h1><?= $beranda[2]["judul"]; ?></h1>
            <hr>
            <p>
                <?= $beranda[2]["pengantar1"]; ?>
            </p>
            <a class="btn btn-secondary abu" href="https://ppid.bps.go.id/app/konten/0000/Profil-BPS.html" target="_blank" role="button">Profil BPS<i class="fa-solid fa-arrow-right"></i></a>
            <br>
            <div class="container text-center">
                <img src="img/bps.jpg" class="rounded img-responsive" style="width: 100%;">
            </div>
            <p>
                <? $beranda[2]["pengantar2"]; ?>
            </p>
            <ul>
                <li><?= $beranda[2]["component1"][0]; ?></li>
                <li><?= $beranda[2]["component1"][1]; ?></li>
                <li><?= $beranda[2]["component1"][2]; ?></li>
                <li><?= $beranda[2]["component1"][3]; ?></li>
                <li><?= $beranda[2]["component1"][4]; ?></li>
                <li><?= $beranda[2]["component1"][5]; ?></li>
            </ul>
            <p>
                <?= $beranda[2]["pengantar3"]; ?>
            </p>
            <div class=" container">
                <dl>
                    <dt><?= $beranda[2]["component3"]["judul1"]; ?></dt>
                    <dd><?= $beranda[2]["component3"]["subcontent1"]; ?></dd>
                    <dt><?= $beranda[2]["component3"]["judul2"]; ?></dt>
                    <dd><?= $beranda[2]["component3"]["subcontent2"]; ?></dd>
                    <dt><?= $beranda[2]["component3"]["judul3"]; ?></dt>
                    <dd><?= $beranda[2]["component3"]["subcontent3"]; ?></dd>
                </dl>
            </div>
            <p><?= $beranda[2]["pengantar4"]; ?></p>
            <div class="text-center container-fluid p-0">
                <img src="img/ssn.png" class="rounded" style="max-width: 100%;">
            </div>
            <br>
            <p><?= $beranda[2]["pengantar5"]; ?></p>

            <br id="unfpos">
            <h1><?= $beranda[3]["judul"]; ?></h1>
            <p>
            <hr>
                <?= $beranda[3]["pengantar1"]; ?>
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">UNFPOS</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo '
                            <tr>
                                <th>', $beranda[3]["component1"]["judul$i"], '</th>
                                <td>', $beranda[3]["component1"]["subcontent$i"], '</td>
                            </tr>
                            ';
                    }
                    ?>
                </tbody>
            </table>
            <p>
                <?= $beranda[3]["pengantar2"]; ?>
            </p>
            <a class="btn btn-secondary abu" href="unfpos.php" role="button">UNFPOS <i class="fa-solid fa-arrow-right"></i></a>
            <br>
            <br>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>