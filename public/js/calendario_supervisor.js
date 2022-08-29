window.onload = function () {
    var id_empleado = $("#agente_info").find("[name=id_empleado]").val();

    data = {
        'id_empleado': id_empleado
    }

    $.ajax({
        url: '/supervisor/calendario/agente',
        type: 'GET',
        dataType: 'json',
        data: data,
        beforeSend: function () {
            console.log('enviada');
        },
        complete: function () {
            console.log('completada');
        },  
        success: function (response) {
            data = response.evento;
            console.log(data);
            var calendarE1 = document.getElementById('calendario_supervisor_agente');
            var calendar = new FullCalendar.Calendar(calendarE1, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                locales: 'es',
                events: data
            });
            calendar.render();

        },
        error: function (jqXHR) {
            console.log('error!');
        }
    });
}
