<?php 
    $pageName = "contact";
    $pageTitle = "聯絡我們";
    $pageBannerPc = "../img/banner_contact_pc_v2.png";
    $pageBannerM = "../img/banner_contact_m.png";
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
                <li><a class="active">聯絡我們</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="contact d-lg-flex flex-wrap mb-footer">
                <form action="" class="contactForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">公司</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">姓名</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">手機</label>
                                <input type="number">
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
                                <label for="">分機</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contactForm_item inquiry-form_item">
                                <label for="">地址</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="askItem d-flex flex-wrap">
                                <label for="">詢問項目</label>
                                <div class="askItem_content d-flex flex-wrap ms-sm-3">
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>車床</span>
                                    </div>
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>車銑</span>
                                    </div>
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>銑床</span>
                                    </div>
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>傳輸管理</span>
                                    </div>
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>CNC產業軟體開發</span>
                                    </div>
                                    <div class="askItem_item">
                                        <div class="askItem_check"><img src="../img/icon_check.svg" alt=""></div>
                                        <span>玻璃切割機</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="askContent d-flex flex-wrap">
                                <label for="">詢問內容</label>
                                <textarea class="ms-sm-3" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contactForm_item inquiry-form_item certify">
                                <label for="">驗證碼</label>
                                <input type="number">
                                <img class="certify_num" src="../img/certify.png" alt="">
                                <img class="certify_update" src="../img/icon_update_blue.svg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button>
                                <span>送出</span>
                                <svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33 6.09174C33 5.53945 32.5523 5.09174 32 5.09174H0.696968V7.09174H32C32.5523 7.09174 33 6.64402 33 6.09174Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2944 2.18085L30.363 6.0918L25.2944 10.0028L26.5161 11.5862L32.6109 6.88352C32.8563 6.69418 33 6.40175 33 6.0918C33 5.78186 32.8563 5.48943 32.6109 5.30008L26.5161 0.597412L25.2944 2.18085Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="contact_inform">
                    <ul>
                        <li>
                            <div class="contact_inform_icon"><img src="../img/icon_mail.svg" alt=""></div>
                            <a href="mailto:sales@segacam.com.tw">sales@segacam.com.tw</a>
                        </li>
                        <li>
                            <div class="contact_inform_icon"><img src="../img/icon_phone.svg" alt=""></div>
                            <a href="tel:886-4-7367558">886-4-7367558</a>
                        </li>
                        <li>
                            <div class="contact_inform_icon"><img src="../img/icon_fax.svg" alt=""></div>
                            <a>886-4-7367556</a>
                        </li>
                        <li>
                            <div class="contact_inform_icon"><img src="../img/icon_location.svg" alt=""></div>
                            <a href="https://goo.gl/maps/z6gzJ6BiL38t4CCD8" target="_blank">彰化縣和美鎮彰新路二段243巷89號</a>
                        </li>
                    </ul>
                    <div class="contact_inform_map">
                        <div class="contact_inform_map_content"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.0869061805497!2d120.53079927536038!3d24.098439075325896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346938a60bfb5941%3A0xf4f41ff25a6f3027!2zNTA45b2w5YyW57ij5ZKM576O6Y6u5b2w5paw6Lev5LqM5q61MjQz5be3ODnomZ8!5e0!3m2!1szh-TW!2stw!4v1686479620910!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>
        </div>

        

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        $(".askItem_item").click(function(){
            $(this).toggleClass("active");
        })
    </script>

</body>
</html>