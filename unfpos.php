<?php require("header.php"); 
    $data=file_get_contents('unfpos.json');
    $unfpos = json_decode($data,true)
?>

<div class="container">
    <div class="row">
        <div class="col-1">
            <div class="dropdown position-fixed">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>

                <!-- INI BUAT NAVBAR DI SAMPING -->
                <ul class="dropdown-menu biru-muda dropdown-menu-dark">
                    <li><a class="dropdown-item text-white" href="#unfpos1">Prinsip 1</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos2">Prinsip 2</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos3">Prinsip 3</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos4">Prinsip 4</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos5">Prinsip 5</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos6">Prinsip 6</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos7">Prinsip 7</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos8">Prinsip 8</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos9">Prinsip 9</a></li>
                    <li><a class="dropdown-item text-white" href="#unfpos10">Prinsip 10</a></li>
                    <li><a class="dropdown-item text-white" href="#learn">Lesson Learned</a></li>
                    <li><a class="dropdown-item text-white" href="#manfaat">Manfaat Implementasi UNFPOS</a></li>
                </ul>
            </div>
        </div>
        <div class="col-11">

            <!-- TIAP SECTION DIKASIH BR DAN ID -->
            <br id="unfpos1">
            <h2>
                <?= $unfpos[0]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[0]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=3;$i++){
                            echo '<li>',$unfpos[0]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>

            <br id="unfpos2">
            <h2>
                <?= $unfpos[1]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[1]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=2;$i++){
                            echo '<li>',$unfpos[1]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                    <li>
                        <?= $unfpos[1]["implementasi"]["point 3"]["pengantar"]; ?>
                        <ol>
                            <?php 
                                for($i=0;$i<3;$i++){
                                    echo '<li>',$unfpos[1]["implementasi"]["point 3"]["point"][$i],'</li>';
                                }
                            ?>
                        </ol>
                    </li>
                    <li><?= $unfpos[1]["implementasi"]["point 4"]; ?></li>
                </ul>
            </div>

            <br id="unfpos3">
            <h2>
                <?= $unfpos[2]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[2]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=2;$i++){
                            echo '<li>',$unfpos[2]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>

            <br id="unfpos4">
            <h2>
                <?= $unfpos[3]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=2;$i++){
                            echo '<li>',$unfpos[3]["tujuan"]["tujuan $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[3]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            
            <br id="unfpos5">
            <h2>
                <?= $unfpos[4]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[4]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[4]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>

            <br id="unfpos6">
            <h2>
                <?= $unfpos[5]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[5]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <li>
                        <?= $unfpos[5]["implementasi"]["point 1"]["pengantar"]; ?>
                        <ol>
                            <?php 
                                for($i=0;$i<3;$i++){
                                    echo '<li>',$unfpos[5]["implementasi"]["point 1"]["point"][$i],'</li>';
                                }
                            ?>
                        </ol>
                    </li>
                    <li><?= $unfpos[5]["implementasi"]["point 2"]; ?></li>
                </ul>
            </div>

            <br id="unfpos7">
            <h2>
                <?= $unfpos[6]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[6]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[6]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            
            <br id="unfpos8">
            <h2>
                <?= $unfpos[7]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[7]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[7]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            
            <br id="unfpos9">
            <h2>
                <?= $unfpos[8]["judul"] ?>
            </h2>
            <b>
                Tujuan (Why)
            </b>
            <p>
                <?= $unfpos[8]["tujuan"]["tujuan 1"] ?>        
            </p>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[8]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            
            <br id="unfpos10">
            <h2>
                <?= $unfpos[9]["judul"] ?>
            </h2>
            <hr>
            <b>
                Tujuan (Why)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=3;$i++){
                            echo '<li>',$unfpos[9]["tujuan"]["tujuan $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            <b>
                Implementasi (How)
            </b>
            <div class="container">
                <ul>
                    <?php 
                        for($i=1;$i<=1;$i++){
                            echo '<li>',$unfpos[9]["implementasi"]["point $i"],'</li>';
                        }
                    ?>
                </ul>
            </div>
            
            <br id="learn">
            <h2>
                <?= $unfpos[10]["judul"] ?>
            </h2>
            <hr>
            <p><?= $unfpos[10]["pengantar"]?></p>
            <div class="container">
                <ol>
                <?php 
                    for($i=1;$i<=10;$i++){
                        echo '
                                <li>
                                    <dl>
                                        <dt>',$unfpos[10]["point"]["judul $i"],'<dt>
                                        <dd>',$unfpos[10]["point"]["keterangan $i"],'<dt>
                                    </dl>
                                </li>
                        ';
                    }
                ?>
                </ol>
            </div>

            <br id="manfaat">
            <h2>
                <?= $unfpos[11]["judul"] ?>
            </h2>
            <hr>
            <div class="container">
                <?php 
                    for($i=0;$i<5;$i++){
                        echo '
                            <ul>
                                <li>',$unfpos[11]["point"][$i],'</li>
                            </ul>
                        ';
                    }
                ?>
            </div>

        </div>
    </div>
</div>

<?php require("footer.php"); ?>