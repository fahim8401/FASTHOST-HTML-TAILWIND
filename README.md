

# Hosting Website

This is a hosting website built with HTML, Tailwind CSS, and PHP. It is designed to be deployed on cPanel or a VPS server.

## Features

- Responsive design with Tailwind CSS
- Dynamic functionality powered by PHP
- Easy to deploy on cPanel or VPS

---

## Installation

### Requirements

- **cPanel or VPS** with the following:
  - PHP 7.4 or higher
  - MySQL or MariaDB (if database is needed)
  - Apache/Nginx web server
  - Composer (for dependency management, if applicable)

---

### Deployment on cPanel

1. **Upload Files**:  
   - Compress your project files into a `.zip` file.  
   - Go to **cPanel File Manager** > **public_html** directory and upload the `.zip` file.  
   - Extract the contents.

2. **Database Setup (if required)**:  
   - Create a database in the **MySQL Databases** section.  
   - Add a user to the database with full privileges.  
   - Import your database file using **phpMyAdmin**.

3. **Update Configuration**:  
   - Modify any configuration files (e.g., `.env`, `config.php`) to match your database and server settings.

4. **Test Your Website**:  
   - Access your website using your domain to ensure everything works correctly.

---

### Deployment on VPS

1. **Install Required Packages**:
   ```bash
   sudo apt update
   sudo apt install apache2 php php-mysql unzip

2. Upload Files:

Use an SFTP client (e.g., FileZilla) or upload via SSH:

scp website.zip user@your-vps-ip:/var/www/html

Extract the uploaded files:

cd /var/www/html
unzip website.zip



3. Database Setup (if required):

Log in to MySQL:

mysql -u root -p

Create a database and user:

CREATE DATABASE your_database;
CREATE USER 'your_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON your_database.* TO 'your_user'@'localhost';
FLUSH PRIVILEGES;

Import your database file:

mysql -u your_user -p your_database < database.sql



4. Update Configuration:

Modify configuration files to match your database and server settings.



5. Set Permissions:

Ensure proper permissions for your project:

sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html



6. Restart the Web Server:

sudo systemctl restart apache2


7. Access Your Website:

Visit your VPS IP or domain in the browser.





---

License

This project is open-source and available under the MIT License.


---

Contributions

Contributions are welcome! Feel free to fork this repository and submit a pull request.


---

Support

For any issues or questions, feel free to reach out by opening an issue on this repository.



