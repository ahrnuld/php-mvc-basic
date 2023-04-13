<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<?php include __DIR__ . '/../nav.php'; ?>

<div class="jumbotron jumbotron-fluid"
     style="background-image: url('/images/homepage-banner.jpg'), url('https://picsum.photos/800/600'); padding-top: 300px; padding-bottom: 100px;">
    <div class="container">
        <h1 class="display-4 fw-semibold">Welcome to PetWise!</h1>
        <p class="lead fw-semibold">Where Your Pet's Health Is Our Top Priority</p>
        <a class="btn btn-primary rounded-pill btn-lg" href="#" role="button">Book an Appointment</a>

    </div>
</div>

<div class="container">
    <h2 class="mt-4">Veterinarians</h2>
    <p>At PetWise, we have a team of highly skilled veterinarians who are passionate about providing exceptional care
        for your beloved pets.
        Our veterinarians are dedicated to ensuring the health and well-being of your furry friends.</p>

    <div class="row">
        <div class="col">
            <div class="card m-1">
                <img src="/images/vet-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Dr. Emily Nguyen</h4>
                    <p class="card-text">Specializes in Orthopedic Surgery</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card m-1">
                <img src="/images/vet-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Dr. Samantha Patel</h4>
                    <p class="card-text">Specializes in Canine Oncology</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card m-1">
                <img src="/images/vet-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Dr. Eric Chavez</h4>
                    <p class="card-text">Specializes in Feline Medicine</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card m-1">
                <img src="/images/vet-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Dr. Michael Rodriguez</h4>
                    <p class="card-text">Specializes in Small Animal Surgery</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class=" col">
                <h2 class="mt-4">Address</h2>
                <p>PetWise Veterinary Clinic <br>
                    Koningstraat 10 <br>
                    12345 HK Amsterdam</p>
                <h2 class="mt-4">Contact Us</h2>
                <p>Phone: (123) 456-7890 <br>
                    Email: info@petwisevetclinic.com</p>
            </div>
            <div class=" col">
                <img src="/images/address-image.jpg" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . '/../footer.php'; ?>

<script></script>
</body>

</html>
