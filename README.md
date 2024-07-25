# Employee Management System

## Project Overview

This is a web-based Employee Management System that allows users to:

- Register an account
- Log in to their account
- View and manage employee details
- Add employee details such as name, phone number, email, position in the company, and upload a profile picture
- Navigate through the Home and Contact Us pages

## Pages Included

1. **Login Page**
2. **Register Page**
3. **Employee Detail Page**
4. **Home Page**
5. **Contact Us Page**

## Prerequisites

To run this project, you need to have the following software installed:

- [XAMPP](https://www.apachefriends.org/index.html) (includes Apache server, MySQL, PHP, and Perl)

## Installation and Setup

1. **Download and Install XAMPP**

    - Download XAMPP from [here](https://www.apachefriends.org/index.html).
    - Install XAMPP on your machine following the instructions provided on the website.

2. **Clone the Repository**

    Clone this repository to your local machine using:

    ```bash
    git clone https://github.com/your-username/employee-management.git
    ```

3. **Move the Project to XAMPP's htdocs Directory**

    Move the cloned repository to XAMPP's `htdocs` directory. The path typically looks like this:

    ```bash
    C:/xampp/htdocs/
    ```

4. **Start Apache and MySQL Servers**

    - Open XAMPP Control Panel.
    - Start the Apache and MySQL servers by clicking the 'Start' buttons next to each module.

5. **Create the Database**

    - Open your web browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
    - Create a new database named `employee_management`.
    - Import the `employee_management.sql` file located in the project directory to set up the necessary tables. You can find the import option in the phpMyAdmin interface.

6. **Configure Database Connection**

    - Open the project folder and locate the database configuration file (e.g., `config.php` or `db.php`).
    - Update the database configuration with your database details (if needed).

    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee_management";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

## Running the Project

1. **Access the Project in Your Browser**

    Open your web browser and enter the following URL to access the home page of the Employee Management System:

    ```bash
    http://localhost/employee-management/home.php
    ```

## Usage

- **Register:** Create a new account by providing the necessary details.
- **Login:** Log in with your credentials.
- **Add Employee Details:** Navigate to the employee detail page to add new employee information.
- **Manage Employees:** View, update, or delete employee details as needed.

## Contact

For any questions or suggestions, please feel free to contact us via the Contact Us page.

---

Thank you for using the Employee Management System!
