<?php

    const title = "Popüler Kurslar";

    $kategoriler = array(
        array ("kategori_adi" => "Programlama", "aktif" => true), 
        array ("kategori_adi" => "Web Geliştrime", "aktif" => false),
        array ("kategori_adi" => "Veri Analizi", "aktif" => false),
        array ("kategori_adi" => "Office Uygulamaları", "aktif" => false),
        array ("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
    );
    
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
            "onay" => true
        )
    );

?>