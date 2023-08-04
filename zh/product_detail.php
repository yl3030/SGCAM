<?php 
    $pageName = "product";
    $productDetailPic = [
        "../img/pic_10.png",
        "../img/pic_11.png",
        "../img/pic_12.png",
        "../img/pic_13.png",
        "../img/pic_14.png",
        "../img/pic_8.png",
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
        <div class="product-detail">
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
                    <li><a href="./product_secondClass.php">CNC車床CAD/CAM軟體</a></li>
                    <li><a class="active">多種溝槽加工方式</a></li>
                </ul>
            </div>

            <div class="product-detail_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-lg-1 order-1">
                            <div class="product-detail_slider">
                                <div class="swiper-container product-detail_swiper">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            for ($i=0; $i<6; $i++) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="product-detail_swiper_pic"><img src="<?php echo $productDetailPic[$i] ?>" alt=""></div>
                                            </div>
                                        <?php } ?>
                                    </div>      
                                    <div class="swiper-button-next"><img src="../img/arrowLong-right-white.svg" alt=""></div>
                                    <div class="swiper-button-prev"><img src="../img/arrowLong-left-white.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="product_intro product-detail_text">
                                <h1>7706</h1>
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
                                <button class="btn-addCart">
                                    <img src="../img/cart-white.svg" alt="">
                                    <span>加入詢價車</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 order-lg-3 order-2">
                            <div class="product-detail_thumbs">
                                <div class="swiper-container product-detail_thumbs_swiper">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            for ($i=0; $i<6; $i++) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="product-detail_swiper_pic">
                                                    <img src="<?php echo $productDetailPic[$i] ?>" alt="">
                                                    <div class="product-detail_swiper_mask"></div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="product-detail_thumbs-next"><img src="../img/arrowLong-right-white.svg" alt=""></div>
                                <div class="product-detail_thumbs-prev"><img src="../img/arrowLong-left-white.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            
            
        
            <div class="product-detail_content pb-footer">
                <div class="mb-5">我是編輯器</div>
                <div class="product-detail_content_list">
                    <div class="product-detail_content_list_item">
                        <h3>主功能介紹</h3>
                        <ul>
                            <li>全中文畫面，易學、易懂、易用，為加工業最適合的加工軟體，操作軟體完全不用背指令。</li>
                            <li>可由AutoCAD製圖畫出工件外形，再匯入DXF圖檔，轉換為CNC程式碼。</li>
                            <li>參數式的加工資料設定，作CAM只需三個步驟：（1）選擇工法（2）指定加工參數（3）計算、轉出加工G碼。</li>
                            <li>參數式的資料設定，圖形改變後，加工碼會自動隨之改變。</li>
                        </ul>
                    </div>
                    <div class="product-detail_content_list_item">
                        <h3>智慧型功能</h3>
                        <ul>
                            <li>工法和加工的輪廓可直接複製修改，不必再重新指定。</li>
                            <li>自動清角可自動清除前一把刀具，所留下來的角落殘料。</li>
                            <li>鑽孔時依據孔徑大小，自動搜尋鑽孔的加工位置，不必每一孔都去點選指定。</li>
                            <li>字型可自動截割輪廓外圍不用慢慢編修。</li>
                            <li>支援單筆劃字型刻字。</li>
                            <li>加工路徑最佳化，各加工路徑間依最短距離自動計算，且可指定各加工路徑間不提刀以縮短加工時間，達到最佳之加工效率。</li>
                        </ul>
                    </div>
                </div>
                <div class="product-detail_content_video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/J1C8sGoI9B0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="product-detail_content_table">
                    <h2>功能規格</h2>
                    <table>
                        <tr>
                            <td>CNC球面異形四軸切割機</td>
                            <td>SGCAM-CNCGC4</td>
                        </tr>
                        <tr>
                            <td>最大切割範圍(方形對角)</td>
                            <td>500 mm</td>
                        </tr>
                        <tr>
                            <td>X/Z/A/C最大行程</td>
                            <td>350mm/140mm/90度/無限制</td>
                        </tr>
                        <tr>
                            <td>最大加工速度</td>
                            <td>8,000 mm/min</td>
                        </tr>
                        <tr>
                            <td>可切割玻璃球面R範圍</td>
                            <td>100R ~ 100,000R</td>
                        </tr>
                        <tr>
                            <td>切割精度 (依玻璃球面R而定)</td>
                            <td>±0.05 mm</td>
                        </tr>
                        <tr>
                            <td>機台尺寸(長x寬x高)</td>
                            <td>1400x1000x1650 mm</td>
                        </tr>
                        <tr>
                            <td>機台重量</td>
                            <td>550 kgs</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="product-page detailPage">
            <a href="" class="invalid"><img src="../img/arrowLong-left-white.svg" alt=""></a>
            <a href=""><img src="../img/arrowLong-right-white.svg" alt=""></a>
        </div>

        <div class="product-popup">
            <div class="product-popup_content">
                <div class="swiper-container product-popup_swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            for ($i=0; $i<6; $i++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="product-popup_swiper_pic"><img src="<?php echo $productDetailPic[$i] ?>" alt=""></div>
                            </div>
                        <?php } ?>
                    </div>      
                </div>
                <div class="product-popup-next"><img src="../img/arrowLong-right-blue.svg" alt=""></div>
                <div class="product-popup-prev"><img src="../img/arrowLong-left-blue.svg" alt=""></div>
            </div>
        </div>

    </main>

    <?php include("./footer.php") ?>
    <?php include("../include/script.php") ?>

    <script>
        var swiperThumbs = new Swiper(".product-detail_thumbs_swiper", {
            slidesPerView: 3,
            speed: 800,
            spaceBetween: 6,
            allowTouchMove: false,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".product-detail_thumbs-next",
                prevEl: ".product-detail_thumbs-prev",
            },
            breakpoints: {
                576: {
                    slidesPerView: 5,
                }
            }
        });
        var swiperMain = new Swiper(".product-detail_swiper", {
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiperThumbs,
            },
            speed: 800,
        });
        var swiperPopup = new Swiper(".product-popup_swiper", {
            slidesPerView: 1,        
            observeParents:true,
            observer:true,
            navigation: {
                nextEl: ".product-popup-next",
                prevEl: ".product-popup-prev",
            },
            speed: 800,
        });

        $(".product-detail_swiper .product-detail_swiper_pic").click(function(){
            let index = $(this).parents(".swiper-slide").index();
            $(".product-popup").fadeIn(300).css("display","flex");
            swiperPopup.slideTo(index, 1000, true);
        })

        $(".product-popup").click(function (event) {
            var popupPic = $(".product-popup_content");
            if (!popupPic.is(event.target) && popupPic.has(event.target).length === 0) {
                $(this).fadeOut(300);
                let index = $(this).find(".swiper-slide.swiper-slide-active").index();
                swiperMain.slideTo(index, 1000, true);
            }
        });
    </script>


</body>
</html>