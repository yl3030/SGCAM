<?php
    $pageName = "product";
    $pageTitle = "CNC球面異形四軸玻璃切割機";
    $pageBannerPc = "../img/banner_product_pc.png";
    $pageBannerM = "../img/banner_product_m.png";
    $productSecondPic = [
        "../img/pic_9.png",
        "../img/pic_10.png",
        "../img/pic_11.png",
        "../img/pic_12.png",
        "../img/pic_13.png",
        "../img/pic_14.png",
    ];
    $productSecondTitle = [
        "7701",
        "7706",
        "7703",
        "7705",
        "7704",
        "7702",
    ];
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("../include/meta.php") ?>
</head>
<body>
    <?php include("./header.php") ?>

    <main>
    
        <?php include("../include/banner.php") ?>

        <div class="breadcrumb-common container">
            <ul class="d-flex align-items-center justify-content-end flex-wrap ms-auto">
                <li class="breadcrumb-common_home">
                    <a href="./index.php">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_104_604)">
                                <path d="M15.7313 7.15265L8.55261 0.611477C8.23752 0.324321 7.76236 0.324353 7.44739 0.611446L0.268688 7.15268C0.0162826 7.38268 -0.0670923 7.73706 0.05622 8.05546C0.179564 8.37387 0.479875 8.57959 0.821343 8.57959H1.9679V15.1334C1.9679 15.3932 2.17859 15.6039 2.43843 15.6039H6.37324C6.63308 15.6039 6.84377 15.3932 6.84377 15.1334V11.1541H9.15633V15.1334C9.15633 15.3932 9.36701 15.6039 9.62686 15.6039H13.5615C13.8213 15.6039 14.032 15.3933 14.032 15.1334V8.57959H15.1788C15.5202 8.57959 15.8206 8.37384 15.9439 8.05546C16.0671 7.73703 15.9837 7.38268 15.7313 7.15265Z" fill="#ACACAC"/>
                                <path d="M13.909 1.33533H10.749L14.3795 4.63645V1.80583C14.3795 1.54598 14.1689 1.33533 13.909 1.33533Z" fill="#ACACAC"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_104_604">
                                    <rect width="16" height="16" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li><a href="./product_mainClass.php">產品介紹</a></li>
                <li><a class="active">CNC車床CAD/CAM軟體</a></li>
            </ul>
        </div>

        <div class="product-intro">
            <p>
                國內市佔率最高的CNC車床CAD/CAM軟體全中文畫面，簡單易學、繪圖快速，最符合加工業使用的CAD/CAM軟體
            </p>
            <ul class="product-intro_list">
                <li>任意形狀皆可切割，完全不用製作靠模，無比例限制。</li>
                <li>直接以圖形切割，省去製作靠模調教的時間。</li>
                <li>四軸同動CNC伺服控制系統，切割快速平順切割路徑行程皆可任意調整</li>
                <li>刀輪自動補正真正以球面法向量切割，切線均勻切口平整無毛邊接點準確。</li>
                <li>一機多用大R、小R、雙曲玻璃皆可做切割。</li>
                <li>可以直接作左右對稱的鏡射動作(左右後視鏡)。</li>
                <li>可由自行繪製CAD圖形或讀入DXF圖檔直接切割。</li>
                <li>圖形可以做單方向或雙方向的縮放動作，微調快速。</li>
                <li>快速有效率贏得商機，降低生產成本、提升競爭力的好幫手。</li>
            </ul>
            <div class="product-intro_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/J1C8sGoI9B0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="product-catalogue mb-footer">
            <div class="container">
                <div class="row">
                    <?php for ($i=0; $i<6; $i++) { ?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="./product_detail.php" class="product-catalogue_item">
                                <div class="product-catalogue_pic">
                                    <img src="<?php echo $productSecondPic[$i] ?>" alt="">
                                    <div class="product-catalogue_arrow">
                                        <img src="../img/arrowLong-right-white.svg" alt="">
                                    </div>
                                </div>
                                <h3 class="product-catalogue_title"><?php echo $productSecondTitle[$i] ?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        

        


    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>


</body>
</html>