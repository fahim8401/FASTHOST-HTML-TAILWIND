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
    <section class="bg-blue-700 text-white py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Contact Us</h1>
            <p class="mt-4 text-lg">We'd love to hear from you! Reach out to us with your queries or feedback.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Details -->
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
                <p class="mb-4 text-gray-600">
                    If you have any questions or need assistance, feel free to reach out to us via the form or
                    contact details below.
                </p>
                <ul class="text-gray-600">
                    <li class="mb-2">
                        <i class="fa-solid fa-phone text-blue-500"></i>
                        <span class="font-bold">Phone:</span> +880-01714038501
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-envelope text-blue-500"></i>
                        <span class="font-bold">Email:</span> support@fhostbd.com
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-map-marker-alt text-blue-500"></i>
                        <span class="font-bold">Address:</span> 6400 Kanaikhali, Natore, Bangladesh
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>
                <form action="submit_contact.php" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Our Location</h2>
            <div class="w-full h-96 rounded-lg overflow-hidden">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.848591792874!2d90.39945271498005!3d23.750940794581842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85664c9b73f%3A0xeff9d58e1ec1b2e2!2sDhaka!5e0!3m2!1sen!2sbd!4v1610190000000!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

     <?php include_once 'footer.php'; ?> <!-- Footer -->
</body>

</html>
