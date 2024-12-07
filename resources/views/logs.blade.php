<html>

<body>
    <header>
        <h3>Список логов</h3>
    </header>
    <div>
        <table border="1">
            <tr>
                <th>Время</th>
                <th>Длительность, с</th>
                <th>IP</th>
                <th>Url</th>
                <th>Метод</th>
                <th>Содержание</th>
            </tr>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->time }}</td>
                    <td>{{ $log->duration }}</td>
                    <td>{{ $log->ip }}</td>
                    <td>{{ $log->url }}</td>
                    <td>{{ $log->method }}</td>
                    <td>{{ $log->input }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
