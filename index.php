<html>
<head>
    <title>Measurement Converter</title>
</head>
<body>
    <h1>Measurement Converter</h1>
    <form id="convert-form">
        <label for="measurement">Measurement:</label>
        <input type="text" name="measurement" id="measurement"><br>
        <label for="from_unit">From:</label>
        <select name="from_unit" id="from_unit">
            <option value="m">meters</option>
            <option value="cm">centimeters</option>
            <option value="km">kilometers</option>
            <option value="in">inches</option>
            <option value="ft">feet</option>
            <option value="mi">miles</option>
        </select><br>
        <label for="to_unit">To:</label>
        <select name="to_unit" id="to_unit">
            <option value="m">meters</option>
            <option value="cm">centimeters</option>
            <option value="km">kilometers</option>
            <option value="in">inches</option>
            <option value="ft">feet</option>
            <option value="mi">miles</option>
        </select><br>
        <input type="button" onclick="showMeasurement()" value="Convert" id="convert-btn">
    </form>
    <div id="result" ></div> 
    <script>
        function showMeasurement() {
            var xmlhttp = new XMLHttpRequest();
            const measurement = document.getElementById("measurement").value;
            const from_unit = document.getElementById("from_unit").value;
            const to_unit = document.getElementById("to_unit").value;
            xmlhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    if (!isNaN(this.responseText)) {
                        document.getElementById("result").innerHTML = `${measurement} ${from_unit} = ${Number(this.responseText).toFixed(3)} ${to_unit}`;
                    }else{
                        document.getElementById("result").innerHTML = this.responseText;
                    }
                }
            };
            xmlhttp.open("GET", "API.php?measurement=" + measurement + "&from_unit=" + from_unit + "&to_unit=" + to_unit, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>

