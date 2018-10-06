<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo link_tag('css/bootstrap.min.css'); ?>
    <?php echo link_tag('https://use.fontawesome.com/releases/v5.0.13/css/all.css'); ?>
    <?php echo link_tag('css/style.css'); ?>

    <title>RNGDEV</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">

<!-- START HERE -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
        <a href="index.html" class="navbar-brand">RNGDEV</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nave-item">
                    <a href="#explore-head-section" class="nav-link">Explore</a>
                </li>
                <li class="nav-item">
                    <a href="#create-head-section" class="nav-link">Create</a>
                </li>
                <li class="nav-item">
                    <a href="#share-head-section" class="nav-link">Share</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Home SECTION -->

<header id="home-section">
    <div class="dark-overlay">
        <div class="home-inner container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <h1 class="display-4">
                        Build <strong>Social Profile</strong> and gain revenue <strong>Profile</strong>
                    </h1>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur consequuntur debitis enim fugit iusto labore non porro reprehenderit tempore.
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi cum exercitationem ipsa nesciunt nobis sint sunt temporibus! Amet, sequi.
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-and">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio dolore expedita ipsum numquam obcaecati qui quo sint unde, veniam?
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-primary text-center card-form">
                        <div class="card-body">
                            <h3>Sign Up Today!</h3>
                            <p>Please fill out this form to register</p>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Conform Password">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- EXPLORE HEAD -->
<section id="explore-head-section">
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Explore</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolor doloremque ipsa non, nulla pariatur rerum? Assumenda delectus laboriosam soluta.</p>
                <a href="#" class="btn btn-outline-secondary">Find Out More</a>
            </div>
        </div>
    </div>
</section>

<!-- EXPLORE SECTION -->
<section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/explore-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
            </div>
            <div class="col-md-6">
                <h3>Explore and connect</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet animi aperiam beatae, blanditiis cum dolor dolore doloremque dolores ea eius fugiat ipsum iusto laborum laudantium maiores maxime minus molestias neque nobis nostrum optio, praesentium ratione rem reprehenderit rerum sapiente ullam unde vero voluptas! Cumque eius explicabo in quibusdam tenetur.</p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CREATE HEAD -->
<section id="create-head-section" class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Create</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolor doloremque ipsa non, nulla pariatur rerum? Assumenda delectus laboriosam soluta.</p>
                <a href="#" class="btn btn-outline-secondary">Find Out More</a>
            </div>
        </div>
    </div>
</section>

<!-- CREATE SECTION -->
<section id="create-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2">
                <img src="images/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
            </div>
            <div class="col-md-6 order-1">
                <h3>Create Your Passion</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet animi aperiam beatae, blanditiis cum dolor dolore doloremque dolores ea eius fugiat ipsum iusto laborum laudantium maiores maxime minus molestias neque nobis nostrum optio, praesentium ratione rem reprehenderit rerum sapiente ullam unde vero voluptas! Cumque eius explicabo in quibusdam tenetur.</p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPLORE HEAD -->
<section id="share-head-section" class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Share</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolor doloremque ipsa non, nulla pariatur rerum? Assumenda delectus laboriosam soluta.</p>
                <a href="#" class="btn btn-outline-secondary">Find Out More</a>
            </div>
        </div>
    </div>
</section>

<!-- SHARE SECTION -->
<section id="share-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/share-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
            </div>
            <div class="col-md-6">
                <h3>Share what you'r create</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet animi aperiam beatae, blanditiis cum dolor dolore doloremque dolores ea eius fugiat ipsum iusto laborum laudantium maiores maxime minus molestias neque nobis nostrum optio, praesentium ratione rem reprehenderit rerum sapiente ullam unde vero voluptas! Cumque eius explicabo in quibusdam tenetur.</p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio iste numquam repellendus soluta suscipit!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->

<footer id="main-footer" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col text-center py-4">
                <h1>RNGDEV</h1>
                <p>Copyright &copy:
                    <span id="year"></span></p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>
            </div>
        </div>
    </div>
</footer>

<!-- CONTACT Model -->
<div class="modal fade text-dark" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Us</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav'});
    // Smooth Scrolling
    $('#main-nav a').on('click',function(event){
        if(this.hash !== ""){
            event.preventDefault();

            const hash = this.hash;

            $('html,body').animate({
                scrollTop: $(hash).offset().top
            },800, function () {
                window.location.hash = hash;
            });
        }
    });
</script>
</body>

</html>