<?php

    const title = "Popüler Kurslar";

    $kategoriler = array("Programlama","Web Geliştrime","Veri Analizi","Office Uygulamaları");

    //Kategoriler alfabetik sıralanır
    sort($kategoriler);

    $kurslar = array(
        "1" => array(
            "baslik" => "Php Kursu",
            "altBaslik" => "Sıfırdan ileriye seviye Php ile web geliştirme kursu",
            "resim" => "php.png",
            "yayinTarihi" => "01.01.2024",
            "yorumSayisi" => 0,
            "begeniSayisi" => 10,
            "onay" => true
        ),
        "2" => array(
            "baslik" => "Python Kursu",
            "altBaslik" => "Sıfırdan ileriye seviye Python programlama",
            "resim" => "python.png",
            "yayinTarihi" => "03.03.2024",
            "yorumSayisi" => 10,
            "begeniSayisi" => 15,
            "onay" => true
        ),
        "3" => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileriye seviye Node.js ile web geliştirme",
            "resim" => "node.png",
            "yayinTarihi" => "05.05.2024",
            "yorumSayisi" => 10,
            "begeniSayisi" => 10,
            "onay" => true
        ),
        "4" =>array(
            "baslik" => "React Kursu",
            "altBaslik" => "Sıfırdan ileriye seviye React ile web geliştirme",
            "resim" => "react.png",
            "yayinTarihi" => "07.07.2024",
            "yorumSayisi" => 0,
            "begeniSayisi" => 5,
            "onay" => false
        )
    );


    // $kurs1_baslik = "Php Kursu";
    // $kurs1_altBaslik= "Sıfırdan ileriye seviye Php ile web geliştirme";
    // $kurs1_resim ="php.png";
    // $kurs1_yayinTarihi = "01.01.2024";
    // $kurs1_yorumSayisi = "100";
    // $kurs1_begeniSayisi = "300";

    // $kurs2_baslik = "Python Kursu";
    // $kurs2_altBaslik= "Sıfırdan ileriye seviye Python programlama";
    // $kurs2_resim ="python.png";
    // $kurs2_yayinTarihi = "03.03.2024";
    // $kurs2_yorumSayisi = "200";
    // $kurs2_begeniSayisi = "400";

    // $kurs3_baslik = "Node.js Kursu";
    // $kurs3_altBaslik= "Sıfırdan ileriye seviye Node.js ile web geliştirme";
    // $kurs3_resim ="node.png";
    // $kurs3_yayinTarihi = "05.05.2024";
    // $kurs3_yorumSayisi = "300";
    // $kurs3_begeniSayisi = "500";


    //Baş harfler büyük başlar, cümlenin geri kalanı küçük harfler olur
    $kurslar["1"]["altBaslik"] = ucfirst(strtolower($kurslar["1"]["altBaslik"])) ;
    $kurslar["2"]["altBaslik"] = ucfirst(strtolower($kurslar["2"]["altBaslik"])) ;
    $kurslar["3"]["altBaslik"] = ucfirst(strtolower($kurslar["3"]["altBaslik"])) ;

    //Cümlede karakter gösteme sınırı belirtilen karakter adedinden sonra "..." işareti koy gibi
    // $kurslar["1"]["altBaslik"] = substr($kurslar["1"]["altBaslik"],0,100)."...";
    // $kurslar["2"]["altBaslik"] = substr($kurslar["2"]["altBaslik"],0,100)."...";
    // $kurslar["3"]["altBaslik"] = substr($kurslar["3"]["altBaslik"],0,100)."...";
    // $kurslar["4"]["altBaslik"] = substr($kurslar["4"]["altBaslik"],0,100)."...";

    //İlgisi kursa url oluşturma
    $kurs1_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar["1"]["baslik"]));
    $kurs2_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar["2"]["baslik"]));
    $kurs3_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar["3"]["baslik"]));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>

    <div class="container my-3">
        
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-actiom"><?php echo $kategoriler[0];?></a>
                    <a href="#" class="list-group-item list-group-item-actiom "><?php echo $kategoriler[1];?></a>
                    <a href="#" class="list-group-item list-group-item-actiom"><?php echo $kategoriler[2];?></a>
                    <a href="#" class="list-group-item list-group-item-actiom active"><?php echo $kategoriler[3];?></a>
                </div>
            </div>
            <div class="col-9">
                <h2 class="mb-3"><?php echo title; ?></h2>
                <p class="lead">
                    <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir.
                </p>

                <?php if($kurslar["1"]["onay"]): ?>

                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>">
                                        <?php echo $kurslar["1"]["baslik"];?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["1"]["altBaslik"]) > 50 ): ?>
                                        <?php echo substr($kurslar["1"]["altBaslik"],0,50)."..."?>
                                    <?php else:  ?>
                                        <?php echo $kurslar["1"]["altBaslik"]; ?>
                                    <?php endif  ?>
                                    
                                </p>
                                <p>
                                    <?php if($kurslar["1"]["begeniSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-primary">
                                            Beğeni: <?php echo $kurslar["1"]["begeniSayisi"]; ?>
                                        </span>
                                    <?php endif ?>
                    
                                    <?php if($kurslar["1"]["yorumSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-danger">
                                            Yorum: <?php echo $kurslar["1"]["yorumSayisi"]; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounden-pill text-bg-warning">
                                            İlk yorumu sen yap..
                                        </span>
                                    <?php endif ?>
                                </p>
                            </div>
                            </div>
                        </div>  
                    </div> 

                <?php endif ?>

                <?php if($kurslar["2"]["onay"]): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs2_url; ?>">
                                        <?php echo $kurslar["2"]["baslik"];?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["2"]["altBaslik"]) > 50 ): ?>
                                        <?php echo substr($kurslar["2"]["altBaslik"],0,50)."..."?>
                                    <?php else:  ?>
                                        <?php echo $kurslar["2"]["altBaslik"]; ?>
                                    <?php endif  ?>
                                    
                                </p>
                                <p>
                                    <?php if($kurslar["2"]["begeniSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-primary">
                                            Beğeni: <?php echo $kurslar["2"]["begeniSayisi"]; ?>
                                        </span>
                                    <?php endif ?>
                    
                                    <?php if($kurslar["2"]["yorumSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-danger">
                                            Yorum: <?php echo $kurslar["2"]["yorumSayisi"]; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounden-pill text-bg-warning">
                                            İlk yorumu sen yap..
                                        </span>
                                    <?php endif ?>
                                </p>
                            </div>
                            </div>
                        </div>  
                    </div> 

                <?php endif ?>
               
                <?php if($kurslar["3"]["onay"]): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["3"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs3_url; ?>">
                                        <?php echo $kurslar["3"]["baslik"];?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["3"]["altBaslik"]) > 50 ): ?>
                                        <?php echo substr($kurslar["3"]["altBaslik"],0,50)."..."?>
                                    <?php else:  ?>
                                        <?php echo $kurslar["3"]["altBaslik"]; ?>
                                    <?php endif  ?>
                                    
                                </p>
                                <p>
                                    <?php if($kurslar["3"]["begeniSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-primary">
                                            Beğeni: <?php echo $kurslar["3"]["begeniSayisi"]; ?>
                                        </span>
                                    <?php endif ?>
                    
                                    <?php if($kurslar["3"]["yorumSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-danger">
                                            Yorum: <?php echo $kurslar["3"]["yorumSayisi"]; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounden-pill text-bg-warning">
                                            İlk yorumu sen yap..
                                        </span>
                                    <?php endif ?>
                                </p>
                            </div>
                            </div>
                        </div>  
                    </div> 

                <?php endif ?>

                <?php if($kurslar["4"]["onay"]): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["4"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs4_url; ?>">
                                        <?php echo $kurslar["4"]["baslik"];?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["4"]["altBaslik"]) > 50 ): ?>
                                        <?php echo substr($kurslar["4"]["altBaslik"],0,50)."..."?>
                                    <?php else:  ?>
                                        <?php echo $kurslar["4"]["altBaslik"]; ?>
                                    <?php endif  ?>
                                    
                                </p>
                                <p>
                                    <?php if($kurslar["4"]["begeniSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-primary">
                                            Beğeni: <?php echo $kurslar["4"]["begeniSayisi"]; ?>
                                        </span>
                                    <?php endif ?>
                    
                                    <?php if($kurslar["4"]["yorumSayisi"] > 0):?>
                                        <span class="badge rounden-pill text-bg-danger">
                                            Yorum: <?php echo $kurslar["4"]["yorumSayisi"]; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounden-pill text-bg-warning">
                                            İlk yorumu sen yap..
                                        </span>
                                    <?php endif ?>
                                </p>
                            </div>
                            </div>
                        </div>  
                    </div> 

                <?php endif ?>

                
        </div>

        
    </div>

</body>
</html>