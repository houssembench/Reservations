
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">

    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <main>
      <nav class="main-menu">
        <h1>Azultunes</h1>
        <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb" alt="" />
        <ul>
          <li class="nav-item active">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-house nav-icon"></i>
              <span class="nav-text">View</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-user nav-icon"></i>
              <span class="nav-text">Add</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-calendar-check nav-icon"></i>
              <span class="nav-text">Delete</span>
            </a>
          </li>

          

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-sliders nav-icon"></i>
              <span class="nav-text">Update</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="content">
        <div class="left-content">
          <div class="activities">
            <div class="main-content">
            <h1>Reservations :</h1>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Price</th>
                            <th>Name</th>
                            <th>Hotel</th>
                            <th>Adults</th>
                            <th>Children</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-04-01</td>
                            <td>2024-04-05</td>
                            <td>200DT</td>
                            <td>Amine chokri</td>
                            <td>Hotel hama resort</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2024-04-10</td>
                            <td>2024-04-15</td>
                            <td>300DT</td>
                            <td>hamza biche</td>
                            <td>Hotel el mouradi</td>
                            <td>1</td>
                            <td>0</td>
                        </tr>
                        <!-- Add more reservation rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
            <div class="activity-container">
              
          <div class="active-calories">
            <h1 style="align-self: flex-start">Active Reservations</h1>
            <div class="active-calories-container">
              <div class="box" style="--i: 85%">
                <div class="circle">
                  <h2>85<small>%</small></h2>
                </div>
              </div>
              <div class="calories-content">
                <p><span>Today:</span> 400</p>
                <p><span>This Week:</span> 3500</p>
                <p><span>This Month:</span> 14000</p>
              </div>
            </div>
          </div>

          
          </div>
        </div>
      </section>
    </main>
    <script>const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((navItem, i) => {
  navItem.addEventListener("click", () => {
    navItems.forEach((item, j) => {
      item.className = "nav-item";
    });
    navItem.className = "nav-item active";
  });
});</script>
  </body>
    </div>
</body>
</html>
