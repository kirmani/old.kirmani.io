<div id="headertop"></div>
<div class="story-menu">
	<div id="logo2">
        <div class="menu-icon" width="23" height="15" viewport="0 0 23 15" version="1.1" xmlns="https://www.w3.org/2000/svg">
            <div class="top rect"></div>
            <div class="middle rect"></div>
            <div class="bottom rect"></div>
        </div>
    </div>
	<div class="speech-bubble"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
</div>
<style>
.menu-icon .rect {
    width: 23px;
    height: 3px;
    left: 10px;
    position: absolute;
    background-color: rgb(165, 172, 188);
    transition: 0.35s all;
}
.menu-icon .top {
    top: 0;
}
.menu-icon .middle {
    top: 6px;
}
.menu-icon .bottom {
    top: 12px;
}
.menu-icon .top.active {
    left: 10px;
    top: 6px;
    transform: rotate(45deg);
}
.menu-icon .middle.active {
    opacity: 0;
}
.menu-icon .bottom.active {
    transform: rotate(-45deg);
    top: 6px;
}
</style>
<script>
$( "#logo2" ).click(function() {
    $(".speech-bubble" ).toggleClass("active");
    $('.menu-icon .top').toggleClass('active');
    $('.menu-icon .middle').toggleClass('active');
    $('.menu-icon .bottom').toggleClass('active');
});
</script>
