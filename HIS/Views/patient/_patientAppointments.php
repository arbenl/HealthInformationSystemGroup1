
  <div class="con">
    <div class="container1">
      <div class="title">
        <h1>Health Information System Kosova</h1>
        <h2>Appointment Calendar</h2>
      </div>
      <div class="calendar">
        <div class="header">
          <button id="previous-btn">&lt;</button>
          <h1 id="month-year"></h1>
          <button id="next-btn">&gt;</button>
        </div>
        <table>
          <thead>
            <tr>
              <th>Sun</th>
              <th>Mon</th>
              <th>Tue</th>
              <th>Wed</th>
              <th>Thu</th>
              <th>Fri</th>
              <th>Sat</th>
            </tr>
          </thead>
          <tbody id="calendar-body">
            <div class="no-event">
              Nuk ka termine
            </div>
          </tbody>
        </table>
        <div id="event-details" class="event-details">
          <span class="event-details-close" onclick="closeEventDetails()">&times;</span>
          <h2> Të dhëna për termin </h2>
          <div id="event-title"></div>
          <div id="event-date"></div>
          <div id="event-description"></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Retrieve appointments from the server
    const events = <?php
      $patId = $_SESSION['patient_id'];
      include_once("DbControllers/DbConnect.php");

      $conn = Database::getInstance()->getConnection();

      // Check for errors in the connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch appointment data from the database
      $query = "SELECT * FROM appointments WHERE patient_id = '$patId'";
      $result = mysqli_query($conn, $query);

      $appointments = array();

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $appointments[] = array(
            'date' => $row['appointment_date'],
            'title' => $row['appointment_id'],
            'description' => $row['pat_desc'],
            'time' => $row['start_time']
          );
        }
      }

      mysqli_close($conn);
      echo json_encode($appointments);
    ?>;

    // Initializimi i kalendarit
    const calendarBody = document.getElementById('calendar-body');
    const monthYearLabel = document.getElementById('month-year');
    const previousBtn = document.getElementById('previous-btn');
    const nextBtn = document.getElementById('next-btn');
    const eventDetails = document.querySelector('.event-details');
    const eventTitle = document.getElementById('event-title');
    const eventDate = document.getElementById('event-date');
    const eventDescription = document.getElementById('event-description');

    let currentDate = new Date();

    // Event listener për buttonin e muajit të mëparshëm
    previousBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() - 1);
      renderCalendar();
    });

    // Event listener për buttonin e muajit të ardhshëm
    nextBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() + 1);
      renderCalendar();
    });

    // Render kalendarin e muajit të tanishëm
    function renderCalendar() {
      const month = currentDate.getMonth();
      const year = currentDate.getFullYear();

      monthYearLabel.textContent = getMonthName(month) + ' ' + year;
      calendarBody.innerHTML = '';

      const firstDay = new Date(year, month, 1).getDay();
      const totalDays = new Date(year, month + 1, 0).getDate();

      let date = 1;

      for (let row = 0; row <= 7; row++) {
        const newRow = calendarBody.insertRow();

        for (let col = 0; col < 7; col++) {
          if (row === 0 && col < firstDay) {
            newRow.insertCell();
          } else if (date > totalDays) {
            break;
          } else {
            const cell = newRow.insertCell();
            const cellDate = new Date(year, month, date);
            const event = findEvent(cellDate);

            if (event) {
              cell.textContent = date;
              cell.classList.add('event');
              cell.addEventListener('click', () => {
                eventTitle.textContent = 'Titulli: ' + event.title;
                eventDate.textContent = 'Data: ' + cellDate.toDateString();
                eventDescription.textContent = 'Përshkrim: ' + event.description +  '\n  Ora: ' + event.time;;
                eventDetails.classList.add('active'); // Tregoj detajet e eventit
              });
            } else {
              cell.textContent = date;
              cell.addEventListener('click', () => {
                eventTitle.textContent = '';
                eventDate.textContent = 'Data: ' + cellDate.toDateString();
                eventDescription.textContent = 'Nuk ka termine';
                eventDetails.classList.add('active');
              });
            }

            // Stilizim i datave të kaluara ose upcoming
            if (cellDate < new Date()) {
              cell.classList.add('previous-date');
            } else {
              cell.classList.add('upcoming-date');
            }

            // Shto klasën për të treguar ditën aktuale
            if (cellDate.getDate() === new Date().getDate() &&
              cellDate.getMonth() === new Date().getMonth() &&
              cellDate.getFullYear() === new Date().getFullYear()) {
              cell.classList.add('current-day');
            }

            date++;
          }
        }
      }
    }

    // Funksion për të marrë emrin e muajit
    function getMonthName(monthIndex) {
      const months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];
      return months[monthIndex];
    }

    // Funksion për të gjetur eventin për një datë të caktuar
    function findEvent(date) {
  const formattedDate = date.toISOString().split('T')[0];
  return events.find(event => {
    const eventDate = new Date(event.date);
    eventDate.setHours(0, 0, 0, 0); // Reset the time portion of the event date
    return eventDate.getTime() === date.getTime();
  });
}

    function closeEventDetails() {
      eventDetails.classList.remove('active');
    }

    // Initial calendar render
    renderCalendar();
  </script>
</body>
</html>
