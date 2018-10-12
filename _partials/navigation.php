<div class="navigation-panel">
    <div class="hamburger open-ham" onclick="openNav()"></div>
    <!-- <div class="hamburger close-ham" onclick="closeNav()"></div> -->
    <div>
        <a class="a-to-home" href="index.php">
            <p class="name-of-project">Phoenix</p>
        </a>
    </div>
    <div>
        <p class="copyright">©&nbsp;&nbsp;2018</p>
    </div>
</div>

<div id="side_navigation" class="sidenav" onclick="closeNav()">
    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <p style="color: white">nasrac</p>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById("side_navigation").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("side_navigation").style.width = "0";
    }
</script>
