<footer class="footer-blue">
    <div class="container flex content-footer">
        <div>
            <img class="logo-polisi" src="<?= base_url('assets/image/lambang.svg'); ?>" alt="">
        </div>
        <div class="menu-about">
            <p class="about">About</p>
            <ul>
                <li class="jarak-li">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>Call Center 110</p>
                </li>
                <li>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>(0267) 8616994</p>
                </li>
                <li class="jarak-li">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://maps.app.goo.gl/WnjC5Uppxv1YDEtH7" target="_blank">Jl. Surotokunto No.110, Kabupaten Karawang, Jawa Barat</a>
                </li>
            </ul>
        </div>
        <div class="be-social">
            <p class="social">Be Social</p>
            <ul>
                <li class="jarak-li">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://www.instagram.com/divisihumaspolri/" target="_blank">divisihumaspolri</a>
                </li>
                <li>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://twitter.com/humaspolri" target="_blank">@divhumas_polri</a>
                </li>
                <li>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="https://www.youtube.com/channel/UCPiCGqy-07vQJUySV5Gs-kA" target="_blank">Div Humas Polri</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="cr">
        <p>Website E-CrimePort <strong>kelompok A 12.4B.14</strong> &#169; <?= date('Y'); ?>, <em>Kelompok A</em> </p>
    </div>
</footer><!-- End Footer -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#date,#time").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>