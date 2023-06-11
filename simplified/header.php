<header class="header">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="./index.php" class="header_logo"><img src="../img/logo_simplified.png" alt=""></a>
        <div class="header_link">
            <div class="header_link_icon d-flex flex-wrap align-items-center">
                <div class="header_search d-flex">
                    <div class="header_search_toggle d-lg-flex d-none align-items-center justify-content-center"><img src="../img/search.svg" alt=""></div>
                    <form class="header_search_form d-flex align-items-center">
                        <input type="text">
                        <button>
                            <span class="d-lg-block d-none">搜尋</span>
                            <img class="d-lg-none" src="../img/search.svg" alt="">
                        </button>
                    </form>
                </div>
                <a href="inquiry.php" class="header_cart d-flex align-items-center justify-content-lg-center">
                    <img class="d-lg-block d-none" src="../img/cart-white.svg" alt="">
                    <div class="header_cart_inner d-flex d-lg-none align-items-center">
                        <img src="../img/cart-blue.svg" alt="">
                        <span>詢價車</span>
                    </div>
                </a>
                <div class="header_lang d-lg-flex">
                    <div class="header_lang_active d-flex align-items-center">
                        <img class="d-lg-block d-none" src="../img/earth-white.svg" alt="">
                        <img class="d-lg-none" src="../img/earth-blue.svg" alt="">
                        <span>繁體中文</span>
                    </div>
                    <ul class="header_lang_hide">
                        <li><a href="">簡體中文</a></li>
                        <li><a href="">EN</a></li>
                    </ul>
                </div>
            </div>
            <nav class="header_link_nav">
                <ul class="header_link_nav_first d-lg-flex align-items-center justify-content-end">
                    <li class="drop">
                        <a href="" data-link="./product_mainClass.php" class="<?php if($pageName == "product") echo "active" ?>">產品介紹</a>
                        <ul class="header_link_nav_second">
                            <li><a href="./product_secondClass.php">CNC車床CAD/CAM軟體</a></li>
                            <li><a href="./product_secondClass.php">CNC車銑複合C、Y軸CAD/CAM軟體</a></li>
                            <li><a href="./product_secondClass.php">CNC程式傳輸管理模擬軟體</a></li>
                            <li><a href="./product_secondClass.php">CNC銑床2.5D CAD/CAM軟體</a></li>
                            <li><a href="./product_secondClass.php">CNC產業機台專案開發CAD/CAM軟體</a></li>
                            <li><a href="./product_secondClass.php">CNC球面異形四軸玻璃切割機</a></li>
                        </ul>
                    </li>
                    <li><a href="./download.php" class="<?php if($pageName == "download") echo "active" ?>">軟體下載</a></li>
                    <li class="drop">
                        <a href="" data-link="./news.php" class="<?php if($pageName == "media") echo "active" ?>">媒體專區</a>
                        <ul class="header_link_nav_second">
                            <li><a href="./news.php">最新消息</a></li>
                            <li><a href="./catalogue.php">型錄</a></li>
                        </ul>
                    </li>
                    <li><a href="./about.php" class="<?php if($pageName == "about") echo "active" ?>">關於我們</a></li>
                    <li><a href="./contact.php" class="<?php if($pageName == "contact") echo "active" ?>">聯絡我們</a></li>
                </ul>
            </nav>
        </div>
        <div class="header_menu d-lg-none">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
    </div>
</header>