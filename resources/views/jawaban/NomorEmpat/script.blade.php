<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth', // Tampilan bulanan
            events: '/event/get-json', // Endpoint API untuk mengambil data jadwal
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay',
            },
            eventColor: '#378006',
        });
        calendar.render();
    });
</script>
