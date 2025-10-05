<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php
// license.php

// Include common header and configuration files
include_once 'header.php'; // Header includes navigation
?>
</head>

<body class="bg-gray-100">
    <!-- Header Section -->
    <section class="bg-gradient-to-r from-blue-700 to-blue-600 text-white py-12 sm:py-16">
        <div class="container mx-auto text-center px-4 sm:px-6">
            <h1 class="text-3xl sm:text-4xl font-bold">Contact Us</h1>
            <p class="mt-4 text-base sm:text-lg max-w-2xl mx-auto">We'd love to hear from you! Reach out to us with your queries or feedback.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 sm:py-16">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 px-4 sm:px-6">
            <!-- Contact Details -->
            <div class="bg-white shadow-xl rounded-xl p-6 sm:p-8 hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-6 text-gray-800">Get in Touch</h2>
                <p class="mb-4 sm:mb-6 text-gray-600 text-sm sm:text-base">
                    If you have any questions or need assistance, feel free to reach out to us via the form or
                    contact details below.
                </p>
                <ul class="text-gray-600 space-y-3 sm:space-y-4">
                    <li class="flex items-center">
                        <i class="fa-solid fa-phone text-blue-500 text-lg sm:text-xl mr-3 sm:mr-4"></i>
                        <div>
                            <span class="font-bold block text-sm sm:text-base">Phone:</span>
                            <span class="text-sm sm:text-base">+880-01714038501</span>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-envelope text-blue-500 text-lg sm:text-xl mr-3 sm:mr-4"></i>
                        <div>
                            <span class="font-bold block text-sm sm:text-base">Email:</span>
                            <span class="text-sm sm:text-base">support@fhostbd.com</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fa-solid fa-map-marker-alt text-blue-500 text-lg sm:text-xl mr-3 sm:mr-4 mt-1"></i>
                        <div>
                            <span class="font-bold block text-sm sm:text-base">Address:</span>
                            <span class="text-sm sm:text-base">6400 Kanaikhali, Natore, Bangladesh</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="bg-white shadow-xl rounded-xl p-6 sm:p-8 hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-6 text-gray-800">Send Us a Message</h2>
                <form action="submit_contact.php" method="POST">
                    <div class="mb-4 sm:mb-5">
                        <label for="name" class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 sm:py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm sm:text-base">
                    </div>
                    <div class="mb-4 sm:mb-5">
                        <label for="email" class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 sm:py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm sm:text-base">
                    </div>
                    <div class="mb-4 sm:mb-5">
                        <label for="message" class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">Message</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 sm:py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-sm sm:text-base"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 sm:py-4 rounded-lg hover:bg-blue-700 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 text-sm sm:text-base">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="py-12 sm:py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-center mb-6 sm:mb-8 text-gray-800">Our Location</h2>
            <div class="w-full h-64 sm:h-80 lg:h-96 rounded-xl overflow-hidden shadow-xl">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.848591792874!2d90.39945271498005!3d23.750940794581842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85664c9b73f%3A0xeff9d58e1ec1b2e2!2sDhaka!5e0!3m2!1sen!2sbd!4v1610190000000!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

     <?php include_once 'footer.php'; ?> <!-- Footer -->
</body>

</html>
