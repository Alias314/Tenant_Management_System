<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<?php
  session_start();

// Debugging: Check session values
//   print_r($_SESSION);
//   print_r($_GET);

?>
<head>
    <script src="../../assets/dist/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment Information</title>
    <link rel="icon" href="../../assets/src/svg/c-logo.svg">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/src/css/themes.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Adjust based on the height of your navbar */
        }
        .glass-navbar {
            background: rgba(0, 0, 0, 0.3); /* White background with 70% opacity */
            backdrop-filter: blur(0.5px); /* Blur effect */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        #banner {
             max-height: 50px; /* Minimized logo size */
             transition: 0.8s; /* Smooth transition */
         }
    </style>
</head>
<body class="bg-body-tertiary">
    <?php include ('../../core/themes.php') ?>

    <nav class="navbar navbar-light fixed-top justify-content-center align-items-center glass-navbar">
        <a class="navbar-brand logo" href="../../views/common/landing.php">
            <img id="banner" src="../../assets/src/svg/c.svg" alt="Website Logo" class="img-fluid">
        </a>
    </nav>

    <main class="col-md-12 col-lg-12 px-md-4">
        <div class="container mt-4 pt-4">
            <div class="row">
                <!-- Image column -->
                <div class="col-lg-5 mb-4">
                    <img src="../../assets/src/img/apartment-img-template-1.jpg" class="img-fluid shadow" alt="Apartment Image">
                </div>
                    
                <!-- Form column -->
                <div class="col-lg-7">
                    <h2>Tenant Information</h2>
                    <p>Enter your personal information so that we may get to know you better.</p>
                    <hr>
                    <!-- Tenant details form -->
                    <form action="submit_tenant_info.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">First Name*</label>
                                <input type="text" class="form-control py-2" id="firstName" name="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control py-2" id="middleName" name="middleName" placeholder="Middle Name">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastName" class="form-label">Last Name*</label>
                                <input type="text" class="form-control py-2" id="lastName" name="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="dateOfBirth" class="form-label">Date of Birth*</label>
                            <input type="date" class="form-control  py-2" id="dateOfBirth" name="dateOfBirth" placeholder="mm/dd/yyy" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender*</label>
                            <select class="form-select py-2" id="gender" name="gender" required>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="N">Prefer not to say</option>
                            </select>
                        </div>
                        <br>
                        <!-- Contact information -->
                        <h2>Contact Information</h2>
                        <p>Enter your contact information so that we may be able to get back to you.</p>
                        <hr>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address*</label>
                            <input type="email" class="form-control py-2" id="emailAddress" name="emailAddress" placeholder="example@domain.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number*</label>
                            <input type="tel" class="form-control py-2" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                        </div>
                        <br>
                        <!-- Valid documents upload -->
                        <h2>Valid Documents</h2>
                        <p>Upload a picture or scan of your <a href="#" style="text-decoration: none;">valid documents</a> to assist with your lease.</p>
                        <hr>
                        <div class="mb-3">
                            <label for="documentImage" class="form-label">Valid Documents*</label>
                            <input type="file" class="form-control py-2" id="documentImage" name="documentImage" accept="image/*" required>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Submit Tenant Information</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <script>
        // Function to handle scroll event
        window.addEventListener('scroll', function() {
            var banner = document.getElementById('banner');
            var navbar = document.getElementsByClassName('glass-navbar')[0]; // Select the first element

            if (window.scrollY > 80) {
                banner.style.maxHeight = '35px'; // Adjusted size when scrolled down
                // navbar.style.background = 'none'; // Remove background when scrolled down
                navbar.style.backdropFilter = 'none'; // Remove backdrop filter when scrolled down
                navbar.style.boxShadow = 'none'; // Remove box shadow when scrolled down
            } else {
                banner.style.maxHeight = '50px'; // Default size when not scrolled down
                navbar.style.background = 'rgba(0, 0, 0, 0.3)'; // Default background color
                navbar.style.backdropFilter = 'blur(0.5px)'; // Restore backdrop filter when not scrolled down
                navbar.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)'; // Restore box shadow when not scrolled down
            }
        });
    </script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
