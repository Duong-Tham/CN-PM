<div class="inner-banner">
    </div>
    <div class="w3l-menublock py-5">
        <!-- menu block -->
        <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
            <div class="container">
                <div class="title-content mb-5">
                    <h5 class="title-small text-center mb-2">Check it below</h5>
                    <h3 class="title-big text-center mb-5">Our Menu Items</h3>
                </div>
                

                <input id="tab1" type="radio" name="tabs" checked>
                <a href="menu.php?id=coffe" ><label class="tabtle" for="tab1">Coffee</label></a>
                <input id="tab2" type="radio" name="tabs" >
                <a href="menu.php?id=tea" ><label class="tabtle" for="tab2">Tea</label></a>
                <section id="content1" class="tab-content text-left">
                    <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                    <div class="row menu-body">
                        <!-- Section starts: Appetizers -->
                        <div class="col-sm-12">
                            <!-- Item starts -->
                            <?php
                                include('xuly/phantrang.php')
                            ?>
                            <!-- Item ends -->
                        </div>
                        <?php
                                include('xuly/pagi.php')
                        ?>
                        

                            <!-- Item starts -->
                         

                </section>
                <section id="content2" class="tab-content text-left">
                    <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                    <div class="row menu-body">
                        <!-- Section starts: Appetizers -->
                        <div class="col-sm-12">
                            <!-- Item starts -->
                            <?php
                                include('xuly/ptea.php')
                            ?>
                            <!-- Item ends -->
                        </div>
                        <?php
                                include('xuly/pgtea.php')
                        ?>
                        

                            <!-- Item starts -->
                         

                </section>

                
            </div>
        </div>
        <!-- menu block -->
    </div>