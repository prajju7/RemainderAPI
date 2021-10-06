console.log("Prajwal");
var cap;

function showTasks() {
    var request = new XMLHttpRequest();
    request.open('POST', 'server.php', true);

    request.onload = function() {
        // begin accessing JSON data here
        cap = this.responseText
        cap = JSON.parse(cap);
        console.log(cap);
    }


    google.charts.load('current', {
        'packages': ['table']
    });
    google.charts.setOnLoadCallback(drawTable);

    function drawTable() {
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Task');
        data.addColumn('string', 'Due');
        data.addColumn('string', 'Time Zone');
        if (cap.length > 0) {
            for (var i = 0; i < cap.length; i++)
                data.addRows([
                    [cap[i]["t_do"], cap[i]["due"], cap[i]["t_zone"]]
                ]);
        } else {
            console.log("EMPTY");
        }

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {
            showRowNumber: true,
            width: '50%',
            height: '50%'
        });
    }
    request.send();
}