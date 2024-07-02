<?php $this->load->view('include/header');?>
<div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1><a href="<?php echo base_url(); ?>" id="logo">คณะรัฐศาสตร์และรัฐประศาสนศาสตร์
                    มหาวิทยาลัยราชภัฏเชียงราย</a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="current"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li>
                        <a href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Lorem dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam sed tempus</a></li>
                            <li>
                                <a href="#">Submenu</a>
                                <ul>
                                    <li><a href="#">Lorem dolor</a></li>
                                    <li><a href="#">Phasellus magna</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam nisl</a></li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="two-sidebar.html">Two Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                </ul>
            </nav>

        </div>

        <!-- Banner -->
        <section id="banner">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Highlights -->
        <section class="wrapper style1">
            <div class="container">
                <div class="row gtr-200">
                    <section class="col-4 col-12-narrower">
                        <div class="box highlight">
                            <i class="icon solid major fa-paper-plane"></i>
                            <h3>This Is Important</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a
                                rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </section>
                    <section class="col-4 col-12-narrower">
                        <div class="box highlight">
                            <i class="icon solid major fa-pencil-alt"></i>
                            <h3>Also Important</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a
                                rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </section>
                    <section class="col-4 col-12-narrower">
                        <div class="box highlight">
                            <i class="icon solid major fa-wrench"></i>
                            <h3>Probably Important</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a
                                rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- Gigantic Heading -->
        <section class="wrapper style2">
            <div class="container">
                <header class="major">
                    <h2>"สิงห์พญามังราย"</h2>
                    <p>สร้างผู้นำเพื่อการพัฒนาท้องถิ่นอย่างยั่งยืน</p>
                </header>
            </div>
        </section>

        <!-- Posts -->
        <section class="wrapper style1">
            <div class="container">
                <div class="row">
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The First Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis,
                                    sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Second Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis,
                                    sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Third Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis,
                                    sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Fourth Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis,
                                    sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="cta" class="wrapper style3">
            <div class="container">
                <header>
                    <h2>Are you ready to continue your quest?</h2>
                    <a href="#" class="button">Insert Coin</a>
                </header>
            </div>
        </section>
        <?php $this->load->view('include/footer');?>