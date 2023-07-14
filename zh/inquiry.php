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

        <div class="d-lg-block d-flex flex-wrap">
            <div class="inquiry-list order-2">
                <div class="inquiry-list_inner">
                    <h2>詢價清單</h2>
                    <div class="row">
                        <?php for ($i=0;$i<4;$i++){ ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="inquiry-list_item">
                                    <div class="inquiry-list_link">
                                        <div class="inquiry-list_pic">
                                            <a href="./product_detail.php" class="inquiry-list_pic_link">
                                                <img src="<?php echo $inquiryPic[$i] ?>" alt="">
                                                <div class="inquiry-list_pic_mask"></div>
                                            </a>
                                            <img class="inquiry-list_delete" src="../img/icon_x.svg" alt="">
                                        </div>
                                        <h3><?php echo $inquiryTitle[$i] ?></h3>
                                    </div>
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

            <div class="inquiry-form order-1">
                <div class="inquiry-form_inner">
                    <form action="" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contactForm_item inquiry-form_item">
                                    <label for="">姓名</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contactForm_item inquiry-form_item">
                                    <label for="">公司</label>
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
                            <div class="col-12">
                                <div class="contactForm_item inquiry-form_item textarea">
                                    <label for="">訊息</label>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contactForm_item inquiry-form_item certify">
                                    <label for="">驗證碼</label>
                                    <input type="number">
                                    <img class="certify_num" src="../img/certify.png" alt="">
                                    <svg class="certify_update" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.91328 1.33333C6.55833 1.33398 5.23468 1.74082 4.11328 2.50133L3.13795 1.52933C3.04476 1.43616 2.92604 1.37271 2.7968 1.34697C2.66756 1.32124 2.53359 1.33439 2.41182 1.38475C2.29005 1.43511 2.18593 1.52044 2.11263 1.62994C2.03932 1.73945 2.00011 1.86822 1.99995 2V5.33333C1.99995 5.51014 2.07019 5.67971 2.19521 5.80474C2.32024 5.92976 2.48981 6 2.66662 6H5.99995C6.13178 5.99997 6.26065 5.96086 6.37026 5.8876C6.47986 5.81434 6.56529 5.71023 6.61574 5.58843C6.66618 5.46663 6.67939 5.33261 6.65367 5.20331C6.62796 5.07401 6.56449 4.95523 6.47128 4.862L6.05728 4.448C6.67354 4.13284 7.35978 3.97948 8.05157 4.00232C8.74336 4.02516 9.41799 4.22344 10.0121 4.57856C10.6062 4.93367 11.1004 5.43397 11.4481 6.03245C11.7958 6.63094 11.9857 7.30798 12 8C11.9773 8.98244 11.6022 9.924 10.9432 10.6529C10.2841 11.3819 9.385 11.8496 8.40981 11.9709C7.43461 12.0921 6.44833 11.8588 5.63085 11.3134C4.81336 10.768 4.21916 9.94698 3.95662 9C3.86348 8.66214 3.64107 8.37453 3.33751 8.19941C3.03394 8.02428 2.67363 7.97571 2.33453 8.06421C1.99543 8.15271 1.7048 8.37116 1.52554 8.6723C1.34627 8.97344 1.29277 9.33305 1.37662 9.67333C1.80264 11.248 2.7835 12.6156 4.13839 13.5241C5.49329 14.4325 7.1309 14.8207 8.7494 14.6169C10.3679 14.4131 11.8582 13.6311 12.9456 12.4152C14.033 11.1992 14.6442 9.63112 14.6666 8C14.653 6.22105 13.9344 4.52011 12.6684 3.27032C11.4023 2.02052 9.69226 1.32392 7.91328 1.33333Z" fill="white"/>
                                    </svg>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="ms-auto">
                                    <span>送出</span>
                                    <svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33 6.09174C33 5.53945 32.5523 5.09174 32 5.09174H0.696968V7.09174H32C32.5523 7.09174 33 6.64402 33 6.09174Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2944 2.18085L30.363 6.0918L25.2944 10.0028L26.5161 11.5862L32.6109 6.88352C32.8563 6.69418 33 6.40175 33 6.0918C33 5.78186 32.8563 5.48943 32.6109 5.30008L26.5161 0.597412L25.2944 2.18085Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
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