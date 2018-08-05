<?php include 'header.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <div align="center">
    <div class="jumbotron" id="cq-search-controls">
        <div style=" width: 100%; height:auto">
            <fieldset>
                <table >
                    <tr style="height:30px">
                        <td>Keyword: </td>
                        <td><input id="cq-search-input" type="text" /></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Year Range:</td>
                        <td><select id="cq-min-year"></select> to <select id="cq-max-year"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td> Engine Position:</td>
                        <td><select id="cq-engine-position"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td> Engine Type: </td>
                        <td><select id="cq-engine-type"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td> Engine Cylinders: </td>
                        <td><select id="cq-min-cylinders"></select> to <select id="cq-max-cylinders"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Engine Power (hp): </td>
                        <td><input type="text" id="cq-min-power" style="width:30px" /> to <input type="text" id="cq-max-power" style="width:30px" /></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Engine Torque (lb-ft):</td>
                        <td><input type="text" id="cq-min-torque" style="width:30px" /> to <input type="text" id="cq-max-torque" style="width:30px" /></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Engine Fuel Type: </td>
                        <td><select id="cq-fuel-type"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Top Speed (mph): </td>
                        <td><input type="text" id="cq-min-top-speed" style="width:30px" /> to <input type="text" id="cq-max-top-speed" style="width:30px" /></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Drivetrain:</td>
                        <td><select id="cq-drive"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Seats: </td>
                        <td><select id="cq-seats"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Doors: </td>
                        <td><select id="cq-doors"></select></td>
                    </tr>
                    <tr style="height:30px">
                        <td>Weight (lbs): </td>
                        <td><input type="text" id="cq-min-weight" style="width:30px" /> to <input type="text" id="cq-max-weight" style="width:30px" /></td>
                    </tr>
                    <tr style="height:30px">
                        <td colspan="2">  <center><input type="button" id="cq-search-btn" value="Search Car" style="border-radius: 12px;"/></center></td>
                    </tr>
                </table>
                 
            </fieldset>
        </div>
        <div style="width:100%;">
            <fieldset>
                <div id="cq-search-results"><br/>Search Results:</div>
            </fieldset>
        </div>
    </div>

    <div id="cq-search-result" align="center" style="display:none"></div>
</div>

<?php include 'footer.php';?>