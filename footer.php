<footer class="ly_footer hp_ptSm hp_bgc">
    <div class="ly_inner hp_pbSm">
        <div class="bl_footer_container">
            <a class="el_logo" href="<?php echo esc_url(home_url('/'));?>">
                <div>
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ画像" />
                </div>
            </a>
            <img class="hp_centering" src="<?php bloginfo('template_url');?>/img/followus.png" alt="フォロー促すバナー">
            <div class="el_icon">
                <a href="https://www.instagram.com/shanties.ikeshita/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/icon_instagram.png" alt="インスタグラムのリンクアイコン" /></a>
            </div>
        </div>
    </div>
    <div class="ly_copyright">
        <div class="ly_inner hp_pt20 hp_pb20">
            <span>©️2022 Shanties Rights Reserved.</span>
            <a href="https://ss-design1104.com/" target="_blank" rel="noopener noreferrer" class="bl_production">
                <p>produced by</p>
                <img src="<?php bloginfo('template_url');?>/img/ss-design_logo.png" alt="SS-DESIGNのロゴ">
            </a>
        </div>
    </div>
</footer>
</div>
<!--ローディングアニメーション -->
<div class="loading">
    <div class="loading-animation">
        <a class="el_logo">
            <img src=" <?php bloginfo('template_url');?>/img/logo.png" alt="ロゴマーク" />
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
<?php wp_footer();?>
<!-- AOS実装 -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>