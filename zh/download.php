<?php 
    $pageName = "download";
    $pageTitle = "軟體下載";
    $pageBannerPc = "../img/banner_download_pc_v3.png";
    $pageBannerM = "../img/banner_download_pc_v3.png";
    $downloadTitle = [
        "車床CAD/CAM軟體",
        "銑床CAD/CAM軟體",
        "CNC程式傳輸管理軟體"
    ]
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
                <li><a class="active">軟體下載</a></li>
            </ul>
        </div>

        <div class="download mb-footer">
            <div class="container">
                <div class="download_inner">
                    <nav class="download_nav">
                        <div class="download_nav_active d-lg-none">
                            <span>軟體安裝程式</span>
                            <img src="../img/arrow_down_blue.svg" alt="">
                        </div>
                        <ul>
                            <li><a href="" class="active">軟體安裝程式</a></li>
                            <li><a href="">USB KEY驅動程式</a></li>
                            <li><a href="">工具</a></li>
                            <li><a href="">軟體影片教學</a></li>
                            <li><a href="">多國語言安裝程式</a></li>
                            <li><a href="">網路版安裝程式</a></li>
                        </ul>
                    </nav>
                    <div class="download_list">
                        <?php for($i=0;$i<3;$i++) { ?>
                            <a href="" class="download_list_item list_item">
                                <div class="list_text"><h3><?php echo $downloadTitle[$i] ?></h3></div>
                                <div class="list_icon"><img src="../img/icon_download.svg" alt=""></div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <?php include("../include/pagination.php") ?>
            </div>
        </div>

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        $(".download_nav_active").click(function(){
            if($(window).width() < 992) {
                $(this).parents(".download_nav").find("ul").slideToggle(300);
            }
        })
    </script>


</body>
</html>