<?php 
    $pageTitle = "詢價車";
    $pageBannerPc = "../img/banner_inquiry_pc.png";
    $pageBannerM = "../img/banner_inquiry_m.png";
    $inquiryPic = [
        "../img/pic_1.png",
        "../img/pic_2.png",
        "../img/pic_3.png",
        "../img/pic_4.png",
    ];
    $inquiryTitle = [
        "CNC銑床",
        "CNC車銑複合",
        "CNC程式傳輸管理",
        "CNC銑床2.5D",
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
                <li><a class="active">詢價車</a></li>
            </ul>
        </div>

        <div class="inquiry-list">
            <div class="inquiry-list_inner">
                <h2>詢價清單</h2>
                <div class="row">
                    <?php for ($i=0;$i<4;$i++){ ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="inquiry-list_item">
                                <a href="./product_detail.php" class="inquiry-list_link">
                                    <div class="inquiry-list_pic"><img src="<?php echo $inquiryPic[$i] ?>" alt=""></div>
                                    <h3><?php echo $inquiryTitle[$i] ?></h3>
                                </a>
                                <div class="inquiry-list_num">
                                    <button class="inquiry-list_btn inquiry-list_minus">
                                        <svg width="14" height="3" viewBox="0 0 14 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.571289" y="0.714294" width="12.8571" height="1.71429" fill="#ACACAC"/>
                                        </svg>
                                    </button>
                                    <p class="inquiry-list_value">1</p>
                                    <button class="inquiry-list_btn inquiry-list_plus">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.571289" y="5.71429" width="12.8571" height="1.71429" fill="#ACACAC"/>
                                            <rect x="6.14307" y="13" width="12.8571" height="1.71429" transform="rotate(-90 6.14307 13)" fill="#ACACAC"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="inquiry-form">
            <div class="inquiry-form_inner">
                <form action="" class="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">公司</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">部門</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">地址</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">負責人</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">電話</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">信箱</label>
                                <input type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">傳真</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">部門</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item certify">
                                <label for="">驗證碼</label>
                                <input type="number">
                                <img class="certify_num" src="../img/certify.png" alt="">
                                <img class="certify_update" src="../img/icon_update.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <button>
                        <span>送出</span>
                        <svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33 6.09174C33 5.53945 32.5523 5.09174 32 5.09174H0.696968V7.09174H32C32.5523 7.09174 33 6.64402 33 6.09174Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2944 2.18085L30.363 6.0918L25.2944 10.0028L26.5161 11.5862L32.6109 6.88352C32.8563 6.69418 33 6.40175 33 6.0918C33 5.78186 32.8563 5.48943 32.6109 5.30008L26.5161 0.597412L25.2944 2.18085Z" fill="white"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        $(".inquiry-list_btn").click(function(){
            let num = $(this).parents(".inquiry-list_num").find(".inquiry-list_value").text();
            if($(this).hasClass("inquiry-list_minus")) {
                if(num > 0) {
                    num--;
                }else {
                    num = 0;
                }
            }else if($(this).hasClass("inquiry-list_plus")) {
                num++;
            }
            $(this).parents(".inquiry-list_num").find(".inquiry-list_value").text(num)
        })
    </script>


</body>
</html>