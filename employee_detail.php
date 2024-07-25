
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Detail Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container my-5">
    <h3 class="text-center mb-5" style="color: white; width: auto;">Employee Detail</h3>
    <div class="card p-3" style="background-color: rgb(0,0,0,0.5);">
        <form id="employeeForm"action="login.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First Name" name="firstName" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" required>
                </div>
            </div>
            <div class="row mb-3" >
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>
            <div class="row mb-3;" style="margin-top: 1rem;">
                <div class="col">
                    <input type="file" class="form-control" name="profilePicture" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Position/Role" name="position" required>
                </div>
            </div>
            <div class="d-flex justify-content-end" style="margin-top: 2rem;">
                <button type="submit" class="btn btn-primary">Add Employee</button>
            </div>
        </form>
    </div>

    <table class="table table-striped table-hover mt-4">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>E-mail</th>
            <th>Position</th>
            <th>Profile Picture</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id="employeeTableBody">
            
        <!-- Employee rows will be added here dynamically -->
        </tbody>
    </table>
</div>

<script>
    document.getElementById('employeeForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const firstName = event.target.firstName.value;
        const lastName = event.target.lastName.value;
        const phoneNumber = event.target.phoneNumber.value;
        const email = event.target.email.value;
        const position = event.target.position.value;
        const profilePicture = event.target.profilePicture.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            const profilePictureURL = e.target.result;
            addEmployee(firstName, lastName, phoneNumber, email, position, profilePictureURL);
        };
        reader.readAsDataURL(profilePicture);
    });

    function addEmployee(firstName, lastName, phoneNumber, email, position, profilePictureURL) {
        const tableBody = document.getElementById('employeeTableBody');
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${firstName}</td>
            <td>${lastName}</td>
            <td>${phoneNumber}</td>
             <td>${email}</td>
            <td>${position}</td>
            <td><img src="${profilePictureURL}" alt="Profile Picture" style="width: 50px; height: 50px;"></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editEmployee(this)">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deleteEmployee(this)">Delete</button>
            </td>
        `;

        tableBody.appendChild(row);
    }

    function editEmployee(button) {
        const row = button.parentElement.parentElement;
        const cells = row.getElementsByTagName('td');

        const firstName = cells[0].innerText;
        const lastName = cells[1].innerText;
        const phoneNumber = cells[2].innerText;
        const email = cells[3].innerText;
        const position = cells[4].innerText;
        const profilePictureURL = cells[5].getElementsByTagName('img')[0].src;

        document.getElementById('employeeForm').firstName.value = firstName;
        document.getElementById('employeeForm').lastName.value = lastName;
        document.getElementById('employeeForm').phoneNumber.value = phoneNumber;
        document.getElementById('employeeForm').email.value = email;
        document.getElementById('employeeForm').position.value = position;

        row.remove();
    }

    function deleteEmployee(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }
</script>

</body>
</html>

