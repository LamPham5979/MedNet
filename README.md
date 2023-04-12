#Measurement Converter
This project is a simple measurement converter that allows users to convert various measurements such as meters, centimeters, kilometers, inches, feet, and miles. The user can input a measurement value, select the "from" unit, and the "to" unit they would like to convert to, and then click on the "Convert" button to get the converted value.

##Files
###index.php
This file contains the HTML and JavaScript code that renders the measurement converter. It contains a form that allows users to input the measurement, select the "from" and "to" units, and a button to trigger the conversion. It also includes a script that sends an AJAX request to the API.php file to get the converted value and displays it on the page.

###API.php
This file is responsible for handling the AJAX request sent by index.php. It includes the convert.php file and calls the convertMeasurement function with the parameters passed through the AJAX request. If the input is not a number, it returns an error message. Otherwise, it returns the converted value.

###convert.php
This file contains the convertMeasurement function, which takes three parameters: measurement, from_unit, and to_unit. It first converts the input measurement to meters and then converts it to the desired unit. If the input is not a number, it returns nothing.

##How to use
To use the measurement converter, ensure you have PHP installed and set up.

1. Create a directory and clone the repository to get the files on your local machine.
2. Get to the directory that the repository was cloned in with all three files.
3. Open a php web server with: php -S localhost:{anyPort(ex. 9900)}.
4. Open the server you created at that address in a web browser.
5. Input a measurement value, select the "from" and "to" units, and click on the "Convert" button.

The converted value will be displayed below the form.
