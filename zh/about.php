<?php 
    $pageName = "about";
    $pageTitle = "關於我們";
    $pageBannerPc = "../img/banner_about_pc_v2.png";
    $pageBannerM = "../img/banner_about_m_v2.png";
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
                <li><a class="active">關於我們</a></li>
            </ul>
        </div>

        <div class="about">
            <div class="about_picText d-flex flex-wrap">
                <div class="about_picText_pic"><img src="../img/about.png" alt=""></div>
                <div class="about_picText_text">
                    <p>
                        國際世佳科技有限公司創立於1983年，多年來均致力在CNC產業機台所需的專業軟體，至今已經成為台灣在這個領域的代表性廠商。由於近年來CNC機械加工的應用日趨多元化，為滿足客戶在各種不同應用之所需，國際世佳科技持續不斷投入技術研發，CAD/CAM軟體也陸續推出許多強大的功能，使客戶在機械加工上能夠無往不利。
                    </p>
                </div>
            </div>
            <div class="about_slogan mb-footer">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="about_slogan_item">技術</div>
                        <div class="about_slogan_item">服務</div>
                        <div class="about_slogan_item">創新</div>
                        <div class="about_slogan_item">人性化</div>
                    </div>
                    <p class="about_slogan_text">
                        國際世佳秉持著【技術】、【服務】、【創新】、【人性化】的經營理念，追求產品技術上的不斷提升，我們認為滿足客戶的需求才能帶來公司的成長，我們將提供最佳的服務，與客戶一同創造未來。國際世佳的研發團隊有鑒於加工業技術提升是必然趨勢，也為因應科技的不斷創新，台灣的加工業者無不卯足全力跟著前進增添新設備。但是在大量投資新設備的背後，加工業者都有相同的隱憂存在，就是人員技術層面不足造成新設備功能無法完全發揮。公司將針對加工業的需求積極創新研發加工軟體，讓加工業者的設備發揮最大的功效，以符合經濟效益。並以提升台灣的加工技術層次為基礎，放眼全球加工業，期望達到加工軟體指定品牌【SGCAM】能在世界各地發光發熱。
                    </p>
                </div>
            </div>
        </div>

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>


</body>
</html>