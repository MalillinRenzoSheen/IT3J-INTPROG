<?php
$groupName = "GROUP-4";

$teamMembers = [
    [
        "id" => "bryan-camayang",
        "name" => "Bryan Camayang",
        "image" => "images/bryan.jpg",
        "age" => "21 Years Old",
        "birthdate" => "August 02, 2005",
        "address" => "Muntinlupa City",
        "motto" => "Strive for excellence in everything you do.",
        "phone" => "+639530440570",
        "facebook" => "https://www.facebook.com/bryan.bonula",
        "email" => "bryancamayang01@gmail.com",
    ],
    [
        "id" => "renzo-sheen",
        "name" => "Renzo Sheen U. Malillin",
        "image" => "images/renzo.jpg",
        "age" => "22 Years Old",
        "birthdate" => "May 22, 2004",
        "address" => "Paranaque City",
        "motto" => "Di man magwagi ang mahalaga nakibahagi",
        "phone" => "+639070807240",
        "facebook" => "https://www.facebook.com/re.nzo.56884",
        "email" => "malillinrenzosheen_bsit@plmun.edu.ph",
    ],
    [
        "id" => "jerson-santos",
        "name" => "Jerson Santos Turcolas",
        "image" => "images/jerson.jpg",
        "age" => "20 Years Old",
        "birthdate" => "June 06, 2006",
        "address" => "San Pedro Laguna",
        "motto" => "Time is GOLD",
        "phone" => "+63605771882",
        "facebook" => "https://www.facebook.com/Jerson03Santos#",
        "email" => "turcolasjerson_bsit@plmun.edu.ph",
    ],
    [
        "id" => "kingfroiland-paor",
        "name" => "Kingfroiland Paor",
        "image" => "images/king.png",
        "age" => "20 Years Old",
        "birthdate" => "November 24, 2005",
        "address" => "Muntinlupa City",
        "motto" => "Strive for excellence in everything you do.",
        "phone" => "+639500447923",
        "facebook" => "https://www.facebook.com/kingfroiland.paor.9#",
        "email" => "paorkingfroiland_bsit@plmun.edu.ph",
    ],
    [
        "id" => "mary-estoque",
        "name" => "Mary Estoque",
        "image" => "images/mary.jpg",
        "age" => "19 Years Old",
        "birthdate" => "August 27, 2006",
        "address" => "Muntinlupa City",
        "motto" => "everything happens for a reason.",
        "phone" => "+639938210763",
        "facebook" => "https://www.facebook.com/maryjoy.estoque.161#",
        "email" => "maryjoyestoque06@gmail.com",
    ],
    [
        "id" => "princess-famor",
        "name" => "Princess Ann Famor",
        "image" => "images/princess.jpg",
        "age" => "20 Years Old",
        "birthdate" => "October 24, 2005",
        "address" => "Muntinlupa City",
        "motto" => "“Your future is built by what you do today”.",
        "phone" => "+639926319599",
        "facebook" => "https://www.facebook.com/princessann.famor.1#",
        "email" => "famorprincessann_bsit@plmun.edu.ph",
    ],
    [
        "id" => "johndel",
        "name" => "Johndel",
        "image" => "images/johndel.jpg",
        "age" => "21 Years Old",
        "birthdate" => "August 02, 2005",
        "address" => "19 Hyacinth St., South Green Heights Village, Putatan",
        "motto" => "Walk your own path, even when no footprints exist.",
        "phone" => "+639502839123",
        "facebook" => "https://www.facebook.com/profile.php?id=61584894823871#",
        "email" => "dorigjohndel_bsit@plmun.edu.ph",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Font Awesome for Contact Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>

    <!-- Header Section -->
    <header class="header">
        <div class="header-title"><?php echo $groupName; ?></div>
        <div class="header-search">
            <form id="searchForm" role="search" aria-label="Search team members">
                <input id="searchInput" name="q" type="search" placeholder="Search team members..." aria-label="Search team members" />
                <button type="button" id="searchClear" aria-label="Clear search">&times;</button>
            </form>
        </div>
        <div class="header-menu">
            <button id="menuToggle" aria-haspopup="true" aria-expanded="false">☰</button>
            <ul class="menu-list" aria-label="Header menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <h1 class="section-title">Meet Our Team</h1>

        <!-- Team Grid Overview (reverse-triangle rows: 4,3,2,1) -->
        <section class="team-grid">

            <div class="team-row row-4">
                <?php foreach (array_slice($teamMembers, 0, 4) as $member): ?>
                    <div class="grid-item">
                        <div class="profile-img-wrapper">
                            <img src="<?php echo $member["image"]; ?>" alt="<?php echo $member["name"]; ?>">
                        </div>

                        <a href="#<?php echo $member["id"]; ?>" class="read-more">
                            Read More
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="team-row row-3">
                <?php foreach (array_slice($teamMembers, 0, 3) as $member): ?>
                    <div class="grid-item">
                        <div class="profile-img-wrapper">
                            <img src="<?php echo $member["image"]; ?>" alt="<?php echo $member['name']; ?>">
                            <a href="#<?php echo $member["id"]; ?>" class="read-more"> Read More</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <!-- Detailed Profiles -->
        <section class="profile-list">
            <?php foreach ($teamMembers as $member): ?>
                <div class="detail-card" id="<?php echo $member["id"]; ?>">
                    <div class="profile-img-wrapper" style="width: 140px; height: 140px; margin: 0;">
                        <img src="<?php echo $member["image"]; ?>" alt="<?php echo $member["name"]; ?>">
                    </div>
                    <h2 class="detail-name">
                        <?php echo $member["name"]; ?>
                    </h2>
                    <p class="detail-bio">
                        Age: <?php echo $member["age"]; ?><br><br>
                        Birthdate: <?php echo $member["birthdate"]; ?> <br>
                        Address: <?php echo $member["address"]; ?><br>
                        Motto: "<?php echo $member["motto"]; ?>"
                    </p>
                    <ul class="contact-list">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <?php echo $member["phone"]; ?>
                        </li>
                        <li>
                            <i class="fa-solid fa-globe"></i>
                            <a href="<?php echo $member["facebook"]; ?>" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:<?php echo $member["email"]; ?>">
                                <?php echo $member["email"]; ?>
                            </a>
                        </li>
                    </ul>
                </div>

            <?php endforeach; ?>
        </section>

        <!-- Footer -->

    </div>
    <script src="system.js"></script>
    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-center">
                <div class="footer-brand"><?php echo $groupName; ?></div>
                <p class="footer-text">IT3J-INTPROG</p>
                <p class="copyright">
                    © <?php echo date ("Y");?> <?php echo $groupName;?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>