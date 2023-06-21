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
                <div class="contact_send">
                    <h2>Thank you for your message</h2>
                    <p>
                        Message has been successful<br>
                        Once we receive your message, we will contact you as soon as possible.
                    </p>
                </div>
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