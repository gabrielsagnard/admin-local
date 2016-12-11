
  <!-- Main Footer -->
	<?php
		include '../plugins/ics-parser/class.iCalReader.php';

		$ical   = new ICal('../plugins/ics-parser/MyCal.ics');
		$eventsCal = $ical->events();
	?>

</div>
<!-- ./wrapper -->

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="../plugins/fullcalendar/fr.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();

        $('#calendar').fullCalendar({
	  height: 'auto',
	  allDaySlot: false,
          header: {
            left: 'prev,next',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          //Random default events
          events: [
		<?

		foreach ($eventsCal as $event) {
			echo "{";
			echo 'title: "' . @$event['SUMMARY'] . '",';
			$dtstart = new DateTime($event['DTSTART']);
			echo 'start: "' . $dtstart->format(DateTime::ISO8601).'",';
			if(!empty($event['DTEND'])){
				$dtend = new DateTime($event['DTEND']);
				echo 'end: "' . $dtend->format(DateTime::ISO8601).'",';
			}
			echo 'backgroundColor: "#0073b7",borderColor: "#0073b7"';
			echo "},";
		}
		?>
          ],
        });

        });
    </script>
  </body>
</html>
