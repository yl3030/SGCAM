<?php 
    $pageName = "media";
    $pageTitle = "最新消息";
    $pageBannerPc = "../img/banner_news_pc.png";
    $pageBannerM = "../img/banner_news_m.png";
    $newsDate = [
        "2023/02/02",
        "2023/02/01",
        "2023/02/01",
        "2023/01/31",
        "2023/01/30",
        "2023/01/29",
        "2023/01/28",
        "2023/01/27",
        "2023/01/26",
        "2023/01/25",
    ];
    $newsTitle = [
        "創火小的整！當高雖有設所，元落資山，標續方面情眼我……我導事",
        "物草媽，取民化……傳什我、發是性時",
        "醫同景調家化人的的全但氣學太可花表共論知公的奇常議嗎自！",
        "呢富部里待成父生有價在。些時回近？前考要。",
        "義士們近那會力道人們方裡也？",
        "題會改紙辦一水一理國她也密會開在。一建有讀是呢。",
        "試廣一由，成下響水環一戰一常雖的主在本公慢解心歷業親超照結實南！",
        "的在為？時題在大子光國園排難面星經軍由門、地合我所大",
        "代車解親方頭，速花麼向事新富才。",
        "入照合野望美除有保十你所個主頭早兩爭係保的理書",
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
                <li><a class="active">最新消息</a></li>
            </ul>
        </div>

        <div class="news-list">
            <?php for($i=0;$i<10;$i++) { ?>
                <a href="./news_detail.php" class="list_item news-list_item">
                    <div class="list_text">
                        <p class="news-list_date"><?php echo $newsDate[$i] ?></p>
                        <h3 class="news-list_title"><?php echo $newsTitle[$i] ?></h3>
                    </div>
                    <div class="list_icon"><img src="../img/arrowLong-right-white.svg" alt=""></div>
                </a>
            <?php } ?>
            
        </div>
        <?php include("../include/pagination.php") ?>

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>


</body>
</html>